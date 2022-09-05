<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Actualite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreeActualite extends Component
{
    use WithFileUploads;
    public $photo;
    public $description;
    public $titre;

    protected $rules=[
        "titre"=>"required|min:3|string|unique:actualites",
        "description"=>"required|string|min:3",
        "photo"=>"image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.cree-actualite');
    }
    // public function openModal(){
    //     // $this->editMode=false;
    //     // $this->dispatchBrowserEvent('showModalActualite');
    // }
    public function ajouter(){
        // $this->editMode=false;
        Actualite::create([
            "photo"=>$this->photo->store('public/actualite'),
            "titre"=>$this->titre,
            "description"=>$this->description,
            "user_id"=>Auth::user()->id,
        ]);
        $this->dispatchBrowserEvent('hideModalActualite');
    }
}
