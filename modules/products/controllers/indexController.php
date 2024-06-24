<?php

function construct()
{
    load_model('index');
}

function indexAction(){
    load_view('index');
}

function xploreAction(){
    load_view('xplore');
}

function xchangeAction(){
    load_view('xchange');
}