<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function actualites(){
        return view('projet.actualites');
    }
    public function view_actualites(){
        return view('projet.view_actualite');
    }
    public function sante(){
        return view('projet.espace_santes');
    }

    public function empl_stages(){
        return view('projet.espace_empl_stage');
    }
    public function creer_empl_stages(){
        return view('projet.creer_emploie_ou_stage');
    }
    public function apropos_de(){
        return view('projet.apropos_de');
    }
    public function actions(){
        return view('projet.actions');
    }
}
