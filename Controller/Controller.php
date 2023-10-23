<?php
require_once 'vue/vue.php'; 

class CategorieController {
    public function afficherCategorie() {
        $model = new CategorieModel();
        $donnees = $model->getCategorieData();

        require_once 'vue/vue.php';
    }
}