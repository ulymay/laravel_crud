@extends('../layouts.plantilla')

@section('cabecera')

INSERTAR REGISTROS

@endsection

@section('contenido')

    <form action="/productos" method="post">
    
    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="NombreArticulo" id="">

                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Seccion: </td>
            <td>
            <input type="text" name="Seccion" id="">
            </td>
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
            <input type="text" name="Precio" id="">
            </td>
        </tr>

        <tr>
            <td>Fecha: </td>
            <td>
            <input type="text" name="Fecha" id="">
            </td>
        </tr>

        <tr>
            <td>Pais de Origen: </td>
            <td>
            <input type="text" name="PaisOrigen" id="">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Enviar" name="enviar">
            </td>
            <td>
                <input type="reset" value="Borrar" name="Borrar">
            </td>
        </tr>
    </table>
        

        
    
    </form>

@endsection

@section('pie')

@endsection