<?php

namespace App\Http\Livewire;

use App\Models\Amplifier;
use App\Models\Manufacturer;
use Livewire\Component;
use Livewire\WithPagination;

class AmplifiersIndex extends Component
{
    use WithPagination;

    public $manufacturer = 'All';
    public $search = '';

    protected $queryString = ['manufacturer', 'search'];

    protected $listeners = ['queryStringUpdatedManufacturer', 'queryStringUpdatedSearch'];

    public function queryStringUpdatedManufacturer($newManufacturer)
    {
        $this->manufacturer = $newManufacturer;
    }

    public function queryStringUpdatedSearch($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        $manufacturers = Manufacturer::all()->pluck('id', 'name');

        return view('livewire.amplifiers-index', [
            'amplifiers' => Amplifier::with('manufacturer')
                ->when($this->manufacturer !== 'All', function ($query) use ($manufacturers) {
                    return $query->where('manufacturer_id', $this->manufacturer);
                })->when(strlen($this->search) >= 2, function ($query) {
                    return $query->where('name', 'like', '%'.$this->search.'%');
                })->simplePaginate(Amplifier::PAGINATION_COUNT),
            'manufacturers' => Manufacturer::with('amplifiers')->has('amplifiers')->get()
        ]);
    }
}
