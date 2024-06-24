<?php
/*
 * --------------------------------
 * EMAIL
* --------------------------------
 * In this section we declare parameters for configuration
 * send email using php
 * --------------------------------
 *VARIABLE EXPLANATION
 * --------------------------------
 * protocol: Mail sending protocol
 * smtp_host: Host sending mail
 * smtp_port: Port
 * smtp_user: Email account login name
 * smtp_pass: Password of the email sending account
 * smtp_port: Port
 * mailtype: Email content format
 * charset: Mail content character code (UTF-8)
 */

 $config['email'] = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'binhtonga1@gmail.com',
    'smtp_fullname'=>'Datalynx',
    'smtp_pass' => 'tqvgduxbpglpwhse',
    'stmp_secure'=>'ssl',
    'smtp_timeout' => '7',
    'mailtype' => 'html',
    'charset' => 'UTF-8'
);

// $config['email'] = Array(
//     'protocol' => 'smtp',
//     'smtp_host' => 'smtp.office365.com',
//     'smtp_port' => 587,
//     'smtp_user' => 'sales@datalynx.com.au',
//     'smtp_fullname'=>'Datalynx Sales Team',
//     'smtp_pass' => 'gdjfhfgvcwtqdrjd',
//     'stmp_secure'=>'tls',
//     'smtp_timeout' => '7',
//     'mailtype' => 'html',
//     'charset' => 'UTF-8'
// );


// Email configuration
// $config = array(
//     'smtp_host' => 'smtp.office365.com',     // SMTP host
//     'smtp_port' => 587,                     // SMTP port (TLS encryption enabled)
//     'smtp_username' => 'sales@datalynx.com.au',  // SMTP username (your full email address)
//     'smtp_password' => 'gdjfhfgvcwtqdrjd',           // SMTP password
//     'smtp_secure' => 'tls',                 // Enable TLS encryption
//     'smtp_auth' => true,                    // Enable SMTP authentication
//     'from_email' => 'sales@datalynx.com.au',      // Sender's email address
//     'from_name' => 'Datalynx Sales Team',             // Sender's name
// );

?>

