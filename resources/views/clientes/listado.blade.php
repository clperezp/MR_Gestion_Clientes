@extends ("layout")

@section("menu")
    <a href="{{route("clientes.create")}}">Nuevo Cliente</a>
@endsection

@section("contenido")
    <h1>Listado de Clientes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>E-mail</th>
            <th>Edad</th>
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->bd_nombre}}</td>
                <td>{{$cliente->bd_apellido}}</td>
                <td>{{$cliente->bd_direccion}}</td>
                <td>{{$cliente->bd_email}}</td>
                <td>{{$cliente->bd_edad}}</td>
                <td>
                    <a href="{{route("clientes.show", $cliente->id)}}">Mostrar</a>
                </td>
                <td>
                    <a href="{{route("clientes.edit", $cliente->id)}}">Editar</a>
                </td>
                <td>
                    <form action="{{route("clientes.destroy", $cliente->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" name="submit" value="BORRAR" >
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

