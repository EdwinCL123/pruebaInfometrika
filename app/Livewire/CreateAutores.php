<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Autores;

class CreateAutores extends Component
{

    public $nombre_autor;
    public $pais_autor;
    public $fallecimiento_autor;


    public function render()
    {
        return view('livewire.create-autores');
    }

    public function submit()
    {

        $autor = Autores::create([
            'nombre' => $this->nombre_autor,
            'pais_origen' => $this->pais_autor,
            'fecha_fallecimiento' => $this->fallecimiento_autor,
        ]);
        
        session()->flash('message', 'Autor creado.');
        
        $this->dispatch('refreshProducts');


        // return view('livewire.modal-prestamos');
    }
}
