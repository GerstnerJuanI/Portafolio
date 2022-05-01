<div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" wire:model="nombre">
        <small>{{$nombre}}</small>
    </div>
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <input type="text" name="mensaje" id="mensaje" class="form-control" wire:model="mensaje">
        <small>{{$mensaje}}</small>
    </div>
    <button class="btn btn-primary" wire:click="enviarMensaje">Enviar</button>

    <!-- Mensajes de alerta -->
    <div style="position: absolute;" class="alert alert-success collapse mt-2" role="alert" id="avisoSuccess">
        Enviado
    </div>
    
<script>
    // Recibimos el aviso de envio con JS cuando lo emite el componente
    //evento "mensajeEnviado"
    window.livewire.on('mensajeEnviado',function () {
        //Mostramos el aviso
        $("#avisoSuccess").fadeIn("slow");
        //Ocultamos el aviso a los 3 seg.
        setTimeout(function(){$("#avisoSuccess").fadeOut("slow");}, 2000);
    });
</script>

</div>
