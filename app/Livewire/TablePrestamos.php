<?php

namespace App\Livewire;

use App\Models\Prestamos;
use Livewire\Component;

class TablePrestamos extends Component
{

    public $prestamos;
    protected $listeners = ['refreshProducts' => '$refresh'];


    public function render()
    {

        $this->prestamos = Prestamos::all();
        
        return view('livewire.table-prestamos');
    }
}
