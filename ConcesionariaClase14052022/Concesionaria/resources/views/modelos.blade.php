@extends('layout.main')

@section('title','Modelos')

@section('content')
<h1>Nuestros modelos 2022</h1>


@for ($i = 0; $i < 10; $i++)
    El valor actual es: {{ $i }}<br>
@endfor

<ul>
@foreach ($autos as $auto)
    <li> Modelo: <b>{{ $auto }}</b></li>
@endforeach
</ul>

<hr>

<ol>
@forelse($autos as $clave => $valor )
    <li><b> {{$clave}} </b></li>
    <ul>
        <li>{{$valor}}</li>
    </ul>
@empty
    <p>No Existen autos disponibles</p>
@endforelse
</ol>



<hr>
@if (count($autos) === 1)
    Existe un registro
@elseif (count($autos) > 1)
Existen múltiples registros!
@else
    No existen registros!
@endif

@endsection
