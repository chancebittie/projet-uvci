<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules=[
        "email"=>"required",
        "password"=>"required|min:4",
    ];

    public function updated($propertedNane){
        return $this->validateOnly($propertedNane);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
