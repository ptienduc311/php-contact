<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    load_view('index');
}

function dmsAction(){
    load_view('dms');
}

function dataservAction(){
    load_view('dataserv');
}

function optimiseAction(){
    load_view('optimise');
}

function aboutAction(){
    load_view('about');
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
