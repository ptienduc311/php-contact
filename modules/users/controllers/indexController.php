<?php

function construct() {
    load_model('index');
}

function indexAction() {
    if(isset($_POST['btn-update']))
    {
        $name =  check_input($_POST['name']);
        $phone =  check_input($_POST['phone']);
        $company = check_input($_POST['company']);
        $role = check_input($_POST['role']);
        $enquiry = check_input($_POST['enquiry']);
        
    }
    load_view('index');
}

function logoutAction(){
    session_destroy();
    redirect("?mod=account&action=login");
}

function contactAction(){
    load_view('contact');
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}