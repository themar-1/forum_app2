<?php

namespace App\Http\Controllers;

use App\Models\Entretien;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function applyForInterview(Request $request, $stagiaire)
    {

        // $stagiaire = Session::get('currentStagiaire');

        // $applicationExists = Entretien::where('stagiaire_id', $stagiaire->id)
        //     ->where('entreprise_id', $entrepriseId)
        //     ->exists();

        // if (!$applicationExists) {

        Entretien::create([
            'stagiaire_id' => $stagiaire,
            'entreprise_id' => $request->input('entreprise'),
            'status' => 1,
        ]);
 
        $session = new inscriptionController;
        $session->entretienSession();


        // Ajoutez un message flash de succès
        // session()->flash('success', 'Candidature soumise avec succès.');
        // 
        //   return redirect()->back();
        //   }

        // Ajoutez un message flash d'erreur
        //   session()->flash('error', 'Vous avez déjà postulé à cette entreprise.');

        return redirect()->back();
    }
}
