<?php
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@innov8Agent.com";
    $to = "princekr2903@gmail.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;

if( mail($to,$subject,$message, $headers)) 
{
    echo 'send';
}
else 
{
    echo 'not send';    
} 
?>
