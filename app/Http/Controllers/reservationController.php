<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\Session;

class reservationController extends Controller
{
    public function getstagiairebycindatenaissance(Request $request)
    {  
         
        $stagiaire=Stagiaire::where('cin',$request->get('cin'))
                            ->where('datenaissance',$request->datenaissance)
                            ->where('status','>',0)->first();
                                        
        if ( isset($stagiaire) )
                Session::put('currentStagiaire', $stagiaire);
        else Session::forget('currentStagiaire');

        return view('reservationrdv',compact('stagiaire'));

    }
 
}
