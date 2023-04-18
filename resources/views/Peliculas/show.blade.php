Nuevo Registro de Pelicula

<form action="{{ url('/peli') }}" method="POST">
    
    @csrf
    @include('peli.show')
</form>