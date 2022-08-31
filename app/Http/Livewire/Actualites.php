<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Actualite;
use Livewire\Component;

class Actualites extends Component
{
    use WithFileUploads;
    public $editMode=false;
    public $titre;
    public $description;
    // public $type_article_id;
    public $photo;

    protected $rules=[
        "titre"=>"required|min:3|string|unique:actualites",
        "description"=>"required|string|min:3",
        "photo"=>"required|image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.actualites',[
            "actualites"=>Actualite::all(),
        ]);
    }

    public function goToAdd(){
        $this->dispatchBrowserEvent('showModalActualite');
    }
    public function ajouter(){
        Actualite::create([
            "titre"=>$this->titre,
            "description"=>$this->description,
            "photo"=>$this->photo->store('public/actualites'),
            // "type_article_id"=>$this->type_article_id,
        ]);
        $this->dispatchBrowserEvent('hideModalArticle');
    }
}
