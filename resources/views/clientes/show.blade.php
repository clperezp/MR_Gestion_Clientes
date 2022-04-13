@extends ("layout")

@section("menu")
    <a href="{{route("clientes.index")}}">Volver a Listado General</a>
@endsection

@section("contenido")
    <h1>Listado del Cliente -> {{$cliente->bd_nombre}} {{$cliente->bd_apellido}} </h1>
    <table>
        <tr>
            <td style="font-weight: bold">Nombre</td>
            <td>{{$cliente->bd_nombre}}</td>
        </tr>
        <tr>
            <td style="font-weight: bold">Apellido</td>
            <td>{{$cliente->bd_apellido}}</td>
        </tr>
        <tr>
            <td style="font-weight: bold">Dirección</td>
            <td>{{$cliente->bd_direccion}}</td>
        </tr>
        <tr>
            <td style="font-weight: bold">E-mail</td>
            <td>{{$cliente->bd_email}}</td>
        </tr>
        <tr>
            <td style="font-weight: bold">Edad</td>
            <td>{{$cliente->bd_edad}}</td>
        </tr>
    </table>
@endsection


