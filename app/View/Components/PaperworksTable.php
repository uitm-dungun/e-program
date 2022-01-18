<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PaperworksTable extends Component
{
    public $paperworks;
    public $paperworksMode;

    public function __construct($paperworks, $paperworksMode)
    {
        $this->paperworks = $paperworks;
        $this->paperworksMode = $paperworksMode;
    }

    public function render()
    {
        return view('components.paperworks-table');
    }
}
