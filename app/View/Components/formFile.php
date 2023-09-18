<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formFile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string | null $className = null,
        public string $label = 'null',
        public string | null $id = null,
        public string $name = 'undefinden'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-file');
    }
}
