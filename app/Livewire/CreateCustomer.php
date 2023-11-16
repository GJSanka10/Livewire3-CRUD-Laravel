<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;


class CreateCustomer extends Component
{
    public $name='';
    public $email='';
    public $phone='';
    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save(){
        $validated=$this->validate([
            'name'=>'required | max:100',
            'email'=>'required|email|unique:customers|max:250',
            'phone'=>'required|unique:customers|min:10|max:10' 
        ]);
        Customer::create($validated);
        Session()->flash('success','Customer Added Successful');
        return $this->redirect('/customers',navigate:true);
       
    }
}
