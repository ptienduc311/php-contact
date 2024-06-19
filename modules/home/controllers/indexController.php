<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    load_view('index');
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
