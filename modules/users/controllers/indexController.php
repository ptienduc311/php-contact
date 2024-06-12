<?php

function construct() {
    load_model('index');
}

function indexAction() {
    echo "Trang chủ users";
}

function registerAction(){
    if(isset($_POST['btn-reg'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['confirm-password'];
        echo($email . '----' . $password . '----' . $password_confirm);
    }
    load_view('register');
}
