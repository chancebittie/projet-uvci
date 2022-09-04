<?php

namespace App\Http\Livewire;

use App\Models\Contacter;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ContactUs extends Component
{
    public $nom;
    public $prenom;
    public $email;
    public $telephone;
    public $description;

    protected $rules=[
        "nom"=>"required|min:3|string",
        "prenom"=>"required|min:3|string",
        "email"=>"required|min:3|email",
        "telephone"=>"required|min:3|integer",
        "description"=>"required|min:3|string",
    ];

    public function updated($propertedName){
        return $this-> validateOnly($propertedName);
    }

    public function render()
    {
        if (isset( Auth::user()->nom)) {
            $this->nom= Auth::user()->nom;
            $this->prenom= Auth::user()->prenom;
            $this->email= Auth::user()->email;
            $this->telephone= Auth::user()->telephone;
        }
        return view('livewire.contact-us');
    }
    // Auth::guest()

    public function submit(){
        $this->validate();

        Contacter::create([
            "nom"=>$this->nom,
            "prenom"=>$this->prenom,
            "telephone"=>$this->telephone,
            "email"=>$this->email,
            "description"=>$this->description,
        ]);

        $this->dispatchBrowserEvent("succesContactNous");

        $this->reset('description');
    }
}
