<?php

function getPassword($username){
    global $conn;
    $sql = "SELECT `password` FROM `users` WHERE `username` = '" . mysqli_real_escape_string($conn, $username) . "'";
    return db_fetch_row($sql);
}

function getDataContact(){
    global $conn;
    $sql = "SELECT * FROM `info_contact`";
    return db_fetch_array($sql);
}