<?php

namespace App\Http\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class Delete extends Component
{
    public $customerId;
    public function getCustomerProperty(){
        return Customer::select ('id','name', 'address', 'model')
        ->find($this->customerId);
    }

    public function delete(){
        $this->customer->delete();
        return redirect('/index')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/index');
    }

    public function render()
    {
        return view('livewire.customers.delete');
    }
}
