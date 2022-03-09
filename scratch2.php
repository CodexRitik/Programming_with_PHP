<?php
/*varibale scope 
There are three types of varibale in php
1. Local Variaable
2.Global Varibale
3. Static variable
*/

function local_var()
{
    $num = 10; // local var it has limted scope it can be acess only inside a function
    echo "This is a Local Varibale : $num";
}
local_var();
$number = 200;//Global Var
/*
If two variables, local and global, have the same name, then the local variable has higher priority than the global variable inside the function.*/
function global_Var()
{
    /*
    To acess a global var inside a function we have to use the global keyword 
    */
    global $number;
    echo "Global Value : $number";

}
global_Var();
echo "outside acess : $number";

//another approach
$val1 = 10;
$val2 = 20;

function sum()
{
    $sum = $GLOBALS['val1'] + $GLOBALS['val2'];
    echo " Sum : $sum";
}
sum();

//Static varibale it is used to define the variable only one time and use for several time;

function sums()
{
    static $num = 10;
    $num2 = 5;

    $num++;
    $num2++;

    echo "Static value : $num";
    echo "Non - static value : $num2";
}
sums();
sums();
?>
