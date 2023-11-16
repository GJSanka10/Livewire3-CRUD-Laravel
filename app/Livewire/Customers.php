<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;

class Customers extends Component
{
    //public $customers=[];
    public $search='';

    use WithPagination;
    protected $paginationTheme='bootstrap';



    // public function mount(){
    //     $this->customers=Customer::all();
    // }
    public function render()
    {
        if(! $this->search){
            $customers=Customer::paginate(10);
        }else{
            $customers=Customer::where('name','like','%'.$this->search.'%')->paginate(10);
        }
        
        return view('livewire.customers',[
            'customers'=>$customers,
        ]);
    }

    public function deletecustomer(Customer $customer){
        $customer->delete();
        session()->flash('success','Customer Deleted Successful');
        return $this->redirect('/customers',navigate:true);
    }



}
