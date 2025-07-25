<?php

include_once 'Security_Helper.php';

$rawUsername = "<script>alert('xss')</script> Alice";
$rawPassword = "MySecureP@ss123";

$cleanUsername = SecurityHelper::sanitizeInput($rawUsername);

$hasedPassword = SecurityHelper::hashPassword($rawPassword);

$isPasswordValid = SecurityHelper::verifyPassword("MySecureP@ss123",$hasedPassword);

echo"<strong> Raw username : </strong>".$rawUsername."<br>";
echo"<strong> Sanitized username : </strong>".$cleanUsername."<br>";

echo"<strong> Raw password : </strong>".$rawPassword."<br>";
echo"<strong> Sanitized password : </strong>".$hasedPassword."<br>";

echo"<strong> Password verification (Correct Password) : </strong>".($isPasswordValid ? "Valid" : $isPasswordValid )."<br>";
?>