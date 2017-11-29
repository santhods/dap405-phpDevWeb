<?php

class MsgLabels {
    public static function success($msg){
        return "<div class=\"alert alert-success\">" . $msg . "</div>";
    }
    
    public static function info($msg){
        return "<div class=\"alert alert-info\">" . $msg . "</div>";
    }
    
    public static function warning($msg){
        return "<div class=\"alert alert-warning\">" . $msg . "</div>";
    }
    
    public static function err($msg){
        return "<div class=\"alert alert-danger\">" . $msg . "</div>";
    }
}