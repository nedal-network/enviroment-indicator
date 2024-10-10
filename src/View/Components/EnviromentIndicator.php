<?php

namespace NedalNetwork\EnviromentIndicator\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class EnviromentIndicator extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(env('APP_DEBUG') || !App::isProduction()) {
        return <<<'blade'
        <div style="
            position: fixed;
            top: 5px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            font-family: Verdana;
            font-weight: bold;">
            <div style="background: #ff9d1e; color: #000000; font-size: 12px; border-radius: 10px; padding-inline: 10px;">Developer</div>
        </div>
        blade;
        }
        return '';
    }
}
