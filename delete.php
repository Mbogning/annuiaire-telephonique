<?php
include 'Annuaire.php';
if (isset($_GET['id'])) {
    $annuair = new Annuaire();
    if ($annuair->delete($_GET['id'])) {
        echo 'ok';
    }
}
?>