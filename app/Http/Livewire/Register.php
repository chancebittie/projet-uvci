<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $nom;
    public $prenom;
    public $email;
    public $telephone;
    public $password;
    public $password_confirmation;

    protected $rules=[
        "nom"=>"required|string|min:3",
        "prenom"=>"required|string|min:3",
        "email"=>"required|email|unique:users",
        "telephone"=>"required|integer|unique:users|min:8",
        "password"=>"required|min:4",
        "password_confirmation"=>"required|min:4",
    ];

    protected $messages=[
        "password_confirmation.required"=>"Le champ comfirmation es obligatoire",
        "password_confirmation.min"=>"le texte du champ comfirmation doit etre de 4 caracteres",
    ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }
    // protected $rules=[
    //     "name"=>"required|string|min:3",
    //     "pseudo"=>"required|string|min:3|unique:users",
    //     "password"=>"required|min:4",
    //     "password_confirmation"=>"required|min:4",
    // ];

    // public function updated($propertedNane){
    //     return $this->validateOnly($propertedNane);
    // }

    public function render()
    {
        return view('livewire.register');
    }
}
