<?php

namespace App\Http\Livewire\Vapes;

use Livewire\Component;
use App\Models\Vape;

class Index extends Component
{

    public function loadVapes() {
        $vapes = Vape::orderBy('brand_name')->get();

        return compact('vapes');
    }

    public function render()
    {
        return view('livewire.vapes.index', $this->loadVapes());
    }
}
