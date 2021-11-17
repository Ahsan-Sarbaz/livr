<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    private $errorMessages = [
        'email.required' => 'Email is required.',
        'email.email' => 'Email is not valid Email address.',
        'password.required' => 'Password is required.',
    ];

    public function updated($property)
    {
        $this->validateOnly($property, $this->rules, $this->errorMessages);
    }

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $fields= $this->validate($this->rules, $this->errorMessages);
        if(Auth::attempt($fields))
        {
            return redirect()->route('dashboard');
        }
        else
        {
            session()->flash('bad_login', 'Either you Email or Password is incorrect.');
        }
    }
}
