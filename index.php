<?php
	require('animal.php');
	require('ape.php');
	require('frog.php');

	$sheep = new animal("shaun");
	echo $sheep -> name. "<br>"; // "shaun"
	echo $sheep -> legs. "<br>"; //2
	echo var_dump($sheep -> cold_blooded). "<br><br>"; //false

	$sungokong = new sungokong("kera sakti");
	echo $sungokong->name ."<br>";
	echo $sungokong->legs ."<br>";
	echo var_dump($sungokong->cold_blooded)."<br>"; // "Auooo"
	echo $sungokong->yell()."<br><br>";

	$kodok = new frog("buduk");
	echo $kodok->name ."<br>";
	echo $kodok->legs ."<br>";
	echo var_dump($kodok->cold_blooded)."<br>"; // "Auooo"
	echo $kodok->jump()."<br><br>";
?>