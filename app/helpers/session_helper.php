<?php
session_start();

function loggedIn($id){
    $_SESSION['user'] = $id;
}

function authUser(){
    if(!empty($_SESSION['user'])){
        return $_SESSION['user'];
    }else{
        echo "No logged in user";
    }
}

function loggedOut(){
    unset($_SESSION['user']);
}