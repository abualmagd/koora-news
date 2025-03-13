<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeoMeta extends Component
{
  

    public $title;
    public $description;
    public $keywords;
    public $image;
    public $url;

    public function __construct($title, $description, $keywords = '', $image = '', $url = '')
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->image = $image;
        $this->url = $url;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seo-meta');
    }
}
