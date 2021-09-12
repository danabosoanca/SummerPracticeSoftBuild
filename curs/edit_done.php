<?php
include("conectare.php");
if (mysqli_query($conn, "update produse 
						set denumire_produs='".$_POST["denumire_produs"]."',
						id_raion='".$_POST["id_raion"]."'
						where id_produs='".$_POST["id_produs"]."'"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>