<?php
//Php Constants
/*
Constant is that which value can;t be change once we declare
In PHP we write a constant value in UpperCase

define(name,value,case-insensitive)

*/
define("Msg","This is a message");
echo Msg;

define("STR","This is String",true);//not case sensitive
//either we can use str or STR
echo STR;
//echo str;

//Using const keyword
const MSG = "This is a msg";
echo MSG;
echo constant("Msg");

$new1 = 167;
$new2 = 87;
$result = $new2 < $new1 ? printf("%d",printf("yes")):print("no");
echo $result;
$result = $new2 < $new1 ? printf("%d",sprintf("yes")):print("no");
echo $result;
$result = print($new2 < $new1) ? printf("%d",printf("yes")):print("no");
echo $result;
echo -1%-3;

?>
