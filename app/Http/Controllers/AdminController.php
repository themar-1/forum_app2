<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Models\Admin;
use App\Models\Entreprise;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth")->except(['index', 'handleLogin']);
    }
    public function index()
    {

        return view('admin.login');
    }

    public function dashboard()
    {

        $stg = Stagiaire::join('etablissements', 'etablissements.id', '=', 'stagiaires.etablissement_id')
            ->select('stagiaires.*', 'etablissements.nom as efp')->get();

        $entreprises = Entreprise::all();

        $loginaction = Stagiaire::where('status', 1)
            ->orWhere('status', 2)
            ->get();

        $entretien = Stagiaire::where('status', 2)->get();

        return view('admin.index', ['temp' => 1, 'stg' => $stg, 'entreprises' => $entreprises, 'loginaction' => $loginaction, 'Entretien' => $entretien]);
    }
    public function handleLogin(Request $request)
    {
        return Auth::attempt($request->only('login', 'password')) ? redirect()->route('admin.dashboard') : back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function downloadCv(Request $request)
    {
        $filePath = $request->input("fileName");
        return Storage::disk('resumes')->exists($filePath) ? Storage::disk("resumes")->download($filePath) : redirect()->back()->with('error', 'CV file not found.');
    }
    public function viewCv(Request $request)
    {
        $fileName = $request->input("fileName");
        if (Storage::disk('local')->exists($fileName)) {
            $file = storage_path("app/" . $fileName);
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $fileName . '"',
            ];
            return response()->file($file, $headers);
        } else
            return redirect()->back()->with('error', 'CV file not found.');
    }
    public function deleteStudent($id)
    {
        $student = Stagiaire::find($id);

        if (!$student) {
            return redirect()->back();
        }

        $student->delete();

        return redirect()->back();
    }
    public function ajouterAdmin()
    {

        return view('admin.index', ['temp' => 2]);
    }
    public function ajouterEntreprise()
    {

        return view('admin.index', ['temp' => 3]);
    }
    public function ajouterStagiaire()
    {

        return view('admin.index', ['temp' => 4]);
    }
    public function add_a(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'password' => 'required|min:6',
        ]);
        $admin = new admin();
        $admin->login = strip_tags($request->input('name'));
        $admin->password = Hash::make(strip_tags($request->input('password')));
        $admin->role = 1;
        $admin->save();

        return redirect()->back();
    }

    public function add_e(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:50',
            'representant' => 'required|string|max:50',
            'activite' => 'required|string|max:255',
            'logo' => 'required|url',
            'web' => 'required|url',
            'email' => 'required|email|max:255',
            // 'password' => 'required|min:6|max:15',
            'stand' => 'required|integer|max:10',
        ]);
        $entreprises = new Entreprise();
        $entreprises->nom = strip_tags($request->input('nom'));
        $entreprises->representant = strip_tags($request->input('representant'));
        $entreprises->activite = strip_tags($request->input('activite'));
        $entreprises->logo = strip_tags($request->input('logo'));
        $entreprises->web = strip_tags($request->input('web'));
        // $entreprises->password = Hash::make(strip_tags($request->input('web')));
        $entreprises->email = strip_tags($request->input('email'));
        $entreprises->stand = strip_tags($request->input('stand'));
        $entreprises->save();

        return redirect()->back();
    }
}
