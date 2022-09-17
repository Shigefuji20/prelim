<?php

namespace App\Http\Livewire\Vapes;

use Livewire\Component;
use App\Models\Vape;
class Delete extends Component
{

    public $vapeId;
    public function getVapeProperty() {
        return Vape::select('id', 'brand_name', 'version', 'model', 'price', 'color')
            ->find($this->vapeId);
    }

    public function delete() {
        $this->vape->delete();

        return redirect('/vape')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/vape');
    }
    public function render()
    {
        return view('livewire.vapes.delete');
    }
}
