<?php

function construct()
{
    load('lib', 'validation');
    load_model('index');
}

// function indexAction(){
//     load_view('index');
// }

function loginAction()
{
    global $error, $username;
    if (isset($_POST['btn-log'])) {
        if (empty($_POST["username"])) {
            $error['username'] = "Username is required";
        } else {
            $username = check_input($_POST["username"]);
            if (strlen($username) < 3) {
                $error['username'] = "Username must be at least 3 characters";
            } elseif (!is_username($username)) {
                $error['username'] = "Invalid username format";
            } else {
                $username = $username;
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Password is required";
        } else {
            $password = check_input($_POST['password']);
            if (strlen($password) < 5) {
                $error['password'] = "Your password must contain at least 5 characters!";
            } elseif (strlen($password) > 20) {
                $error['password'] = "Your password can contain up to 20 characters!";
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $error['password'] = "Your password must contain at least 1 lowercase letter!";
            } else {
                $password = $password;
            }
        }

        if (empty($error)) {
            $hash = getPassword($username)['password'];
            if (password_verify($password, $hash)) {
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Logged in successfully!";
            } else {
                $error['account'] = "Account does not exist!";
            }
        }
    }
    load_view('login');
}

function contactAction()
{
    // global $start_date, $end_date;
    $result = getDataContact();
    if (isset($_POST['btnFilterDate'])) {
        $start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';
        $end_date = isset($_POST['end_date']) ? $_POST['end_date'] : '';
        $end_date = date('Y-m-d', strtotime($end_date . ' +1 day'));
        $result = getDataContactWithDate($start_date, $end_date);  
    }
    if (isset($_POST['btnDefault'])) {
        $_POST['start_date'] = NULL;
        $_POST['end_date'] = NULL;
    }

    $data['data'] = $result;
    load_view("contact", $data);
        echo $start_date . '------' . $end_date;
}

function logoutAction()
{
    session_destroy();
    redirect('login');
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
