<?php

namespace App\View\Components\Pagina;

use Illuminate\View\Component;

class Botones extends Component
{
    public $todoxxxx;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($todoxxxx)
    {
        $this->todoxxxx = $todoxxxx;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pagina.botones');
    }
}
