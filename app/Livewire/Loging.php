<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;

class Loging extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.loging');
    }
    public function loginUser(Request $request){
        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($validated)){
            // Authentication passed...
            $request->session()->regenerate();
            return $this->redirect('/customers',navigate:true);
        }

        $this->addError('email','The password Provided dose not match the email');
    

    }
}
