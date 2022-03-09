<?php
//use of $ and $$ in varibales

//$ is used to define a normal variable and $$ is used to ref variable that stores the value of the $var inside it;
$str = "value";//str = value
$$str = 20;//value = 20

echo "str :".$str." value :". $$str;

$x="U.P";  
$$x="Lucknow";  
echo $x;  
echo $$x;  
echo "Capital of $x is " . $$x;  

//another approach
$name="Cat";  
${$name}="Dog";  
${${$name}}="Monkey";  
echo $name. "<br>";  //Cat
echo ${$name}. "<br>";  //Cat = Dog
echo $Cat. "<br>";  //Dog
echo ${${$name}}. "<br>"; //Monkey
echo $Dog. "<br>"; //Monkey

?>
