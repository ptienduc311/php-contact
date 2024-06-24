<?php

function construct()
{
    load_model('index');
}

function indexAction(){
    load_view('index');
}

function partnerAction(){
    load_view('partner');
}

function partservAction(){
    load_view('partserv');
}

function parttechAction(){
    load_view('parttech');
}

function dxawsAction(){
    load_view('dxaws');
}

function dxgcpAction(){
    load_view('dxgcp');
}

function dxazureAction(){
    load_view('dxazure');
}

function dxociAction(){
    load_view('dxoci');
}