<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\imports\StagiairesImport;
use App\Exports\StagiairesExport;
use App\imports\EntreprisesImport;
use App\Exports\EntreprisesExport;
use App\Imports\EtablissementsImport;
use App\Exports\EtablissementsExport;

class BackupController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:1');
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.backup');
    }

    public function importStagiaires(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new StagiairesImport, $file);
        return back()->with('success', 'Stagiaires imported successfully.');
    }

    public function exportStagiaires()
    {
        return Excel::download(new StagiairesExport, 'stagiaires.csv');
    }
    public function importEtablissements(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new EtablissementsImport, $file);
        return back()->with('success', 'etablissements imported successfully.');
    }

    public function exportEtablissements()
    {
        return Excel::download(new EtablissementsExport, 'etablissements.csv');
    }

    public function importEntreprises(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new EntreprisesImport, $file);
        return back()->with('success', 'Entreprises imported successfully.');
    }

    public function exportEntreprises()
    {
        return Excel::download(new EntreprisesExport, 'entreprises.csv');
    }
}
