<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Likes extends Component
{
    public $likeable;
    public $user;
    public $count;
    public function render()
    {
        return view('livewire.likes',$this->likeable);
    }
    public function like()
    {
        $this->user->like($this->likeable);
        $this->count +=1;
    }
    public function unlike()
    {
        $this->user->unlike($this->likeable);
        $this->count -=1;
    }
    public function mount()
    {
        $this->user = Auth::user();
        $this->count = count($this->likeable->likes);
    }
}
