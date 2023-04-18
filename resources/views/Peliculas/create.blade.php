Nuevo Registro de Pelicula

<form action="{{ url('/pelis') }}" method="POST">
    
    @csrf
    @include('pelis.form')
</form>
