<?php
    session_start();
    include_once 'database/database.php';
    include_once 'functions/general.php';
    include_once 'functions/users.php';
    include_once 'functions/cart.php';

    $errors = array();
    $success = array();