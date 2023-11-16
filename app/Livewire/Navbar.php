<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect('/login',navigate:true);
    }
}
