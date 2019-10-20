<?php

    function sanitize($data){
        return $data = htmlentities(strip_tags(mysqli_real_escape_string(dbConnect(),$data)));
    }
    function array_sanitize(&$element){
        $element = htmlentities(strip_tags(mysqli_real_escape_string(dbConnect(),$element)));
    }
    function output_errors($errors){
        return '<ul class="errors"><div><li>'.implode('</li><li>',$errors).'</li><div></ul>';
    }
    function output_sucess($mess){
        return '<ul class="success"><div><li>'.implode('</li><li>',$mess).'</li><div></ul>';   
    }