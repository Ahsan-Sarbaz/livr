<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $password_confirmation;
    public $agreeTerms;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'agreeTerms' => 'accepted'
    ];

    private $errorMessages = [
        'first_name.required' => 'First Name is required.',
        'last_name.required' => 'Last Name is required.',
        'email.required' => 'Email is required.',
        'email.email' => 'Email is not valid Email address.',
        'email.unique' => 'Email is already taken by another user.',
        'password.required' => 'Password is required.',
        'password.confirmed' => 'Passwords do not match.',
        'agreeTerms.accepted' => 'You must agree to our terms, conditions and privacy policy.'
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function updated($property)
    {
        $this->validateOnly($property, $this->rules, $this->errorMessages);
    }

    public function register()
    {
        User::create($this->validate($this->rules, $this->errorMessages));
    }
}
