<?php
//neccessary to start session before logging out
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}


$_SESSION['usr_id'] = null;
$_SESSION['username'] =  null;
$_SESSION['profile_url'] =  null;

header("location: ?page=login");


