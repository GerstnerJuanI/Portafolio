<div>
    <h5 class="mt-3"><strong>Lista de mensajes</strong></h5>
    @foreach ($mensajes as $mensaje)
        <li>{{$mensaje}}</li>
    @endforeach
</div>
