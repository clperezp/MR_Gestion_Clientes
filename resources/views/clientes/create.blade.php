@extends("layout")

@section("menu")
    <a href="{{route("clientes.index")}}">Volver a Listado General</a>
@endsection

@section("contenido")
    <form action="{{route("clientes.store")}}" method="POST">
    @csrf <!-- Importante para evitar ataques mediante inyección de comandos externos -->
        <h3>Datos de Cliente</h3>
        <fieldset>
            <label for="">Nombre</label><br>
            <input type="text" name="bd_nombre" id="bd_nombre"><br>
            <label for="">Apellido</label><br>
            <input type="text" name="bd_apellido" id="bd_apellido"><br>
            <label for="">Dirección</label><br>
            <input type="text" name="bd_direccion" id="bd_direccion"><br>
            <label for="">E-mail</label><br>
            <input type="text" name="bd_email" id="bd_email"><br>
            <label for="">Edad</label><br>
            <input type="text" name="bd_edad" id="bd_edad"><br>
        </fieldset>
        <br>
            <input type="submit" name="submit" id="" value="REGISTRAR"><br>
    </form>
@endsection
