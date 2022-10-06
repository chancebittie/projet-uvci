<?php

namespace App\Http\Livewire;

use App\Models\ActeDeces;
use Livewire\Component;
use Livewire\WithFileUploads;

class ActesDeces extends Component
{
    use WithFileUploads;
    public $extrait_defunt;
    public $piece_defunt;
    public $certif_medic_deces;
    public $piece_demandeur;
    public $editMode=false;

    protected $rules=[
        "extrait_defunt"=>"required|image|max:1024",
        "piece_defunt"=>"required|image|max:1024",
        "certif_medic_deces"=>"required|image|max:1024",
        "piece_demandeur"=>"required|image|max:1024",
    ];
    public function render()
    {
        return view('livewire.actes-deces',[
            "actes_deces"=>ActeDeces::all(),
        ]);
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
