<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;

class ActeDeces extends Component
{
    use WithFileUploads;
    public $extrait_defunt;
    public $piece_defunt;
    public $certif_medic_deces;
    public $piece_demandeur;

    protected $rules=[
        "extrait_defunt"=>"required|image|max:1024",
        "piece_defunt"=>"required|image|max:1024",
        "certif_medic_deces"=>"required|image|max:1024",
        "piece_demandeur"=>"required|image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }


    public function render()
    {
        return view('livewire.acte-deces');
    }

    public function creer(){
        // $this->editMode=false;
        $this->dispatchBrowserEvent('showModalDeces');
    }

    public function ajouter(){
        // $this->editMode=false;
        $this->validate();
        ActeDeces::create([
            "extrait_defunt"=>$this->extrait_defunt->store('public/deces'),
            "piece_defunt"=>$this->piece_defunt->store('public/deces'),
            "certif_medic_deces"=>$this->certif_medic_deces->store('public/deces'),
            "piece_demandeur"=>$this->piece_demandeur->store('public/deces'),
            // "user_id"=>Auth::user()->id,
        ]);
        $this->dispatchBrowserEvent('hideModalDeces');
    }

}
