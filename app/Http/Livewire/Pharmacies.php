<?php

namespace App\Http\Livewire;

use App\Models\Pharmacie;
use Livewire\Component;

class Pharmacies extends Component
{
    public $editMode=false;
    public $titre;
    public $description;
    public $pharmacie_id;
    public $status=0;

    protected $rules=[
        "titre"=>"required|string|min:3|unique:pharmacies",
        "description"=>"required|string|min:3",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.pharmacies',[
            'pharmacies'=>Pharmacie::all(),
        ]);
    }

    public function goToAdd(){
        $this->reset('titre',"description",'status');
        $this->editMode=false;
        $this->dispatchBrowserEvent('showModalPharmacie');
    }
    public function ajouter(){
        Pharmacie::create([
            "titre"=>$this->titre,
            "description"=>$this->description,
            "status"=>$this->status,
        ]);
        $this->reset('titre',"description",'status');
        $this->dispatchBrowserEvent('hideModalPharmacie');
    }

    public function goToEdit($id){
        $this->editMode=true;
        $pharmacie=Pharmacie::find($id);
        $this->pharmacie_id=$pharmacie->id;
        $this->titre=$pharmacie->titre;
        $this->description=$pharmacie->description;
        $this->status=$pharmacie->status;
        $this->dispatchBrowserEvent('showModalPharmacie');
    }

    public function modifier(){
        $pharmacie=Pharmacie::find($this->pharmacie_id);
        $pharmacie->update([
            "titre"=>$this->titre,
            "description"=>$this->description,
            "status"=>$this->status,
        ]);
        $this->reset('titre',"description",'status');
        $this->dispatchBrowserEvent('hideModalPharmacie');
    }

    public function deGarde($id){
        $pharmacie=Pharmacie::find($id);
        $pharmacie->update([
            "status"=>1,
        ]);
        $this->dispatchBrowserEvent('update');
    }
    public function pasGarde($id){
        $pharmacie=Pharmacie::find($id);
        $pharmacie->update([
            "status"=>0,
        ]);
        $this->dispatchBrowserEvent('update');
    }
}
