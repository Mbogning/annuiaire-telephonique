<?php
include 'Annuaire.php';
$annuaire = new Annuaire();

if (isset($_POST)) {
$annuaire->setNom($_POST['nom']);
$annuaire->setPrenom($_POST['prenom']);
$annuaire->setTel($_POST['tel']);
$annuaire->setEmail($_POST['mail']);
$annuaire->setPays($_POST['nom']);
if($annuaire->add()){
    header('location: index.php?message=ajouter');
}
var_dump($annuaire);
}
?>