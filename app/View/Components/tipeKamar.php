<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tipeKamar extends Component
{
    /**
     * Create a new component instance.
     */

    public $url, $tipe, $desc;
    public function __construct($url, $tipe, $desc)
    {
        $this->url = $url;
        $this->tipe = $tipe;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tipeKamar.cardKamar');
    }
}
