<?php

function construct()
{
    load('lib', 'validation');
    load('lib', 'email');
    load_model('index');
}

function indexAction(){
    global $error, $fullname, $email, $phone, $company, $role, $enquiry, $message;
    if (isset($_POST['send-mail'])) {
        if (isset($_POST['fullname'])) {
            if (empty($_POST['fullname'])) {
                $error['name'] = "Name is required";
            } else {
                $fullname = check_input($_POST['fullname']);
                if (!is_name($fullname)) {
                    $error['name'] = "Your name must contain only uppercase and lowercase letters!";
                } else {
                    $fullname = $fullname;
                }
            }
        }
        if (isset($_POST['email'])) {
            if (empty($_POST["email"])) {
                $error['email'] = "Email is required";
            } else {
                $email = check_input($_POST['email']);
                if (!is_email($email)) {
                    $error['email'] = "Invalid email format";
                } else {
                    $email = $email;
                }
            }
        }
        if (isset($_POST['phone'])) {
            if (empty($_POST["phone"])) {
                $error['phone'] = "Phone is required";
            } else {
                $phone = check_input($_POST['phone']);
                if (!is_phone($phone)) {
                    $error['phone'] = "Invalid phone format";
                } else {
                    $phone = $phone;
                }
            }
        }
        if (isset($_POST['company'])) {
            if (empty($_POST["company"])) {
                $error['company'] = "Company is required";
            } else {
                $company = check_input($_POST["company"]);
            }
        }
        if (isset($_POST['role'])) {
            if (empty($_POST["role"])) {
                $error['role'] = "Role is required";
            } else {
                $role = check_input($_POST["role"]);
            }
        }
        if (isset($_POST['enquiry'])) {
            if (empty($_POST["enquiry"])) {
                $error['enquiry'] = "Enquiry is required";
            } else {
                $enquiry = check_input($_POST["enquiry"]);
            }
        }
        if (isset($_POST['message'])) {
            if (empty($_POST["message"])) {
                $error['message'] = "Message is required";
            } else {
                $message = check_input($_POST["message"]);
            }
        }
        if (empty($error)) {
            $data = [
                'name' => $fullname,
                'email' => $email,
                'phone' => $phone,
                'company' => $company,
                'role' => $role,
                'enquiry' => $enquiry,
                'message' => $message
            ];
            db_insert('info_contact', $data);
            $content = '
                <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Email Contact</title>
                        <style>
                            .container{
                                max-width: 800px;
                                margin: 0 auto;
                            }
                            .container .title{
                                text-align: center;
                            }
                            p{
                                font-size: 20px;
                                margin: 0;
                                padding: 10px 0;
                            }
                            .signature{
                                font-size: 22px;
                                font-weight: bold;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <h1 class="title">Thank you for contacting us, ' . $fullname . '</h1>
                            <p>We received your message and our team has already started working on it.</p>
                            <p>If the inquiry is urgent, it’s best to use the number listed below to talk to our team. Otherwise, we’ll reply by email asap.</p>
                            <p>Talk to you soon, and thanks again for being awesome!</p>
                            <p>Wait for it!</p>
                            <p class="signature">Datalynx</p>
                        </div>
                    </body>
                    </html>
            ';
            send_mail($email, '', "Thank you for contacting", $content);
            $_SESSION['status'] = "Contact sent successfully!";
        }
    }
    load_view('index');
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}