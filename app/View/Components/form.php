<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string | null $className = null,
        public string $inputLable = 'input lable null',
        public string $inputType = 'text',
        public string $inputPlaceHolder = 'placeholder null',
        public string | null $inputValue = null,
        public string $name = 'null'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
