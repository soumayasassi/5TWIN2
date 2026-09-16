<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCard extends Component
{
    /**
     * Create a new component instance.
     */
   public $titre ;
   public $contenu ;
   public $auteur ;
    public function __construct($titre , $contenu , $auteur)
    {
        $this->titre  = $titre;
        $this->contenu = $contenu;
        $this->auteur  = $auteur;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-card');
    }
}
