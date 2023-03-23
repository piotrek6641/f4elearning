<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $category;
    public $categories;
    public $currentNumber;
    public function render()
    {
        return view('livewire.categories');
    }
    public function mount()
    {
        $this->categories= Category::all();
        $this->currentNumber = 0;
        $this->category= $this->categories[$this->currentNumber];
    }
    public function next()
    {
        if($this->currentNumber >= count($this->categories)-1)
        {
            $this->currentNumber=0;
            $this->category= $this->categories[$this->currentNumber];
        }
        else
        {
            $this->currentNumber += 1;
            $this->category= $this->categories[$this->currentNumber];
        }
    }
    public function previous()
    {
        if($this->currentNumber == 0)
        {
            $this->currentNumber= count($this->categories)-1;
            $this->category= $this->categories[$this->currentNumber];
        }
        else
        {
            $this->currentNumber -= 1;
            $this->category= $this->categories[$this->currentNumber];
        }
    }

}
