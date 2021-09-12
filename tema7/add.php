<?php
include("conectare.php");
$scoli=mysqli_query($conn,"Select * from scoli_bucatari");

?>

<html>
    <head>
        <title>Adauga bucatar in bd</title>
    </head>

    <body>
        <h1>Adaugare bucatari</h1>
        <form action="add_done.php" method="post">
            <table border="0">
                <tr>
                    <td>Nume</td>
                    <td>
                        <input type="text" name="nume">
                    </td>
                </tr>

                <tr>
                    <td>Varsta</td>
                    <td>
                        <input type="number" name="varsta">
                    </td>
                </tr>

                <tr>
                    <td>Scoala</td>
                    <td>
                        <select name="id_scoala">
                            <?php
                                while($row=mysqli_fetch_array($scoli)){
                            ?>
                                <option value="<?=$row["id_scoala"];?>"><?=$row["nume_scoala"]?></option>
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
                    <td colspan=2>
                        <input type="submit">
                    </td>
                </tr>

            </table>
    </body>
</html>