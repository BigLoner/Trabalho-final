<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number = 60;
    public $result = 0;
    public function render()
    {
        return view('livewire.calculator');
    }
    public function add()
    {
        $this->result += $this->number;
        $this->number = 0;
    }
}
