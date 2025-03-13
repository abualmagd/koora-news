<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyHeader extends Component
{
    public $title;

    public $logo;

    public $logoAlt;

    public function __construct($title,$logo,$logoAlt)
    {
         $this->title= $title??'title';
         $this->logo= $logo??'';
         $this->logoAlt=$logoAlt??'image alt';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-header');
    }
}
