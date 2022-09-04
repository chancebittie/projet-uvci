<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Annonces extends Component
{
    public $titre;
    public $societe;
    public $nombre;
    // public $telephone;
    public $description;

    protected $rules=[
        "titre"=>"required|min:3|string",
        "societe"=>"required|min:3|string",
        "nombre"=>"required|min:1|integer",
        "description"=>"required|min:3|string",
    ];

    public function updated($propertedName){
        return $this-> validateOnly($propertedName);
    }
    public function render()
    {
        return view('livewire.annonces');
    }

    public function submit(){
        $this->validate();

        Annonce::create([
            "titre"=>$this->titre,
            "nombre"=>$this->nombre,
            "societe"=>$this->societe,
            "user_id"=>Auth::user()->id,
            "description"=>$this->description,
        ]);

        $this->dispatchBrowserEvent("succesAnnonce");

        $this->reset("titre","nombre","societe",'description');
    }
}
