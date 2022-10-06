<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ActeMariage;
use Livewire\WithFileUploads;

class ActesMariages extends Component
{
    use WithFileUploads;
    public $extrait_femme;
    public $piece_femme;
    public $piece_homme;
    public $extrait_homme;
    public $editMode=false;

    protected $rules=[
        "extrait_homme"=>"required|image|max:1024",
        "piece_femme"=>"required|image|max:1024",
        "piece_homme"=>"required|image|max:1024",
        "extrait_femme"=>"required|image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }
    public function render()
    {
        return view('livewire.actes-mariages',[
            "actes_mariages"=>ActeMariage::all(),
        ]);
    }

    public function creer(){
        // $this->editMode=false;
        $this->dispatchBrowserEvent('showModalMariage');
    }

    public function ajouter(){
        $this->validate();
        // $this->editMode=false;
        ActeMariage::create([
            "extrait_homme"=>$this->extrait_homme->store('public/acteMariage'),
            "extrait_femme"=>$this->extrait_femme->store('public/acteMariage'),
            "piece_homme"=>$this->piece_homme->store('public/acteMariage'),
            "piece_femme"=>$this->piece_femme->store('public/acteMariage'),
        ]);
        $this->dispatchBrowserEvent('hideModalMariage');
    }
}
