Listado de Peliculas
<a href="{{ url('pet/create') }}">agregar</a>
<table>
    <thead>
        <th>#</th>
        <th>Titulo</th>
        <th>Director</th>
        <th>Año de lanzamiento</th>
        <th>Genero</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->Titulo }}</td>
                <td>{{ $pet->Director }}</td>
                
                <form action="{{ url('/pet/'.$pet->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}} <!--define el metodo que se necesita para eliminar -->
                    <td>
                        <a href="{{ route('pet.edit', $pet->id) }}">editar  </a>
                        <input type="submit" onclick="return confirm('Desea borrar el registro?')" 
                        value="Eliminar" />
                    </td>
                </form>
                
            </tr>
        @endforeach
    </tbody>
</table>