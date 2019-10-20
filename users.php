<?php

    function logged_in(){
        if(isset($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }
    function check_user($username){
        $username = sanitize($username);

        $query = "SELECT `username` FROM `user_account` WHERE `username` = '$username'";
        $run_query = mysqli_query(dbConnect(),$query);
        $results = mysqli_fetch_assoc($run_query);
        if($results > 0 ){
            if(strcmp($username,$results['username']) === 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    function get_user_id($username){
        $username = sanitize($username);

        $query = "SELECT `user_id` FROM `user_account` WHERE `username` = '$username'";
        $run_query = mysqli_query(dbConnect(),$query);
        $results = mysqli_fetch_assoc($run_query);
    
        return $results['user_id'];
    }
    function user_login($username,$password){
        $username = sanitize($username);
        $password = md5(sanitize($password));
        $user_id = get_user_id($username);

        $query = "SELECT * FROM `user_account` WHERE `username` = '$username' AND `password` = '$password'";
        
        $run_query = mysqli_query(dbConnect(),$query);
        $results = mysqli_fetch_assoc($run_query);

        if($results > 0 ){
            return $user_id;
        }else{
            return false;
        }
    }
    function user_signup($required){
        array_walk($required,'array_sanitize');
        $required['password'] = md5($required['password']);
        $data  = '\''.implode('\',\'',$required).'\'';
        $fields = '`'.implode('`, `',array_keys($required)).'`';

        $query = "INSERT INTO `user_account` (`user_id`,$fields) VALUES ('',$data)";
        if(mysqli_query(dbConnect(),$query)){
            return true;
        }else{
            return false;
        }
        die();
    }