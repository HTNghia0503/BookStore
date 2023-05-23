<?php
    /**
     * FPT book
     * Nam 24Feb2023
     */
    if(!isset($_SERVER['HTTPs'])){
        $url= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: " . $url);
        exit();
    }

?>