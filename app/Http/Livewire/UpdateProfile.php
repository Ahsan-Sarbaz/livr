<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateProfile extends Component
{
    public User $user;

    protected $rules = [
        'user.first_name' => '',
        'user.last_name' => '',
    ];

    private $errorMessages = [
        'user.first_name.required' => 'First Name is required.',
        'user.last_name.required' => 'Last Name is required.',
        'user.email.required' => 'Email is required.',
        'user.email.email' => 'Email is not valid Email address.',
        'user.email.unique' => 'Email is already taken by another user.',
        'user.password.required' => 'Password is required.',
        'user.password.confirmed' => 'Passwords do not match.',
    ];


    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.update-profile');
    }

    public function updated($property)
    {
        $this->validateOnly($property, $this->rules, $this->errorMessages);
    }

    public function update()
    {
        $this->validate($this->rules, $this->errorMessages);
        if($this->user->save())
        {
            session()->flash('updated', 'Your profile is updated successfully');
        }else{
            session()->flash('error', 'There was a problem saving your profile');
        }


    }
}
