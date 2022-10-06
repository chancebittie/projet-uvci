<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ActeNaissance;
use Livewire\WithFileUploads;

class ActesNaissances extends Component
{
    use WithFileUploads;
    public $nom;
    public $prenom;
    public $date_naissance;
    public $acte_naissance_pere;
    public $acte_naissance_mere;
    public $acte_naissance_id;
    public $editMode;
    public $photo;

    protected $rules=[
        "nom"=>"required|string|min:3",
        "prenom"=>"required|string|min:3",
        "date_naissance"=>"required|date",
        "acte_naissance_pere"=>"image|max:1024",
        "acte_naissance_mere"=>"image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.actes-naissances',[
            "actes_naissances"=>ActeNaissance::all(),
        ]);
    }

    public function creer(){
        // $this->editMode=false;
        $this->dispatchBrowserEvent('showModalAdNaissance');
    }

    public function ajouter(){
        // $this->editMode=false;
        $this->validate();
        ActeNaissance::create([
            "acte_naissance_mere"=>$this->acte_naissance_mere->store('public/Naissance'),
            "acte_naissance_pere"=>$this->acte_naissance_pere->store('public/Naissance'),
            "date_naissance"=>$this->date_naissance,
            "prenom"=>$this->prenom,
            "nom"=>$this->nom,
        ]);
        $this->reset('acte_naissance_mere',"acte_naissance_mere","nom","prenom","date_naissance");
        $this->dispatchBrowserEvent('hideModalAdNaissance');
    }

    public function goToEdit($id){
        $this->editMode=true;
        $acte_naissance=ActeNaissance::find($id);
        $this->acte_naissance_id=$acte_naissance->id;
        $this->acte_naissance_mere=$acte_naissance->acte_naissance_mere;
        $this->acte_naissance_pere=$acte_naissance->acte_naissance_pere;
        $this->date_naissance=$acte_naissance->date_naissance;
        $this->prenom=$acte_naissance->prenom;
        $this->nom=$acte_naissance->nom;
        $this->dispatchBrowserEvent('showModalAdNaissance');
    }
    public function modifier(){
        $acte_naissance=ActeNaissance::find($this->acte_naissance_id);
        $acte_naissance->update([
            // "acte_naissance_pere"=>$this->acte_naissance_pere->store('public/Naissance'),
            // "acte_naissance_mere"=>$this->acte_naissance_mere->store('public/Naissance'),
            "nom"=>$this->nom,
            "prenom"=>$this->prenom,
            "date_naissance"=>$this->date_naissance,
            // "photo"=>$this->photo->store('public/actions'),
        ]);
        $this->reset('acte_naissance_mere',"acte_naissance_mere","nom","prenom","date_naissance");
        $this->dispatchBrowserEvent('hideModalAdNaissance');
    }

}
