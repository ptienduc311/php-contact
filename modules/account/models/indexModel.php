<?php

function checkEmailExists($email)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `email` = '" . mysqli_real_escape_string($conn, $email) . "'";
    if (db_num_rows($sql) > 0) {
        return true;
    }
    return false;
}

function getPassword($email){
    global $conn;
    $sql = "SELECT password FROM `users` WHERE `email` = '" . mysqli_real_escape_string($conn, $email) . "'";
    return db_fetch_row($sql);
}

function checkAccountExists($email, $password)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `email` = '" . mysqli_real_escape_string($conn, $email) . "' AND `password` = '" . mysqli_real_escape_string($conn, $password) . "'";
    if (db_num_rows($sql) > 0) {
        return true;
    }
    return false;
}
