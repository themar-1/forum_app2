<?php

namespace App\Imports;

use App\Models\Stagiaire;
use Maatwebsite\Excel\Concerns\ToModel;

class StagiairesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        $stg = new Stagiaire();
        $stg->matricule = $row[0];
        $stg->cin = $row[1];
        $stg->email = $row[2];
        $stg->nom = $row[3];
        $stg->prenom = $row[4];
        $stg->sexe = ['F', 'H'][array_rand(['F', 'H'])];
        $stg->dateNaissance = $row[5];
        $stg->telephone = $row[6];
        $stg->filiere = $row[7];
        $stg->etablissement_id = $row[8];
        return $stg;
    }
}
