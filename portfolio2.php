<!--
<ul> ->definieert een ongeordende lijst
<li> -> definieert een lijst item
<a> -> definieert een hyperlink




-->


<!DOCTYPE html>
<html>
<head>

    <title>Portfolio</title>

    <link rel="stylesheet" href="portfolio2.css">

</head>
<body>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projecten">Projecten</a></li>
        <li><a href="#contact">Contact</a></li>


    </ul>
</nav>


<div class="bg">
    <div class="centered"><h1>PORTFOLIO<br>LUUK BULTEMA</h1></div>
</div>


    <div class="aboutpage margin" id="about">
        <br>
        <img class="image" src="/portfolios/fotos/cv.jpg"  alt="Code" width="200" height="200"/>

    <h3>Profiel</h3>
    <p>Sociaal, muzikaal, nauwkeurig, creatief en gemotiveerd.<br><br> Werk graag samen met andere mensen aan een project, kan goed zelfstandig werken.<br><br> Een goede sfeer met ruimte voor eigen input vind ik belangrijk.
    </p>
    <br>
    <br>
    <h3>Opleiding</h3>
    <p>
        2019-heden:	mbo 4 Zoomvliet College, Roosendaal<br><br>
        3e jaars ICT-opleiding:  Software Developer<br><br>
        2013-2019: havo Scholengemeenschap RSG ’t Rijks, Bergen op Zoom<br>

    </p>

    </div>


<div class="projecten margin" id="projecten">


  <h3>Projecten</h3>
    <br><br><br><br>
    <button onclick="window.location.href='https://github.com/Luuk-Bultema/LeeftijdCheck'">Leeftijd</button>
    <br><br><br><br>
    <button onclick="window.location.href='https://github.com/Luuk-Bultema/Pilske'">Pilske</button>
    <br><br><br><br>
    <button onclick="window.location.href='https://github.com/Luuk-Bultema/Autosysteem'">Autosysteem</button>
</div>





<div class="c"><h1>Contact</h1></div>

<div class="container margin" id="contact">

    <form method ='POST'>
        <label> Naam</label>
        <input type="text" name="Naam" placeholder="">

        <label> Email</label>
        <input type="text" name="Email" placeholder="">

        <label> Onderwerp</label>
        <input type="text" name="Onderwerp" placeholder="">

        <label> Bericht</label>
        <input type="text" name="Bericht" placeholder="">


        <input type="submit" name="btnVerstuur" value="Verstuur">

    </form>

</div>


</body>

<?php
$host="localhost";
$dbname="portfoliowebsite";
$user="root";
$password="";

try{
    $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname.";",$user,$password);
    //echo "verbinding gelukt";
}catch(PDOException $ex)
{
    //echo "verbinding mislukt";
}

    //controleren of variabele bestaat en gevuld is
    if(isset($_POST["btnVerstuur"])){
    $id = 0;
    $Naam = $_POST['Naam'];
    $Email = $_POST['Email'];
    $Onderwerp = $_POST['Onderwerp'];
    $Bericht = $_POST['Bericht'];


    //Query schrijven
    $query ="INSERT into contact VALUES (:id,:Naam,:Email, :Onderwerp,:Bericht)";

    //query inlezen
    $stm = $pdo->prepare($query);

    //aliassen koppelen aan waarden
    $stm->bindParam(':id', $id);
    $stm->bindParam(':Naam', $Naam);
    $stm->bindParam(':Email', $Email);
    $stm->bindParam(':Onderwerp', $Onderwerp);
    $stm->bindParam(':Bericht', $Bericht);

    //query uitvoeren
    if ($stm->execute()) {
        //echo "<b>gegevens succesvol opgeslagen</b>";
    }
} else //echo "Geen gegevens verstuurd!";



?>




</html>