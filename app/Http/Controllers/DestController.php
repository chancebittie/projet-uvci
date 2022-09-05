<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Annonce;
use App\Models\EmploiStage;
use App\Models\Pharmacie;
use Illuminate\Http\Request;

class DestController extends Controller
{
    // public function actualite()
    // {
    //     return view('projet.actualite');
    // }
    // public function espace_sante()
    // {
    //     return view('projet.espace_sante');
    // }
    // public function espace_annonce()
    // {
    //     return view('projet.espace_annonce');
    // }
    // public function apropos()
    // {
    //     return view('projet.apropos');
    // }
    // public function action()
    // {
    //     return view('projet.action');
    // }
    public function actualites(){
        $actualites=Actualite::limit(15)->get();
        return view('home',compact('actualites'));
    }
    public function view_actualites($id){
        $actualite=Actualite::find($id);
        return view('projet.view_actualite',compact('actualite'));
    }
    public function sante(){
        $pharmacies=Pharmacie::where('status',1)->get();
        return view('projet.espace_santes',compact('pharmacies'));
    }

    public function empl_stages(){
        $annonces=EmploiStage::orderBy('id','DESC')->get();
        return view('projet.espace_empl_stage',compact('annonces'));
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
    public function view_actualite1(){
        return view('projet.actualites');
    }
    public function view_actualite2(){
        return view('projet.actualites');
    }
    public function view_actualite3(){
        return view('projet.actualites');
    }

}
