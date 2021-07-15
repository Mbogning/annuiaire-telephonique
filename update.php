<?php
include 'Annuaire.php';

$annuaire = new Annuaire($_GET['id']);
if (isset($_POST['update'])) {
    $annuaire->setNom($_POST['nom']);
    $annuaire->setPrenom($_POST['prenom']);
    $annuaire->setTel($_POST['tel']);
    $annuaire->setEmail($_POST['mail']);
    $annuaire->setPays($_POST['nom']);
    $annuaire->update();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Annuaire</title>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
    <div class="message"></div>
    <div class="container mt-3">
        <form method="post">
            <div class="form-outline mt-2">
                <input type="text" id="nom" class="form-control" name='nom' value="<?=$annuaire->getNom() ?>"/>
                <label class="form-label" for="nom">Nom</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" id="prenom" name='prenom' class="form-control" value="<?=$annuaire->getPrenom() ?>"/>
                <label class="form-label" for="prnom">Prenom</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" id="tel" name="tel" class="form-control" value="<?=$annuaire->getTel() ?>"/>
                <label class="form-label" for="tel">Telephone</label>
            </div>
            <div class="form-outline mt-2">
                <input type="mail" id="mail" name="mail" class="form-control" value="<?=$annuaire->getEmail() ?>" />
                <label class="form-label" for="mail">Email</label>
            </div>
            <div class="form-outline mt-2">
                <input type="text" id="pays" name="pays" class="form-control" value="<?=$annuaire->getPays() ?>"/>
                <label class="form-label" for="pays">Pays</label>
            </div>
            <input type="submit" class="btn mt-2 btn-success" value="Envoyer" name="update">
        </form>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>