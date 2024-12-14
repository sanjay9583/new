<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseModal extends Component
{
    public $ref, $backdrop;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ref, $backdrop)
    {
        $this->ref = $ref;
        $this->backdrop = $backdrop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.base-modal');
    }
}
