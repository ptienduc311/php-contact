<?php

function construct()
{
    load('lib', 'validation');
    load_model('index');
}

function registerAction()
{
    global $error, $email;
    if (isset($_POST['btn-reg'])) {
        if (empty($_POST["email"])) {
            $error['email'] = "Email is required";
        } else {
            $email = check_input($_POST["email"]);
            if (!is_email($email)) {
                $error['email'] = "Invalid email format";
            } else {
                if (checkEmailExists($email)) {
                    $error['email'] = "This email already exists in the system";
                } else {
                    $email = $email;
                }
            }
        }
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = check_input($_POST['password']);
            if (strlen($password) < 8) {
                $error['password'] = "Your password must contain at least 8 characters!";
            } elseif (!preg_match("#[0-9]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 number!";
            } elseif (!preg_match("#[A-Z]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 capital letter!";
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 lowercase letter!";
            } elseif (!preg_match("#[\W]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 special character!";
            }
            if (isset($_POST['cpassword']) && !empty($_POST['cpassword'])) {
                $cpassword = check_input($_POST["cpassword"]);
                if (strcmp($password, $cpassword) !== 0) {
                    $error['password'] = "Passwords must match!";
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                }
            } else {
                $error['cpassword'] = "Password confirm is required";
            }
        } else {
            $error['password'] = "Password is required";
        }
        if (empty($error)) {
            $data = [
                'email' => $email,
                'password' => $password,
            ];
            db_insert('users', $data);
        }
    }
    load_view('register');
}

function loginAction()
{
    global $error, $email;

    if (isset($_POST['btn-log'])) {
        // Kiểm tra email
        if (empty($_POST["email"])) {
            $error['email'] = "Email is required";
        } else {
            $email = check_input($_POST["email"]);
            if (!is_email($email)) {
                $error['email'] = "Invalid email format";
            } elseif (!checkEmailExists($email)) {
                $error['email'] = "Email is not registered";
            }
        }

        // Kiểm tra mật khẩu
        if (empty($_POST['password'])) {
            $error['password'] = "Password is required";
        } else {
            $password = check_input($_POST['password']);
            if (strlen($password) < 8) {
                $error['password'] = "Your password must contain at least 8 characters!";
            } elseif (!preg_match("#[0-9]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 number!";
            } elseif (!preg_match("#[A-Z]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 capital letter!";
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 lowercase letter!";
            } elseif (!preg_match("#[\W]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 special character!";
            }
        }

        if (empty($error)) {
            $hash = getPassword($email)['password'];
            if (password_verify($password, $hash)) {
                $_SESSION['is_login'] = true;
                $_SESSION['email'] = $email;
                redirect("?mod=users&action=index");
            } else {
                $error['password'] = "Incorrect Password!";
            }
        }
    }

    load_view('login');
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
