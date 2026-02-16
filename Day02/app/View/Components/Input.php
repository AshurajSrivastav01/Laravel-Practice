<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $id = null,
        public $label = null,
        public $name = null,
        public $type = 'text',
        public $placeholder = null,
    )
    {
        $this->$id = $id;
        $this->$label = $label;
        $this->$name = $name;
        $this->$type = $type;
        $this->$placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
