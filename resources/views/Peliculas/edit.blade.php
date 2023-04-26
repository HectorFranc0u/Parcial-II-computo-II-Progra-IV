Editar Registro de Peliculas

<form action="{{ url('/peliculas/'. $peli->id) }}" method="POST">
    
    @csrf
    {{ method_field('PUT') }}
    @include('peliculas.show')
</form>