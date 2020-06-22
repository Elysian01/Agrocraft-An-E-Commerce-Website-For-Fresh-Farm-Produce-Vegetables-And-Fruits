<<<<<<< HEAD
<?php
	$dbhost = "localhost";
	$dbname = "agrocraft";
	$dbuser = "root";
	$dbpass = '';
	try{
		$db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
=======
<?php 
$dbhost="localhost";
$dbname="agrocraft";
$dbuser="root";
$dbpass='';
try{
    $db=new PDO("mysql:dbhost=$dbhost;dbname=$dbname","$dbuser","$dbpass");
}
catch(PDOException $e){
    echo $e->getMessage();
}

>>>>>>> 9da29cc04b59713ec5f0f26f28333d9c91fa438b
?>