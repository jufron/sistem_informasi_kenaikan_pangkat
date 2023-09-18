<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formFile2 extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $idInput,
        public string $idLabel,
        public string $name,
        public string | null $value = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-file2');
    }
}
