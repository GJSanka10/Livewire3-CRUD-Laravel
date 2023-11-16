<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser()
{
    $validated = $this->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|max:12',
    ]);

    $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => bcrypt($this->password),
    ]);

    Auth::login($user);
    return redirect('/customers')->with('success', 'Registration successful!');
}

}
