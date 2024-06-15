<?php

function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field]))
        return "$error[$label_field]";
}

function set_value($label_field)
{
    global $$label_field;
    if (!empty($$label_field)) {
        return $$label_field;
    }
    return '';
}

function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function is_name($name)
{
    $pattern = "/^[A-Za-z]{1,255}$/";
    if (!preg_match($pattern, $name, $matches)) {
        return false;
    }
    return true;
}

function is_username($username)
{
    $pattern = "/^(?=.*[a-z])[A-Za-z0-9_]{3,255}$/";
    if (!preg_match($pattern, $username)) {
        return false;
    }
    return true;
}

function is_password($password)
{
    $pattern = "/^(?=.*[a-z])[A-Za-z0-9\W]{5,20}$/";
    if (!preg_match($pattern, $password)) {
        return false;
    }
    return true;
}
