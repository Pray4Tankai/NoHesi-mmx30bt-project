<?php 
    function dbConnect(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "nohesi";
        $connect = mysqli_connect($server,$user,$password,$database);

        if(mysqli_connect_error()){
            die(print_r("We are experiencing connection errors!!!"));
        }
        else{
            return $connect;
        }
    }