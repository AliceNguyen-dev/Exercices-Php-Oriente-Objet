<?php

namespace App\Models;

class Categorie
{
    /** Retourne un tableau de categories */
    public function getCategories()
    {
        return[
          'Politique', 'Economie', 'Culture'
        ];
    }
}