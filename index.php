<?php
include("./project folder/file.php");

$writeClass =  new WriteMessages("Vlad", "Baban");

//echo("hello there"); 
$writeClass->writeHelloWord();


$writeClass->writeSecondHelloWord(); 

echo($writeClass->writeAllMessages());

?>