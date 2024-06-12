<?php

//Function check login
function is_login() {
    if (isset($_SESSION['is_login'])) {
        return TRUE;
    }
    return false;
}

function user_login() {
    if (!empty($_SESSION['username'])) {
        return $_SESSION['username'];
    }
    return false;
}