<?php

namespace App\Http\Controllers;

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
        return view('admin.dashboard');
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
        return Storage::disk('resumes')->exists($filePath) ?  Storage::disk("resumes")->download($filePath) : redirect()->back()->with('error', 'CV file not found.');
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
}
