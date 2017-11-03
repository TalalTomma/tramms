<?php
//require ("../PHP/mat.include.php");
//require ("../sql/scripte.php");
session_start();
$name=$_POST['updateName'];
$table = "t_customer";
$verbindung = mysqli_connect("localhost", "root", "", "adWords");

    //sql-Abfrage,Verbindung zur Datenbank aufbauen

$sql_name = "UPDATE $table SET name='$name' WHERE id=1";//   {$_SESSION['id_customer']}";

$result = mysqli_query($verbindung,$sql_name);

echo $name." in ".$table." erfolgreich ge&auml;ndert.";

?>
<h1>AddWord </h1>
