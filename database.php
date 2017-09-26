<?php

Class Database {

	private $conn;

	function __construct($servername = "localhost", $username = "Mindam", $password = "nesvarbu", $database = "eshop") {

		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    // set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully"; 
		}
		catch(PDOException $e){
		
			echo "Connection failed: " . $e->getMessage();
		}
	} 
	function __destruct(){
	$this->conn = null;
    }


    public function select_array($sql){
    	$request = $this->conn->prepare($sql); 
        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
             }

    public function select($sql){
    	$request = $this->conn->prepare($sql); 
        $request->execute();

        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
             }

     public function insert_array($t,$f,$v){

    $sql = "INSERT INTO $t (";

    foreach ($f as $column) {
    	$sql .= $column . ",";
    	
    }

    $sql .= ") VALUES (";

     foreach ($v as $value) {
    	$sql .= "'". $value . "',";
    }
     
    $sql = rtrim($sql, ","); 
    $sql .= ")";


   
    	$request = $this->conn->prepare($sql); 
    	$request->execute();


    }

    public function insert($sql){

    	$request = $this->conn->prepare($sql); 
    	$request->execute();
    }







    }


function show($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

$db = new Database();

show($db->select("SELECT * FROM products"));

$db->insert("INSERT INTO products (name, price, weight) VALUES ('desra', '20', '15')");


$fields = ["name","price","weight"];
$values = ["lasiniai", 55, 100];


$db->insert("products",$fields,$values);





/*
$servername = "localhost";
$username = "Mindam";
$password = "nesvarbu";
$database = "eshop";





$request = $conn->prepare("SELECT  * FROM products"); 
$request->execute();


$result = $request->fetchAll(PDO::FETCH_ASSOC);



show($result);





function show($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


*/