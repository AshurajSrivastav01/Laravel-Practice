<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageBanner extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public $message;
    public function __construct($class, $message)
    {
        $this->class = $class;
        $this->$message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
