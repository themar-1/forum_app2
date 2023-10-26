<?php

namespace App\Exports;

use App\Models\Stagiaire;
use Maatwebsite\Excel\Concerns\FromCollection;

class StagiairesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stagiaire::all();
    }
}
