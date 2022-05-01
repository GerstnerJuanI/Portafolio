<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    //variables
    public $nombre;
    public $mensaje;

    //metodos
    public function mount() // se recarga una sola vez cuando se refresca la pagina.
    {
        $this->nombre = ""; 
        $this->mensaje = "";
    }
    public function render() // es el "lector de eventos, se refresca cada vez que detecta un cambio en la vista.
    {
        return view('livewire.chat-form');
    }
    public function enviarMensaje()
    {
        $this->emit("mensajeEnviado");
        $this->emit("mensajeRecibido", $this->mensaje);
    }
}
