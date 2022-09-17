<?php

namespace App\Http\Livewire\Vapes;

use Livewire\Component;
use App\Models\Vape;

class Create extends Component
{
    public $brand_name, $version, $price, $color, $model;

    public function addVape() {
        $this->validate([
            'brand_name'             =>          ['required', 'string', 'max:255'],
            'version'            =>          ['required', 'string', 'max:255'],
            'model'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        Vape::create([
            'brand_name'             =>      $this->brand_name,
            'version'            =>      $this->version,
            'model'            =>      $this->model,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        return redirect('/vape')->with('vape', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.vapes.create');
    }
}
