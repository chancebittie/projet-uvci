<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmploiStage;
use Illuminate\Support\Facades\Auth;

class EmploiStages extends Component
{
    public $titre_annonce;
    public $nom_entreprise;
    public $nombre_poste;
    // public $telephone;
    public $description;

    protected $rules=[
        "titre_annonce"=>"required|min:3|string",
        "nombre_poste"=>"required|min:1|integer",
        "nom_entreprise"=>"required|min:3|string",
        "description"=>"required|min:3|string",
    ];

    public function updated($propertedName){
        return $this-> validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.emploi-stages');
    }

    public function submit(){
        $this->validate();

        EmploiStage::create([
            "titre_annonce"=>$this->titre_annonce,
            "nombre_poste"=>$this->nombre_poste,
            "nom_entreprise"=>$this->nom_entreprise,
            "user_id"=>Auth::user()->id,
            "description"=>$this->description,
        ]);

        $this->dispatchBrowserEvent("succesAnnonce");

        $this->reset("titre_annonce","nombre_poste","nom_entreprise",'description');
    }

}
