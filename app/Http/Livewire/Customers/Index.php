<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Index extends Component
{
    public function loadCustomers(){
        $customers = Customer::orderBy('name')->get();

        return compact('customers');
    }
    public function render()
    {
        return view('livewire.customers.index', $this->loadCustomers());
    }
}
