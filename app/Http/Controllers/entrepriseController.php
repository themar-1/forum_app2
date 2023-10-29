<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
    public function dashboard()
    {

        return view('entreprises.dashboard');
    }
}
