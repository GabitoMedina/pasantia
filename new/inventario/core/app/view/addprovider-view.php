<?php

if(count($_POST)>0){
	$user = new PersonData();
	$user->id = $_POST["id"];
	$user->identificacion = $_POST["identificacion"];
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->company = $_POST["company"];
	$user->address1 = $_POST["address1"];
	$user->email1 = $_POST["email1"];
	$user->phone1 = $_POST["phone1"];
	$user->phone2 = $_POST["phone2"];
	$user->add_provider();

print "<script>window.location='index.php?view=providers';</script>";


}


?>