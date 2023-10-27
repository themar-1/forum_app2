<?php

namespace App\Imports;

use App\Models\Entreprise;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class EntreprisesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        $ent = new Entreprise();
        $ent->email = $row[0];
        $ent->web = $row[1];
        $ent->nom = $row[2];
        $ent->raisonsociale = $row[2];
        $ent->raisonabregee = $row[3];
        $ent->activite = $row[4];
        $ent->representant = $row[5];
        $ent->logo = $row[6];
        $ent->stand = $row[7];
        return $ent;
    }
}
