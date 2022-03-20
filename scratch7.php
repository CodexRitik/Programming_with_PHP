<?php
/*
Conditional Statements In PHP
1. if
2. if - else
3. if - else -if
4. nested if

*/

//if example

$number = (int) readline("Enter the Number : ");
if($number < 20)
{
    echo "Number is less then 20\n";
}
//if - else example
$age = (int) readline("Enter Your Age : ");
if($age >= 18) echo "You are eligible for Vote!\n";
else echo "You are not eligible for Vote!\n";

//Example of if - else if - else
//Check the grade of student

$marks = (int) readline("Enter the marks : ");
if($marks >= 85)
{
    echo "A - Grade\n";
}else if($marks < 85 and $marks >= 75){
    echo "B - Grade\n";
}else if($marks < 75 and $marks >= 60)
{
    echo "C - Grade\n";
}else{
    echo "Sorry You Are Fail!\n";
}
//nested if else if
$val = (int) readline("Enter either 1 or 0 : ");
if($val == 1)
{
    $val2 = (int) readline('Enter Your Age :');
    
    if($age >= 18) echo "You are eligible for Vote!\n";
    else echo "You are not eligible for Vote!\n";
}
?>
