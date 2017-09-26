<?php

class Dog {

     public $owner;
     public $name;
     public $color;
     public $furr;
     public $size;
     public $weight;



 public function __construct ($a1, $a2){

 	$this->owner = $a1;
 	$this->name = $a2;


 	echo $this->owner . "just got a dog named" . $this->name . "<br>";
 }    


public function walk ($where){

	echo $this->owner . "is walking with" . $this->name . "<br>";

}
public function eat($what){

	echo $this->name . "is eating shit";

}
public function sleep($where){

	echo $this->name . "sleep in house";

}
public function destroy($what){

}




}