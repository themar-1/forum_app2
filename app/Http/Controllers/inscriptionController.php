<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class inscriptionController extends Controller
{

    public function getstagiairebycindatenaissance(Request $request)
    {

        $stagiaire = Stagiaire::join('etablissements', 'etablissements.id', '=', 'stagiaires.etablissement_id')
            ->select('stagiaires.*', 'etablissements.nom as efp')
            ->where('cin', $request->get('cin'))
            ->where('dateNaissance', $request->get('datenaissance'))->first();

        // return view("stagiaires.show", ["stagiaire" => $stg]);

        if (isset($stagiaire))
            Session::put('currentStagiaire', $stagiaire);
        else Session::forget('currentStagiaire');

        return view('inscription', compact('stagiaire'));
    }
    public function enregistrerInscription(Request $request)
    {
        $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'datenaissance' => 'required',
            'email' => 'required'
        ]);
        $stagiaire = Stagiaire::where('cin', $request->get('cin'))->first();
        $stagiaire->email = $request->get('email');
        $stagiaire->status = 1;

        if (isset($stagiaire))
            Session::put('currentStagiaire', $stagiaire);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');

            if ($stagiaire->cv) {
                // Supprimez le CV précédemment téléchargé, si disponible
                Storage::delete($stagiaire->cv);
            }

            $path = $file->store('resumes', 'local');
            $stagiaire->cv = $path;
            $stagiaire->save();

            // return redirect()->route('invitation');
            return redirect(route('inscription'))->with('success', 'Inscription enregistr&eacute;e!');
        } else return redirect(route('inscription'))->with('success', 'CV est obligatoire pour s\'inscrire!');
    }
    public function annulerInscription(string $cin)
    {

        $stagiaire = Stagiaire::where('cin', $cin)->first();
        $stagiaire->status = 0;
        if ($stagiaire->cv) {
            Storage::delete($stagiaire->cv);
        }

        $stagiaire->cv = '';

        if (isset($stagiaire)) Session::put('currentStagiaire', $stagiaire);

        $stagiaire->save();
        return redirect(route('inscription'))->with('success', 'Inscription enregistr&eacute;e!');
    }

    public function cvUpload(Request $request)
    {
        $stagiaire = $request->session()->get('currentStagiaire');

        if ($stagiaire) {
            if ($request->hasFile('cv')) {
                $file = $request->file('cv');

                if ($stagiaire->cv) {
                    Storage::delete($stagiaire->cv);
                }

                $path = $file->store('resumes', 'local');
                $stagiaire->cv = $path;
                $stagiaire->save();

                return redirect()->route('invitation');
            }
        }

        return redirect()->back()->withErrors(['error' => 'Erreur : Veuillez réessayer plus tard.']);
    }
}
