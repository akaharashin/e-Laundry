<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerSearch extends Component
{
    public $searchTerm = '';
    public $results = [];

    public function render()
    {
        $this->results = Customer::where('nama', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('idCustomer', 'like', '%' . $this->searchTerm . '%')
            ->get();

        return view('livewire.customer-search');
    }

    public function updatedSearchTerm()
    {
        $this->results = Customer::where('nama', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('idCustomer', 'like', '%' . $this->searchTerm . '%')
            ->get();
    }
}
