<?php

namespace App\Http\Controllers;

use App\Models\Annonce;

class AnnoncesController extends Controller
{
    public function index()
    {
        $annonces = Annonce::with('candidats')->get();
        return view('annonces.index', compact('annonces'));
    }
}
