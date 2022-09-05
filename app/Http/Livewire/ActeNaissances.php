<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ActeNaissance;
use Illuminate\Support\Facades\Auth;

class ActeNaissances extends Component
{
    use WithFileUploads;
    public $nom;
    public $prenom;
    public $date_naissance;
    public $acte_nassance_pere;
    public $acte_nassance_mere;

    protected $rules=[
        "nom"=>"required|string|min:3",
        "prenom"=>"required|string|min:3",
        "date_naissance"=>"required|date",
        "acte_nassance_pere"=>"required|image|max:1024",
        "acte_nassance_mere"=>"required|image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.acte-naissances');
    }

    public function creer(){
        // $this->editMode=false;
        $this->dispatchBrowserEvent('showModalNaissance');
    }

    public function ajouter(){
        // $this->editMode=false;
        $this->validate();
        ActeNaissance::create([
            "acte_nassance_mere"=>$this->acte_nassance_mere->store('public/Naissance'),
            "acte_nassance_pere"=>$this->acte_nassance_pere->store('public/Naissance'),
            "date_naissance"=>$this->date_naissance,
            "prenom"=>$this->prenom,
            "nom"=>$this->nom,
        ]);
        $this->dispatchBrowserEvent('hideModalNaissance');
    }
}
