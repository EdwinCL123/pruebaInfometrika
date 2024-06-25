<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Prestamos;
use App\Models\Usuarios;
use App\Models\Libros;

class ModalPrestamos extends Component
{

    public $id_usuario;
    public $id_libro;
    public $fecha_prestamo;
    public $fecha_devolucion;
    public $usuarios;
    public $libros;

    public function load()
    {
        $this->usuarios = Usuarios::all();
        $this->libros = Libros::all();

    }

    public function render()
    {
        $this->usuarios = Usuarios::all();
        $this->libros = Libros::all();
        
        return view('livewire.modal-prestamos');
    }


    public function submit()
    {
        $article = Prestamos::create([
            'id_usuario' => $this->id_usuario,
            'id_libro' => $this->id_libro,
            'fecha_prestamo' => $this->fecha_prestamo,
            'fecha_devolucion' => $this->fecha_devolucion,
        ]);
        
        session()->flash('message', 'Libro Prestado.');
        $this->dispatch('refreshProducts');


        // return view('livewire.modal-prestamos');
    }


}
