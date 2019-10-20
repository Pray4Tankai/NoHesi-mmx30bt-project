<?php
    function getCart(){
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM `cart` WHERE `user_id` = '$user_id'";
        $run_query = mysqli_query(dbConnect(),$query);

        return $run_query;
    }
    function getItems($product_id){
        $query = "SELECT * FROM `products` WHERE `product_id` = '$product_id'";
        $run_query = mysqli_query(dbConnect(),$query);

        return $run_query;
    }
    function addToCart($product_id){
        $product = mysqli_fetch_assoc(getItems($product_id));

        $name = $product['product_name'];
        $price = $product['product_price'];

        $user_id = $_SESSION['user_id'];

        $query = "INSERT INTO `cart` (`cart_id`,`product_name`,`product_price`,`product_id`,`user_id`) VALUE('','$name','$price','$product_id','$user_id')";
        $run_query = mysqli_query(dbConnect(),$query);

        if($run_query){
            return true;
        }else{
            return false;
        }

    }
    function removeCart($productId,$user_id){
        $query = "DELETE FROM `cart` WHERE `product_id` = '$productId' AND `user_id` = '$user_id'";
        $run_query = mysqli_query(dbConnect(),$query);
        if($run_query){
            return true;
        }else{
            return false;
        }
    }