<?php
include("conectare.php");

$produse=mysqli_query($conn,"select p.*, r.denumire_raion 
							 from produse p
							 left join raioane r on p.id_raion=r.id_raion");
?>
<html>
	<head>
		<title>Lista de cumparaturi</title>
	</head>
	
	<body>
		<h1>Lista de cumparaturi</h1>
		<?php
			if (isset($_SESSION["adaugat"]) && $_SESSION["adaugat"]==1){
				echo "<p>Succes!</p>";
				$_SESSION["adaugat"]=0;
			}
		?>
		<a href="add.php">Adauga produs in lista</a>
		<ul type="circle">
			<?php
				while($row=mysqli_fetch_array($produse)){
			?>
				<li>
					<table width="500px">
						<tr>
							<td><?=$row["denumire_produs"]." (raion: ".$row["denumire_raion"].")";?></td>
							<td>
								<?php 
									if($row["cumparat"]==0) { ?>
									<a href="cumparare.php?id_produs=<?=$row["id_produs"]?>" onclick="return confirm('Sunteti sigur ca ati cumparat?')">Am cumparat</a>
								<?php
									}
									else echo "Cumparat";
								?>
						
							</td>
							<td><a href="edit.php?id_produs=<?=$row["id_produs"]?>">Modificare</a></td>

							<td><a href="delete.php?id_produs=<?=$row["id_produs"]?>" onclick="return confirm('Sunteti sigur ca doriti sa stergeti produsul?')">Stergere</a></td>
						
						</tr>
					</table>
				</li>
			<?php }
			?>
		</ul>
	</body>
</html>