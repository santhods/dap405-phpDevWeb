<?php

class Admin{
    public static function check(){
        session_start();
        #check whether the Admin session has been authenticated
        #and return the boolean value accordingly.
        
        if (isset($_SESSION['auth']) and $_SESSION['auth']==true){
            return true;
        } else {
            return false;
        }
    }
}