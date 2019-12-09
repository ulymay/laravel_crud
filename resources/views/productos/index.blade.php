@extends('../layouts.plantilla')

@section('cabecera')

LEER REGISTROS

@endsection

@section('contenido')

<table border='1'>
<tr>
    <td>Nombre Articulo</td>
    <td>Seccion</td>
    <td>Precio</td>
    <td>Fecha</td>
    <td>Pais de Origen</td>
</tr>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->NombreArticulo}}</td>
            <td>{{$producto->Seccion}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Fecha}}</td>
            <td>{{$producto->PaisOrigen}}</td>
        </tr>

    @endforeach
</table>
@endsection

@section('pie')

@endsection