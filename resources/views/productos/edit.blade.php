@extends('../layouts.plantilla')

@section('cabecera')

EDITAR REGISTROS

@endsection

@section('contenido')

    <form action="/productos/{{$producto->id}}" method="post">
    
    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="NombreArticulo" id="" value="{{$producto->NombreArticulo}}">

                {{csrf_field()}}

                <input type="hidden" name="_method" value="PUT">
            </td>
        </tr>

        <tr>
            <td>Seccion: </td>
            <td>
            <input type="text" name="Seccion" id="" value="{{$producto->Seccion}}">
            </td>
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
            <input type="text" name="Precio" id="" value="{{$producto->Precio}}">
            </td>
        </tr>

        <tr>
            <td>Fecha: </td>
            <td>
            <input type="text" name="Fecha" id="" value="{{$producto->Fecha}}">
            </td>
        </tr>

        <tr>
            <td>Pais de Origen: </td>
            <td>
            <input type="text" name="PaisOrigen" id="" value="{{$producto->PaisOrigen}}">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Actualizar" name="enviar">
            </td>
            <td>
                <input type="reset" value="Borrar campos" name="Borrar">
            </td>
        </tr>
    </table>
    
    </form>

    <form action="/productos/{{$producto->id}}" method="post">

    {{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="Eliminar registro">

    </form>


@endsection

@section('pie')

@endsection