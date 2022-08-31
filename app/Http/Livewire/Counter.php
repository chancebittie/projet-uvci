<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules=[
        "name"=>"required|min:1",
        "email"=>"required",
        "password"=>"required|min:4",
    ];

    public function updated($propertedNane){
        return $this->validateOnly($propertedNane);
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
