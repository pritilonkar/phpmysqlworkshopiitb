<?php
$string = readline('enter a string:');
echo $string;

echo strlen($string);

$str_arr = explode (",", $string);  
print_r($str_arr); 
echo strrev($string);

echo strtolower($string);
echo strtoupper($string);

$substring =substr($string,0,6);
echo $substring;
$replace =substr_replace($string,"Mali",0,6);
echo $replace;
?>