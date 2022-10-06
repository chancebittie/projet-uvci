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
    public $actualite_id;
    public $photo;
    // public $user_id;

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
        return view('livewire.actualites',[
            "actualites"=>Actualite::all(),
        ]);
    }

    public function goToAdd(){
        $this->reset('titre',"description",'photo');
        $this->editMode=false;
        $this->dispatchBrowserEvent('showModalActualite');
    }
    public function ajouter(){
        Actualite::create([
            "titre"=>$this->titre,
            "description"=>$this->description,
            "photo"=>$this->photo->store('public/actualites'),
            "user_id"=>auth()->user()->id,
        ]);
        $this->reset('titre',"description",'photo');
        $this->dispatchBrowserEvent('hideModalActualite');
    }
    public function goToEdit($id){
        $this->editMode=true;
        $actualite=Actualite::find($id);
        $this->actualite_id=$actualite->id;
        $this->titre=$actualite->titre;
        $this->description=$actualite->description;
        $this->photo=$actualite->photo;
        $this->dispatchBrowserEvent('showModalActualite');
    }
    public function modifier(){
        $actualite=Actualite::find($this->actualite_id);
        $actualite->update([
            "titre"=>$this->titre,
            "description"=>$this->description,
            // "photo"=>$this->photo->store('public/actualites'),
        ]);
        $this->reset('titre',"description",'photo');
        $this->dispatchBrowserEvent('hideModalActualite');
    }
}
