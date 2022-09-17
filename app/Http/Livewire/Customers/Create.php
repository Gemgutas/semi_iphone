<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Create extends Component
{
    public $name, $address,$email, $contact_number, $model, $gigabyte, $price;
    public function addCustomer(){
        $this->validate([
            'name'              =>     ['required', 'string', 'max:255'],
            'address'           =>     ['required', 'string', 'max:255'],
            'contact_number'    =>     ['required', 'string', 'max:255'],
            'model'             =>     ['required', 'string', 'max:255'],
            'gigabyte'          =>     ['required', 'string', 'max:255'],
            'price'             =>     ['required', 'numeric','min:8', 'max:100000'],
            'email'             =>     ['required', 'email','unique:customers']


        ]);

        Customer::create([
            'name'              =>      $this->name,
            'address'           =>      $this->address,
            'contact_number'    =>      $this->contact_number,
            'model'             =>      $this->model,
            'gigabyte'          =>      $this->gigabyte,
            'price'             =>      $this->price,
            'email'             =>      $this->email

        ]);
        return redirect('/index')->with('message', 'Added Successfully');
    }

    public function updated($propertyEmail)
    {
        $this->validateOnly($propertyEmail, [
            'email'             =>      ['required', 'email', 'unique:customers']
         ]);
    }
    public function render()
    {
        return view('livewire.customers.create');
    }
}
