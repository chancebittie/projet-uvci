<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestController extends Controller
{
    public function actualite()
    {
        return view('projet.actualite');
    }
    public function espace_sante()
    {
        return view('projet.espace_sante');
    }
    public function espace_annonce()
    {
        return view('projet.espace_annonce');
    }
    public function apropos()
    {
        return view('projet.apropos');
    }
    public function action()
    {
        return view('projet.action');
    }
    public function counter()
    {
        return view('livewire.counter');
    }

}
