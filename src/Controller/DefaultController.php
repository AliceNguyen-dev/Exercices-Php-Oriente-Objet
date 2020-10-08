<?php

namespace App\Controller;

use App\Models\Categorie;

class DefaultController
{
    /** Ces fonctions sont ce qu'on appelle une "action ". Et une action est une page */
    /** -------------------------------- */
    /** Page d'Accueil du site */
    public function home()
    {
        $categorieModel = new Categorie();
        $categories = $categorieModel->getCategories();
        print_r($categories);
        echo "<h1>PAGE D'ACCUEIL DU CONTROLLEUR</h1>";
    }

    /** Page category du site */
    public function category()
    {
        echo "<h1>PAGE CATEGORY DU CONTROLLEUR</h1>";
    }

    /** Page article du site */
    public function article()
    {
        echo "<h1>PAGE ARTICLE DU CONTROLLEUR</h1>";
    }



}