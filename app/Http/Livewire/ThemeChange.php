<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ThemeChange extends Component
{
    public $message = "change theme";
    public $user;
    public function render()
    {
        return view('livewire.theme-change');
    }
    public function change()
    {
        if($this->user->theme =="night")
        {
            $this->user->update(['theme'=>"light"]);
        }
        else
        {
            $this->user->update(['theme'=>"night"]);
        }
    $this->message = "refresh page";
    }
    public function mount()
    {
        $this->user = Auth::user();
    }

}
