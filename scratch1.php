<?php
//comments in php - single line comment
# this is also a single line comment
/*
    this is multiline comment you can also use commnets to leave out parts of a code line
*/
// echo command is not a function and there  is no need to write with parenthesis but when we have to use more than one parameter it is reqired to use ().

/*
Syntax : void echo(string $arg1[,string $...])
echo is faster then print statement
*/
$msg = "This is a Message!";
$res = addcslashes($msg,"M");
echo $res;
$str = addslashes('this is an "Exam" of php');
echo $str."<br>";

$str = bin2hex("Hello World!");
echo $str;

//varibale decaration

//String 
$str = "String";
//int 
$num = 200;

// double
$nums = 44.9;

echo "string is: $str";  
echo "Integer is :".$num;
echo "float is :".$nums;

//varibales are case sensitive
//$name and $NAME are consider as diffrent variables


?>
