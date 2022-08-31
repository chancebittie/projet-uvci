<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\TypeArticle;
use Livewire\WithFileUploads;
use Livewire\Component;

class Articles extends Component
{
    use WithFileUploads;
    public $editMode=false;
    public $nom;
    public $prix;
    public $type_article_id;
    public $imageUrl;
    public $type_nom;
    public $article_nombre;
    public $article_name;

    protected $rules=[
        "nom"=>"required|min:3|string|unique:articles",
        "prix"=>"required|integer|min:500",
        "imageUrl"=>"required|image|max:1024",
        "type_nom"=>"required|string|min:3",
    ];

    // public function updatedimageUrl()
    // {
    //     $this->validate([
    //         'imageUrl' => 'image|max:1024',
    //     ]);
    // }

    public function updated($propertedName){
        return $this->validateOnly($propertedName);
    }

    public function render()
    {
        if (empty($this->type_article_id)) {
            $this->type_article_id=1;
        }
        $this->article_nombre=Article::count();
        $this->article_name=$this->article_nombre + 1;
        return view('livewire.articles',[
            'articles'=>Article::all(),
            'typeArticles'=>TypeArticle::all(),
        ]);
    }

    public function goToAdd(){
        $this->dispatchBrowserEvent('showModalArticle');
    }
    public function ajouter(){
        Article::create([
            "nom"=>$this->nom,
            "prix"=>$this->prix,
            "imageUrl"=>$this->imageUrl->store('public/articles'),
            "type_article_id"=>$this->type_article_id,
        ]);
        $this->dispatchBrowserEvent('hideModalArticle');
    }
    public function goToTypeArticle(){
        $this->dispatchBrowserEvent('showModalTArticle');
    }
    public function createTypeArticle(){
        // $this->validate();
        TypeArticle::create([
            'type_nom'=>$this->type_nom,
        ]);
        $this->reset('type_nom');
        $this->dispatchBrowserEvent('hideModalTArticle');
    }
}
