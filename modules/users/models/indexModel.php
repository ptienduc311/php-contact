<?php

function getInfoUser($email){
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `email` = '" . mysqli_real_escape_string($conn, $email) . "'";
    $data = db_fetch_row($sql);
    return $data;
}