<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Entretien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;


class EntrepriseController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware("auth");
    // }
    public function index()
    {
        return view("entreprises.index", ["entreprises" => Entreprise::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $entreprise)
    {
        return view("entreprises.show", ["entreprise" => Entreprise::findOrFail($entreprise)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request)
    {

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];



        if (Auth::guard('entreprise')->attempt($credentials)) {

            $user = Auth::guard('entreprise')->user();
            $user->status = 1;
            $user->save();


            return redirect()->route('entreprise.dashboard');
        }


        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }
    public function loginIndex(Request $request)
    {
        return view("auth.login");
    }
    public function showCv(Request $request)
    {
        $fileName = $request->input("fileName");
        if (Storage::disk('local')->exists($fileName)) {
            $file = storage_path("app/" . $fileName);
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $fileName . '"',
            ];
            return response()->file($file, $headers);
        }
        return redirect()->back()->with('error', 'CV file not found.');
    }
    public function dashboard()
    {
        // Retrieve applied candidates for the current entreprise
        $entreprise = Auth::guard('entreprise')->user();
        $entrepriseName = $entreprise->nom;
         $logo= $entreprise->logo;
    
        $appliedCandidates = Entretien::where('entreprise_id', $entreprise->id)
            ->with('stagiaire')
            ->get();
    
            return view('entreprises.dashboard', compact('appliedCandidates', 'entrepriseName', 'logo'));

    }
}
