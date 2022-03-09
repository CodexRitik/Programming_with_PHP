<?php
    //Data Types in PHP
    /* 
    PHP data types are used to hold different types of data or values. PHP supports 8 primitive data types that can be categorized further in 3 types:

    1.Scalar Types (predefined)
    2.Compound Types (user-defined)
    3.Special Types

    Php DataTypes Scalar Types
    1.boolean 2. integer 3.float 4.string

    Php DataTypes : Compound Types
    1.array 2.object

    Php DataTYpes : Special Types
    1.resource 2.NULL

    */
    //Boolean
    if (TRUE)  
        echo "This condition is TRUE.";  
    if (FALSE)  
        echo "This condition is FALSE.";
    
    //PHP Integer
    $dec1 = 34;  
    $oct1 = 0243;  
    $hexa1 = 0x45;  
    echo "Decimal number: " .$dec1. "</br>";  
    echo "Octal number: " .$oct1. "</br>";  
    echo "HexaDecimal number: " .$hexa1. "</br>";

    //Php FLoat
    $n1 = 19.34;  
    $n2 = 54.472;  
    $sum = $n1 + $n2;  
    echo "Addition of floating numbers: " .$sum;
    
    //Php String
    $company = "Ritik";
    echo "Hello $company";  
    echo "</br>";  
    echo 'Hello $company';

    //Php Array
    //This is a collection of multiple value
    $bikes = array ("Royal Enfield", "Yamaha", "KTM");  
    var_dump($bikes);   //the var_dump() function returns the datatype and values  
    echo "</br>";  
    echo "Array Element1: $bikes[0] </br>";  
    echo "Array Element2: $bikes[1] </br>";  
    echo "Array Element3: $bikes[2] </br>";

    //Php Objects

    //objects are instances of user - defined classes that can store both values and functions .they may explicitly declared;

    class test{
        function model(){
            $model_Name = "Bikes";
            echo "Model : ".$model_Name;
        }
    }
    $obj = new test();
    $obj -> model();
?>
