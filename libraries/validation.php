<?php

function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field]))
        return "$error[$label_field]";
}

function set_value($label_field)
{
    if (isset($_POST[$label_field])) {
        return $_POST[$label_field];
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
    $pattern = "/^[A-Za-z]{8,255}$/";
    if (!preg_match($pattern, $name, $matches)) {
        return false;
    }
    return true;
}

function is_phone($phone)
{
    $pattern = "/^[0-9]{10}+$/";
    if (!preg_match($pattern, $phone, $matches)) {
        return false;
    }
    return true;
}

