<?php

namespace App\Imports;

use App\Models\Etablissement;
use Maatwebsite\Excel\Concerns\ToModel;

class EtablissementsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        $etb = new Etablissement();
        $etb->nom = $row[0];
        return $etb;
    }
}
