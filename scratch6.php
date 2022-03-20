<?php
/*
Php Operators : 
PHP Operators can be categorized in following forms:

Arithmetic Operators
Assignment Operators
Bitwise Operators
Comparison Operators
Incrementing/Decrementing Operators
Logical Operators
String Operators
Array Operators
Type Operators
Execution Operators
Error Control Operators


Unary Operators: works on single operands such as ++, -- etc.
Binary Operators: works on two operands such as binary +, -, *, / etc.
Ternary Operators: works on three operands such as "?:".
*/

//Arithmetic Operators

$num1 = 10;
$num2 = 20;
$n = 2;
$sum = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$divi = $num1 / $num2;
$mod = $num1 % $num2;
$exp = $num1 ** $n;
echo "$num1"." + "."$num2"." = "."$sum\n";
echo "$num1"." - "."$num2"." = "."$sub\n";
echo "$num1"." * "."$num2"." = "."$mul\n";
echo "$num1"." / "."$num2"." = "."$divi\n";
echo "$num1"." % "."$num2"." = "."$mod\n";
echo "$num1"." ** "."$n"." = "."$exp";

//Assignment opeartor
$a = 5;
$b = $a;
$num1 += $num2;
echo "$num1\n";
$num2 -= $num1;
echo "$num2\n";
$num1 *= $num1;
echo "$num1\n";
$num1 /= 5;
echo "$num1\n";
$num1 %= 7;
echo "$num1\n";

//Bitwise Operators
$a = 20;
$b = 10;
$v = $a & $b;
echo "$v\n";
$v = $a | $b;
echo "$v\n";
$v = $a ^ $b;
echo "$v\n";
$v = ~$a;
echo "$v\n";
$v = $a << $b;
echo "$v\n";

//Comparison Operators
$a = 100;
$b = 200;

echo $a == $b;//equal operator
echo $a === $b;//return true if both data are equal and datatype is also same
echo $a!==$b;//return true if both value is not equal and datatype is also not same
echo $a!=$b;//check equal or not
echo $a <> $b;//Not equal Return true if both data are not equal
echo $a < $b;//less then
echo $a > $b;//greater then
echo $a <= $b;
echo $a >= $b;
echo $a <=> $b //return -1 if $a is less then $b and return 0 if $a is equal $b return 1 if $a is greater then $b

//Increment and decrement operator
// ++ : $a++ or ++$a
// -- : $a-- or --$a

//Logical Operators
/*
and : $a and $b return true if both are true
or : $a or $b return true if either $a or $b is true
xor : $a xor $b return true if either $a is true or $b is true but not both
! :(Not) !$a return true if $a is not true
&& And : $a && $b same as and
|| Or : $a || $b same as or
*/

//String Operators
//1> . concatenation operator
// echo $a." ".$b;
//Array Operators : The array operators are used in case of array. Basically, these operators are used to compare the values of arrays.

/* 
+ : Union $a + $b Union of $a and $b
== : Equality $a == $b Return TRUE if $a and $b have same key/value pair
!= : InEquality $a != $b Return TRUE if $a is not equal to $b
=== : Identity $a === $b Return True if $a and $b have same key/value pair of same type in same order

!== : No Identity $a !== $b Return True if $a is not identical to $b

<> Inequality : $a <> $b Return true if $a is not equal to $b


*/

//Type Operator : instanceof 

/* is used to determine whether an object, its parent and its derived class are the same type or not. Basically, this operator determines which certain class the object belongs to. It is used in object-oriented programming. */

class Node{}
class NewNode{}
$obj = new Node();
if($obj instanceof NewNode) echo "True";
else echo "False";
?>
