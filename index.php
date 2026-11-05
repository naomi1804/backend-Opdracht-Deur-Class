<?php
include "door.php";

// We starten een sessie zodat de status van de deur onthouden wordt tussen klikken
session_start();
if (!isset($_SESSION['deur'])) {
    $_SESSION['deur'] = new Deur("Voordeur");
}
$mijnDeur = $_SESSION['deur'];

// Bepaal welke actie de gebruiker heeft gekozen via de knoppen
$actie = $_GET['actie'] ?? 'start';
$melding = "";

if ($actie == 'ontgrendel') {
    $melding = $mijnDeur->sleutelGebruiken("links");
} elseif ($actie == 'open') {
    $melding = $mijnDeur->deurOpenen();
} elseif ($actie == 'loop') {
    $melding = $mijnDeur->doorDeurLopen();
} elseif ($actie == 'reset') {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Deur Adventure Game</title>
</head>
<body>
    <h2>Escape de Voordeur Game</h2>
    
    <!-- Hier komt de output van je actie te staan -->
    <p><strong>Status:</strong> <?php echo $melding ?: "Je staat voor een gesloten voordeur..."; ?></p>

    <hr>

    <!-- De keuzes (knoppen) voor de speler -->
    <p>Wat wil je doen?</p>
    <a href="index.php?actie=ontgrendel"><button>Sleutel naar links draaien</button></a>
    <a href="index.php?actie=open"><button>Klink indrukken / Deur openen</button></a>
    <a href="index.php?actie=loop"><button>Door de deur lopen</button></a>
    <br><br>
    <a href="index.php?actie=reset"><button style="color:red;">Reset spel</button></a>
</body>
</html>