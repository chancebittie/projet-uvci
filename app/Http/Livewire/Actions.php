<?php

namespace App\Http\Livewire;

use App\Models\Action;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actions extends Component
{

    use WithFileUploads;
    public $editMode=false;
    public $titre;
    public $description;
    public $ction_id;
    public $photo;

    protected $rules=[
        "titre"=>"required|min:3|string|unique:actions",
        "description"=>"required|string|min:3",
        "photo"=>"image|max:1024",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.actions',[
            "actions"=>Action::all(),
        ]);
    }

    public function goToAdd(){
        $this->reset('titre',"description",'photo');
        $this->editMode=false;
        $this->dispatchBrowserEvent('showModalAction');
    }
    public function ajouter(){
        Action::create([
            "titre"=>$this->titre,
            "description"=>$this->description,
            "photo"=>$this->photo->store('public/actions'),
            // "type_article_id"=>$this->type_article_id,
        ]);
        $this->reset('titre',"description",'photo');
        $this->dispatchBrowserEvent('hideModalAction');
    }
    public function goToEdit($id){
        $this->editMode=true;
        $action=Action::find($id);
        $this->action_id=$action->id;
        $this->titre=$action->titre;
        $this->description=$action->description;
        $this->photo=$action->photo;
        $this->dispatchBrowserEvent('showModalAction');
    }
    public function modifier(){
        $action=Action::find($this->action_id);
        $action->update([
            "titre"=>$this->titre,
            "description"=>$this->description,
            // "photo"=>$this->photo->store('public/actions'),
        ]);
        $this->reset('titre',"description",'photo');
        $this->dispatchBrowserEvent('hideModalAction');
    }
}
