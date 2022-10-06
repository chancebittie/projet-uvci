<?php

namespace App\Http\Livewire;

use App\Models\Contacter;
use Livewire\Component;

class NousContacter extends Component
{
    public $nom;
    public $reponse;
    public $prenom;
    public $telephone;
    public $email;
    public $description;
    public function render()
    {
        return view('livewire.nous-contacter',[
            'contacters'=>Contacter::all(),
        ]);
    }

    public function goToReponse($id){
        $contacter=Contacter::find($id);
        $this->nom=$contacter->nom;
        $this->prenom=$contacter->prenom;
        $this->telephone=$contacter->telephone;
        $this->email=$contacter->email;
        $this->description=$contacter->description;

        $this->dispatchBrowserEvent('showModalNousContacter');
    }
    public function reponse(){
        $this->dispatchBrowserEvent('hideModalNousContacter');
        $this->reset('nom','prenom','email','telephone','description');
        // $contacter=Contacter::find()
    }
}
