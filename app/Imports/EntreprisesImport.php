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
        $ent->nom = $row[0];
        $ent->representant = $row[1];
        $ent->email = $row[2];
        $ent->stand = $row[3];
        return $ent;
    }
}
