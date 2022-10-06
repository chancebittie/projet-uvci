<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function utilisateurs()
    {
        return view('admin.utilisateurs');
    }
    public function actualites()
    {
        return view('admin.actualites');
    }
    public function pharmacies()
    {
        return view('admin.pharmacies');
    }
    public function articles()
    {
        return view('admin.articles');
    }
    public function actions()
    {
        return view('admin.actions');
    }
    public function hopitals()
    {
        return view('admin.hopitals');
    }
    public function naissances()
    {
        return view('admin.actes-naissances');
    }
    public function deces()
    {
        return view('admin.actes-deces');
    }
    public function mariages()
    {
        return view('admin.actes-mariages');
    }
    public function nous_contacter()
    {
        return view('admin.nous-contacter');
    }
}
