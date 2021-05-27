<?php

namespace App\Http\Livewire;

use App\Models\Amplifier;
use Livewire\Component;

class AmplifierIndex extends Component
{

    public $amp;

    public function mount(Amplifier $amp)
    {
        $this->amp = $amp;
    }

    public function render()
    {
        return view('livewire.amplifier-index');
    }
}
