<?php

function construct()
{
    load('lib', 'validation');
    load('lib', 'email');
    load_model('index');
}

function indexAction()
{
    global $error, $fullname, $email, $phone, $company, $role, $subject, $message, $data, $key;
    $default_subject = '';
    $key = 'contact';
    if (isset($_GET['contact-to']) && !empty($_GET['contact-to'])) {
        $key = $_GET['contact-to'];
        switch ($key) {
            case 'product':
                $default_subject = 'Product enquiry';
                break;
            case 'services':
                $default_subject = 'Services enquiry';
                break;
            default:
                $default_subject = '';
                break;
        }
    }
    $data['default_subject'] = $default_subject;
    if (isset($_POST['send-mail'])) {
        if (isset($_POST['fullname'])) {
            if (empty($_POST['fullname'])) {
                $error['name'] = "Name is required";
            } else {
                $fullname = check_input($_POST['fullname']);
                if (!is_name($fullname)) {
                    $error['name'] = "Your name must start with an uppercase letter and contain only uppercase, lowercase letters, and spaces!";
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
        if (isset($_POST['subject'])) {
            if (empty($_POST["subject"])) {
                $error['subject'] = "Subject is required";
            } else {
                $subject = check_input($_POST["subject"]);
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
                'subject' => $subject,
                'message' => $message
            ];
            db_insert('info_contact', $data);
            #Send mail to sales@datalynx.com.au
            $content_sale = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Email Contact</title>
                <style>
                .container {
                    max-width: 800px;
                    margin: 0 auto;
                }
                .container .title {
                    text-align: center;
                    padding: 10px 5px;
                    border-radius: 5px;
                    background-color: rgb(255, 0, 0);
                    color: white;
                }
                p {
                    font-size: 20px;
                    margin: 0;
                    padding: 10px 0;
                    font-weight: bold;
                    color: rgb(83, 82, 82);
                }
                p > span {
                    font-size: 18px;
                    color: rgb(218, 7, 7);
                }
                .message {
                    padding: 10px 20px;
                    border: 1px solid #333;
                    border-radius: 10px;
                    min-height: 100px;
                }
                p.content-message {
                    font-size: 18px;
                    color: #000;
                }
                .signature {
                    font-size: 24px;
                    font-weight: bold;
                    color: #000;
                }
                </style>
            </head>
            <body>
                <div class="container">
                <h1 class="title">Customer contact</h1>
                <h2>Contact Info</h2>
                <p>Customer Name: <span>' . $fullname . '</span></p>
                <p>Email: <span>' . $email . '</span></p>
                <p>Phone: <span>' . $phone . '</span></p>
                <p>Company: <span>' . $company . '</span></p>
                <p>Role: <span>' . $role . '</span></p>
                <p>Subject: <span>' . $subject . '</span></p>
                <h2>Message</h2>
                <div class="message">
                    <p class="content-message">
                    ' . $message . '
                    </p>
                </div>
                <p>Good day!</p>
                <p class="signature">Datalynx</p>
                </div>
            </body>
            </html>
            ';
            send_mail('sales@datalynx.com.au', '', "Customer contact", $content_sale);

            #Send mail to customer
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

            $fullname = '';
            $email = '';
            $phone = '';
            $company = '';
            $role = '';
            $subject = '';
            $message = '';

            $_SESSION['status'] = "Contact sent successfully!";
            $_SESSION['key'] = $key;
        }
    }
    load_view('index', $data);
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
