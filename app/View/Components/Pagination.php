<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $links;

    public $align;

    /**
     * Create a new component instance.
     */
    public function __construct($links, $align = 'end')
    {
        $this->links = $links;
        $this->align = $align;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pagination');
    }
}
