<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $className = '',
        public string $inputLabel = 'null',
        public string $name
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-select');
    }
}
