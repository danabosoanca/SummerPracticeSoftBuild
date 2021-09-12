<?php
include("conectare.php");

if (mysqli_query($conn, "update produse set cumparat=1 where id_produs='".$_GET["id_produs"]."'"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>