<?php

function construct() {
    load_model('index');
}

function indexAction() {
    echo "Trang chủ account";
}

function registerAction(){
    global $error;
    if(isset($_POST['btn-reg'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    load_view('register');
}
