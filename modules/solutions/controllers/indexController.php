<?php

function construct()
{
    load_model('index');
}

function indexAction(){
    load_view('index');
}

function dms2Action(){
    load_view('dms2');
}

function frsAction(){
    load_view('frs');
}

function legmodAction(){
    load_view('legmod');
}

function crampAction(){
    load_view('cramp');
}