<?php

$codeMessage1 = "0@sn9sirppa@#?ia'jgtvryko1" ; 
$codeMessage2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj" ; 
$codeMessage3 = "aopi?sgnirts@#?sedhtg+p9l!" ;

// Code 1
$length = strlen($codeMessage1) / 2 ;
echo $length . PHP_EOL ;

$underChaine1 = substr($codeMessage1 , 5, 13) ;
echo $underChaine1 . PHP_EOL ; 

$newCodeMessage1 = "sirppa ia'j" . PHP_EOL ; 

echo strrev($newCodeMessage1) . PHP_EOL;

// Code 2
$length = strlen($codeMessage2) / 2 ;
echo $length . PHP_EOL ;

$underChaine2 = substr($codeMessage2 , 5, 23) ;
echo $underChaine2 . PHP_EOL ;

$newCodeMessage2 = "sellecif sel setuot" . PHP_EOL ; 

echo strrev($newCodeMessage2) . PHP_EOL;

// Code 3
$length = strlen($codeMessage3) / 2 ;
echo $length . PHP_EOL ;

$underChaine3 = substr($codeMessage3 , 5, 23) ;
echo $underChaine3 . PHP_EOL ;

$newCodeMessage3 = "sgnirts sedhtg+p9l!" . PHP_EOL ; 

echo strrev($newCodeMessage3) . PHP_EOL ;

echo strrev($newCodeMessage1) . PHP_EOL ;
echo strrev($newCodeMessage2) . PHP_EOL ;
echo strrev($newCodeMessage3) . PHP_EOL ;


?>