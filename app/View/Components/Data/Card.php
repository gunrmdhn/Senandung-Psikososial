<?php

namespace App\View\Components\Data;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $button;
    public function __construct($title = null, $button = null)
    {
        $this->title = $title;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.data.card');
    }
}
