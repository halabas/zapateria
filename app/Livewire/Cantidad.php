<?php

namespace App\Livewire;

use Livewire\Component;

class Cantidad extends Component
{
    public $carrito;


    public function incrementar(){
        $this->carrito->cantidad++;
        $this->carrito->save();
    }

    public function decrementar(){
        $this->carrito->cantidad--;
        $this->carrito->save();
    }
    public function render()
    {
        return view('livewire.cantidad');
    }
}
