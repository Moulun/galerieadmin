<?php
require_once 'Class/dataBase.php';

class CategorieModel extends DataBase {
    public function getCategorieData() {
        $dbConnect = $this->dbConnect;
        

        // Sélectionnez les colonnes que vous souhaitez afficher dans votre requête
        $sql = "SELECT `Nom_de_la_categorie_par_défaut`, `Nom`, `Tailles`, `Couleur`, `Bonnet`, `Parfum`, `Description_sans_HTML`, `Caractéristique_Composition`, `URLs_de_toutes_les_images` FROM `mytable`";

        try {
            $stmt = $dbConnect->query($sql);

            $categorieActuelle = null;

            while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $categorie = $ligne["Nom_de_la_categorie_par_défaut"];
                $contenu = $ligne["Nom"] . ", " . $ligne["Tailles"] . ", " . $ligne["Couleur"] . ", " . $ligne["Bonnet"] . ", " . $ligne["Parfum"] . ", " . $ligne["Description_sans_HTML"] . ", " . $ligne["Caractéristique_Composition"] . ", " . $ligne["URLs_de_toutes_les_images"];

                if ($categorie != $categorieActuelle) {
                    echo "<h2>$categorie</h2>";
                    $categorieActuelle = $categorie;
                }

                echo "<p>$contenu</p>";
            }
        } catch (PDOException $e) {
            echo "Erreur de requête : " . $e->getMessage();
        }
    }
}
?>


