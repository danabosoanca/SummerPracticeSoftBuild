
    <hr/>
    Buna ziua, <?=$_POST["prenume"];?> <?=$_POST["nume"];?> . Ne bucurăm că ți-ai desfășurat stagiul de practică la <?=$_POST["firma"];?>, realizând <?=$_POST["tema"];?> . În continuare, vom trimite către secretariat următoarele detalii, pentru a le încărca pe CampusVirtual : 
    <br>
    ______________________________________________
    <br>
    Nume : <?=$_POST["nume"];?>
    <br>
    Prenume : <?=$_POST["prenume"];?>
    <br>
    Gen : <?=$_POST["gen"];?>
    <br>
    Număr de telefon : <?=$_POST["telefon"];?>
    <br>
    Adresă de email : <?=$_POST["email"];?>
    <br>
    An studiu : <?=$_POST["studiu"];?>
    <br>
    Facultatea : <?=$_POST["facultate"];?>
    <br>
    Practică realizată online : 
    <?php
        if(isset($_POST['online']))
            echo "da";
        else
            echo "nu";
    ?>
    <br>
    Firma : <?=$_POST["firma"];?>
    <br>
    Tema : <?=$_POST["tema"];?>
    <br>
    ______________________________________________