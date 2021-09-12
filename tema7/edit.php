<?php
include("conectare.php");
$scoli=mysqli_query($conn,"select * from scoli_bucatari");
$bucatar_obj=mysqli_query($conn,"select * from bucatari where id_bucatar='".$_GET["id_bucatar"]."'");
$bucatar=mysqli_fetch_array($bucatar_obj);

// echo "<pre>";
// print_r($produs);

// $rr=$raioane;
// while($rai=mysqli_fetch_array($rr))
// print_r($rai);
// exit;

?>
<html>
	<head>
		<title>Modificare date bucatar</title>
	</head>
	
	<body>
		<h1>Modifica date bucatar <?=$bucatar["nume"] ?></h1>
		
		<form action="edit_done.php" method="post">
			<input type="hidden" name="id_bucatar" value="<?=$bucatar["id_bucatar"];?>" />
			<table border="0">
				<tr>
					<td>Nume bucatar</td>
					<td><input type="text" name="nume" value="<?=$bucatar["nume"] ?>"></td>
				</tr>
				<tr>
					<td>Scoala</td>
					<td>
						<select name="id_scoala">
							<?php 	
							while($row=mysqli_fetch_array($scoli)){
							?>
								<option value="<?=$row["id_scoala"];?>" <?php
									if($bucatar["id_scoala"]==$row["id_scoala"]) echo 'selected="selected"';
								?>><?=$row["nume_scoala"]?></option>
							<?php
							}
							?>
						</select>
					</td>
                </tr>
                
                <tr>
                    <td>Experienta</td>
                    <td>
                        <input type="number" name="experienta">
                    </td>
                </tr>

                <tr>
                    <td>Stele Michelin</td>
                    <td>
                        <input type="radio" value="da" name="stele"> <b>da</b>
                        <input type="radio" value="nu" name="stele"> <b>nu</b>
                    </td>
                </tr>
                
				<tr>
					<td colspan=2><input type="submit"</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>