@extends('layout')
@section('contenido')
<table class="table">
<thead>
    <tr>
    <th>solicitante</th>
    <th>descripcion</th>
    <th>costo</th>
    <th>cantidad</th>
    </tr>
</thead>
<tbody>
@foreach($soportes as $soporte)
    <tr>
    <td>{{$soporte->solicitante}}</td>
    <td>{{$soporte->descripcion}}</td>
    <td>{{$soporte->costo}}</td>
    <td>{{$soporte->cantidad}}</td>
    <td><a href="/soporte/edit/{{$soporte->id}}">editar</a></td>
    </tr>
@endforeach
</tbody>
</table>
@endsection