<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Usuarios;

class CreateUsers extends Component
{

    public $nombre_user;
    public $email_user;
    public $apellido_user;

    public function render()
    {
        return view('livewire.create-users');
    }

    public function submit()
    {

        $user = Usuarios::create([
            'nombre_usuario' => $this->nombre_user,
            'correo_electronico' => $this->email_user,
            'nombre' => $this->nombre_user,
            'apellido' => $this->apellido_user,
        ]);
        
        session()->flash('message', 'Usuario creado.');
        
        $this->dispatch('refreshProducts');


        // return view('livewire.modal-prestamos');
    }
}
