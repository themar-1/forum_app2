<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\Session;

class reservationController extends Controller
{
    public function getstagiairebycindatenaissance(Request $request)
    {

        // $stagiaire = Stagiaire::join('etablissements', 'etablissements.id', '=', 'stagiaires.etablissement_id')
        //     ->select('stagiaires.*', 'etablissements.nom as efp')
        //     ->where('cin', $request->get('cin'))
        //     ->where('dateNaissance', $request->get('datenaissance'))->first();

        // if (isset($stagiaire))
        //     Session::put('currentStagiaire', $stagiaire);
        // else Session::forget('currentStagiaire');

        // return view('reservationrdv', compact('stagiaire'));
    }
}
