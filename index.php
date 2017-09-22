<?php
include "Car.php";

$mindes_automobilis = new Car("RAP 001", "Minda");


$mindes_automobilis->color = "red";
$mindes_automobilis->make = "Toyota";
$mindes_automobilis->model = "Yaris";
$mindes_automobilis->fuel = "diesel";






//echo $mindes_automobilis->license; //isveda pasirinkta objekta i ekrana





$marytes_automobilis = new Car("TUV 002", "Maryte");


$marytes_automobilis->color = "orange";
$marytes_automobilis->make = "BMW";
$marytes_automobilis->model = "X5";
$marytes_automobilis->fuel = "diesel";




  $mindes_automobilis->go();
  $mindes_automobilis->crash();
  $mindes_automobilis->repair();




echo $mindes_automobilis->license;
echo "<br>";

echo $marytes_automobilis->owner;



//var_dump($mindes_automobilis);