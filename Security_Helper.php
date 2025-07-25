<?php
class SecurityHelper{
    public static function sanitizeInput($data){
        return htmlspecialchars(strip_tags(trim($data)));
    }

    public static function hashPassword($password){
        return password_hash($password,PASSWORD_DEFAULT);
    }

    public static function verifyPassword($password,$hash){
        return password_verify($password,$hash);

    }
}


?>