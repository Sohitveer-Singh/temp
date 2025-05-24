<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateUserInfo extends Component
{
    public $user;
    public function redirectToEditPage()
    {
        return redirect()->route('user.edit');
    }
    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('profile.update-user-info', [
            'user' => $this->user
        ]);
    }
}
