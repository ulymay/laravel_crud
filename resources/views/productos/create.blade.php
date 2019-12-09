@extends('../layouts.plantilla')

@section('cabecera')

@section('contenido')

    <form action="/productos" method="post">
    
        <input type="text" name="NombreArticulo" id="">

        {{csrf_field()}}

        <input type="submit" value="Enviar" name="enviar">
    
    </form>

@section('pie')