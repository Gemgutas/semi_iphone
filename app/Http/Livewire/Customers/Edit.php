<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Edit extends Component
{

    public $customerId;
    public $name, $address,$email, $contact_number, $model, $gigabyte, $price;

    public function mount(){
        $this->name = $this->customer->name;
        $this->address = $this->customer->address;
        $this->email = $this->customer->email;
        $this->contact_number = $this->customer->contact_number;
        $this->model = $this->customer->model;
        $this->gigabyte = $this->customer->gigabyte;
        $this->price = $this->customer->price;
    }

    public function editCustomer(){
        $this->validate([
            'name'              =>     ['required', 'string', 'max:255'],
            'address'           =>     ['required', 'string', 'max:255'],
            'contact_number'    =>     ['required', 'string', 'max:255'],
            'model'             =>     ['required', 'string', 'max:255'],
            'gigabyte'          =>     ['required', 'string', 'max:255'],
            'price'             =>     ['required', 'numeric','min:8', 'max:100000'],
            'email'             =>     ['required', 'email','unique:customers,email,'.$this->customer->id]


        ]);

        $this->customer->update([
            'name'               =>      $this->name,
            'address'            =>      $this->address,
            'contact_number'     =>      $this->contact_number,
            'model'              =>      $this->model,
            'gigabyte'           =>      $this->gigabyte,
            'price'              =>      $this->price,
            'email'              =>      $this->email,
        ]);

        return redirect('/index')->with('message', 'Updated Successfully');
    }

    public function getCustomerProperty(){
        return Customer::find($this->customerId);
    }
    public function render()
    {
        return view('livewire.customers.edit');
    }
}
