<?php

namespace App\View\Components\Pagina;

use Illuminate\View\Component;

class Alink extends Component
{
    public $hrefxxxx;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($hrefxxxx)
    {
        $this->hrefxxxx = $hrefxxxx==''?'#':route($hrefxxxx);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pagina.alink');
    }
}
