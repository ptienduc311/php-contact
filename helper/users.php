<?php

//Function check login
function is_login() {
    if (isset($_SESSION['is_login'])) {
        return TRUE;
    }
    return false;
}