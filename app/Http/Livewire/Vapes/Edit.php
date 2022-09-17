<?php

namespace App\Http\Livewire\Vapes;
use App\Models\Vape;
use Livewire\Component;

class Edit extends Component
{

    public $vapeId;
    public $brand_name, $version, $model, $price, $color;
    public function mount() {
        $this->brand_name = $this->vape->brand_name;
        $this->version = $this->vape->version;
        $this->model = $this->vape->model;
        $this->price = $this->vape->price;
        $this->color = $this->vape->color;

    }

    public function editVape() {
        $this->validate([
            'brand_name'             =>          ['required', 'string', 'max:255'],
            'version'            =>          ['required', 'string', 'max:255'],
            'model'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->vape->update([
            'brand_name'             =>      $this->brand_name,
            'version'            =>      $this->version,
            'model'            =>      $this->model,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        return redirect('/vape')->with('vape', 'Updated Successfully');
    }

    public function back() {
        return redirect('/vape');
    }
    public function getVapeProperty() {
        return Vape::find($this->vapeId);
    }

    public function render()
    {
        return view('livewire.vapes.edit');
    }
}
