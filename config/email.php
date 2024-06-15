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


