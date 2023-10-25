<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        Mail::to('hachem.elharrak@yahoo.fr')
            ->send(new Contact($request->except('_token')));
 
        return view('confirm');
    }}
