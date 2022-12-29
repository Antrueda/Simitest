<?php

namespace App\View\Components\Pagina;

use Illuminate\View\Component;

class MenuIzquierdo extends Component
{
    public $menuxxxx = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    

  
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pagina.menu-izquierdo');
    }
}
