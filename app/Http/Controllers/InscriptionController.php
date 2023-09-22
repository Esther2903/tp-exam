<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index(){
        $options=Option::all();
        return view('inscriptionDEC', compact('options'));
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
