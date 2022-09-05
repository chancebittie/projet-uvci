<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Utilisateurs extends Component
{
    public $nom;
    public $prenom;
    public $email;
    public $telephone;
    public $user_id;
    public $role=0;
    // public $roleNom;
    public $password;
    public $password_confirmation;
    public $editMode=false;

    protected $rules=[
        "nom"=>"required|string|min:3",
        "prenom"=>"required|string|min:3",
        "email"=>"required|email|unique:users",
        "telephone"=>"required|integer|unique:users|min:8",
        "password"=>"required|min:4",
        "password_confirmation"=>"required|min:4",
    ];

    // protected $messages=[
    //     "roleNom.required"=>"Le champ role es obligatoire",
    //     "roleNom.min"=>"le texte du champ role doit etre de 3 caracteres",
    //     "password_confirmation.required"=>"Le champ comfirmation es obligatoire",
    //     "password_confirmation.min"=>"le texte du champ comfirmation doit etre de 4 caracteres",
    // ];

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        return view('livewire.utilisateurs',[
            'users'=>User::all(),
            // 'roles'=>Role::all(),
        ]);
    }
    // public function goToRole(){
    //     $this->dispatchBrowserEvent('showModalRole');
    // }
    // public function ajouterRole(){
    //     // $this->validate();
    //     Role::create([
    //         "nom"=>$this->roleNom,
    //     ]);
    //     // $this->reset("roleNom",);
    //     // $this->dispatchBrowserEvent('hideModalRole');
    // }

    public function goToAdd(){
        $this->editMode=false;
        $this->dispatchBrowserEvent('showModalUser');
    }
    public function ajouter(){
        $this->validate();
        User::create([
            "nom"=>$this->nom,
            "prenom"=>$this->prenom,
            "telephone"=>$this->telephone,
            "email"=>$this->email,
            "isAdmin"=>$this->role,
            "password"=>Hash::make(1234),
        ]);
        $this->reset("nom","prenom","telephone","email","role","password");
        $this->dispatchBrowserEvent('hideModalUser');
    }
    public function goToEdit($id){
        $this->editMode=true;
        $user=User::find($id);
        $this->nom=$user->nom;
        $this->prenom=$user->prenom;
        $this->email=$user->email;
        $this->telephone=$user->telephone;
        $this->role=$user->isAdmin;
        $this->password=$user->password;
        $this->user_id=$user->id;
        $this->dispatchBrowserEvent('showModalUser');
    }

    public function modifier(){
        $user=User::find($this->user_id);
        $user->update([
            "nom"=>$this->nom,
            "prenom"=>$this->prenom,
            "telephone"=>$this->telephone,
            "email"=>$this->email,
            "isAdmin"=>$this->role,
        ]);
        $this->reset("nom","prenom","telephone","email","role","password");
        $this->dispatchBrowserEvent('hideModalUser');
    }
}
