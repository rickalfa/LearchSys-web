<?php

/**
 * 
 * Creacion de Cokies y politicas de Cookies
 * 
 * 
 * 
 */


 class CookieController{

    public function __construct()
    {

        setcookie("TokenLearch","username",time()+60*2, "/");

        echo "Cookie Creada ";

        


    }





 }




?>