@extends ("layout")

@section("menu")
    <a href="{{route("clientes.index")}}">Volver a Listado General</a>
@endsection

@section("contenido")
    <form action="{{route("clientes.update", $cliente->id)}}" method="POST">
    @csrf <!-- Importante para evitar ataques mediante inyección de comandos externos -->
        @method("PUT")
        <h3>Datos de Cliente</h3>
        <fieldset>
            <label for="">Nombre</label><br>
            <input type="text" name="bd_nombre" id="bd_nombre" value="{{$cliente->bd_nombre}}"><br>
            <label for="">Apellido</label><br>
            <input type="text" name="bd_apellido" id="bd_apellido" value="{{$cliente->bd_apellido}}"><br>
            <label for="">Dirección</label><br>
            <input type="text" name="bd_direccion" id="bd_direccion" value="{{$cliente->bd_direccion}}"><br>
            <label for="">E-mail</label><br>
            <input type="text" name="bd_email" id="bd_email" value="{{$cliente->bd_email}}"><br>
            <label for="">Edad</label><br>
            <input type="text" name="bd_edad" id="bd_edad" value="{{$cliente->bd_edad}}"><br>
        </fieldset>
        <br>
        <input type="submit" name="submit" id="" value="REGISTRAR"><br>
    </form>
@endsection


