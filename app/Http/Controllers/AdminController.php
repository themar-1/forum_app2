<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use App\Models\Admin;
use App\Models\Entreprise;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $stg = Stagiaire::all();
        $Entreprise = Entreprise::count();
        $loginaction = Stagiaire::where('status', 1)
            ->orWhere('status', 2)
            ->get();
        $Entretien = Stagiaire::where('status', 2)->get();
        return view('admin.index', ['temp' => 1, 'stg' => $stg, 'Entreprise' => $Entreprise, 'loginaction' => $loginaction, 'Entretien' => $Entretien]);

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
        $filePath = 'resumes/' . $fileName;

        if (Storage::disk('local')->exists($filePath)) {
            $file = storage_path("app/" . $filePath);

            // Set the appropriate content type and headers for PDF
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
    public function AjouterAdmin()
    {

        return view('admin.index', ['temp' => 2]);
    }
    public function AjouterEntreprises()
    {

        return view('admin.index', ['temp' => 3]);
    }
    public function AjouterStagiaire()
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
        $admin->password = strip_tags($request->input('password'));
        $admin->role = 1;
        $admin->save();

        return redirect()->back();
    }






}
