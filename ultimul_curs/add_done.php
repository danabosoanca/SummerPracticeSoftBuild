<?php
//session - in session, punem un array cu care ne plimbam pe toate paginile
//post - e tot un array, dar punem in el ce primim de la formular
include("conectare.php");

if(mysqli_query($conn,"insert into produse (denumire_produs,id_raion)
                        values('".$_POST["denumire_produs"]."','".$_POST["id_raion"]."')"))
                    $_SESSION["adaugat"]=1;
header("Location:index.php");
?>
