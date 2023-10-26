<?php

namespace App\Exports;

use App\Models\Etablissement;
use Maatwebsite\Excel\Concerns\FromCollection;

class EtablissementsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Etablissement::all();
    }
}
