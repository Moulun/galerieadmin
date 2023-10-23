<?php
include_once 'Model/Model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        

<?php
if (isset($_GET["page"]) && ($_GET["page"]) == "connexionAdmin") {
    echo '
        <div class="megaContainerConnexion">
        <div class="containerConnexion">
            <form  class="FormConnexion"action=""method="POST">
                <input  class="inputConnexionEmail" type="text" name="ConnexionEmail" placeholder="Email">
                <input type="text" class="inputConnexionPassword" name="ConnexionPassword" placeholder="Mot de passe">
                <input type="submit" name="inputSubmitConnexion" class="inputSubmitConnexion" value="Connexion">
                <div class="containerTexteConnexion">
                    <p><a href="?page=mot-de-passe-oublié-admin">Mot de passe oublié ?</a></p>
                </div>
            </form>
        </div>
        </div>';
}

if (isset($_GET['page']) && $_GET['page'] == 'admin') {
    echo '<h1>Gestion du site</h1>';
    echo '<li><a href="?">Ajout d\'un compte admin</a></li>';
    echo '<h2>Modification de produits</h2>';
    ;

    foreach ($donnees as $ligne) {
        echo "<h2>{$ligne['Nom_de_la_categorie_par_défaut']}</h2>";
        echo "<p>{$ligne['Nom']}, {$ligne['Tailles']}, {$ligne['Couleur']}, {$ligne['Bonnet']}, {$ligne['Parfum']}, {$ligne['Description_sans_HTML']}, {$ligne['Caractéristique_Composition']}, {$ligne['URLs_de_toutes_les_images']}</p>";
    }
}
if (isset($_GET['page']) && ($_GET['page']) == 'accueil') {
   
}
if (isset($_GET['page']) && ($_GET['page']) == 'accueil') {
   
}
if (isset($_GET['page']) && ($_GET['page']) == 'accueil') {
   
}
?>
</body>
</html>