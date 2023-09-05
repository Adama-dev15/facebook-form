<?php
require_once './connexion.php';
require_once './function.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = $_POST['prenom'];
    $family_name = $_POST['famille'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jour = $_POST['jour'];
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];

    $date_naiss = $jour.' '.$mois.' '.$annee;

    $genre = $_POST['genre'];

    $bool= registerUser($name, $family_name, $email, $password, $date_naiss, $genre);
    var_dump($bool);

    if($bool){
        header('Location: home_facebook');
        exit();
    }else{
        header('Location: register_user');
        exit();
    }
}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="logo">
        <h1>facebook</h1>
    </div>
    <section class="creez">
        <form method="POST" action="register_user">
            <h1>Créez un compte</h1>
            <h4>C'est rapide et facile</h4>
            <hr>
            <div class="name">
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="text" name="famille" placeholder="Nom de famille">
            </div>
            <input type="email" name="email" class="nbre" placeholder="Numéro mobile ou e-mail">
            <input type="password" name="password" class="nbre" placeholder="Nouveau mot de passe">
            <p class="label-date">Date de naissance <i class="fa-solid fa-circle-question"></i></p>
            <div class="date-naiss">

                <select name="jour">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <select name="mois">
                    <option value="janvier">janvier</option>
                    <option value="fevrier">fevrier</option>
                    <option value="mars">mars</option>
                    <option value="avril">avril</option>
                    <option value="MAI">mai</option>
                    <option value="juin">juin</option>
                    <option value="juillet">juillet</option>
                    <option value="aout">aout</option>
                    <option value="septembre">septembre</option>
                    <option value="Octobre">Octobre</option>
                    <option value="Novembre">Novembre</option>
                    <option value="Decembre">Decembre</option>
                </select>

                <select name="annee">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>

            </div>
            <p class="label-date">Genre <i class="fa-solid fa-circle-question"></i></p>
            <div class="gener-person">
                <span>
                    <label>Femme</label>
                    <input type="radio" name="genre" value="Femme"/>
                </span>
                <span>
                    <label>Homme</label>
                    <input type="radio" name="genre" value="Homme"/>
                </span>
                <span>
                    <label>Personnalisé</label>
                    <input type="radio" name="genre" value="Personnalisé"/>
                </span>
            </div>

            <div class="texte">
                <p>
                    les personnes qui utilisent notre service ont pu importer vos coordonnées sur facebook. <a href="#">En savoir plus</a>
                </p>
                <br>
                <p>
                    En cliquant sur S'inscrire vous acceptez nos <a href="#">conditions générales,</a> notre <a href="#">politique de confidentialité</a>
                    et notre <a href="#">politique d'utilisation des cookies.</a> Vous receverz peut-etre des notification par texto de notre par et vous pouvez à tout moment vous désabonner.
                </p>
            </div>

            <div class="btn-submit">
                <input type="submit" value="S'inscrire" id="btn-inscrire">
            </div>
            <div class="text-compte">
                <p id="connect">
                    <a href="#">Vous avez déjà un compte ?</a>
                </p>
            </div>
        </form>
        
    </section>
</body>
</html>