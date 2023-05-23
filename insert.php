<?php

// Verbindung mit der Datenbank aufbauen....
$conn = mysqli_connect("localhost", "root", "", "testkunden");



$anrede = $_POST['anrede'];
$titel = $_POST['titel'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];


if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());    
}

$sql = "INSERT INTO kunden (anrede, titel, vorname, nachname, telefon, email) 
        VALUES ('$anrede', '$titel', '$vorname', '$nachname', '$telefon', '$email')";
        
    if(mysqli_query($conn, $sql)){
       
        echo "Daten wurden erfolgreich gespeichert.";
    }
    else{
        echo "Fehler beim Einfügen: " . mysqli_error($conn);
    }

    header('Location: index.html');

?>