<?php
include ("Animals/Chicken.php");
include ("Animals/Tiger.php");
echo ("------ Animals<br>");
$animal[0] = new Tiger();
$animal[1]= new Chicken();
var_dump($animal);
die();
foreach ($animal as $animal){
    echo $animal->makeSound()."<br>";
}