<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Recent extends Component
{
    public $articles;

    public function __construct(array $articles)
    {
        $this->articles=$articles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent');
    }
}
