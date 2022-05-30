@extends('layout.main')
@section('title','inicio')
@section('content')
<h1>Personal</h1>
<hr>
<link rel="stylesheet" href="{{ URL::asset('css/personal.css') }}" />
@foreach ($personal as $persona)
<main class="row">
    <section class="row u-align-center u-black u-clearfix u-section-1  justify-content-center" id="carousel_990d">
        <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <div class=" row u-align-left u-container-style u-gradient u-list-item u-repeater-item u-shape-round u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div class="u-align-center u-container-style u-group u-opacity u-opacity-65 u-palette-5-dark-1 u-radius-50 u-shape-round u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                    <img class="img-thumbnail"  src="{{$persona['imagen']}}" alt=""  width="100" height="100">
                </div>
                </div>
                <h5 class="u-text u-text-body-alt-color u-text-2">{{$persona['programador']}}</h5>
                <table>
                    <tr>
                        <th>Lenguajes: </th>
                        @foreach ($persona['lenguajes'] as $lenguaje )
                        <td class="u-text u-text-grey-30 u-text-3">{{$lenguaje}}, </td>
                        @endforeach
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Areas de interés: </th>
                        @foreach ($persona['areas de interes'] as $areasInteres)
                        <td class="u-text u-text-grey-30 u-text-4">{{$areasInteres}}, </td>
                        @endforeach
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Bio: </th>
                        <td> {{$persona['bio']}}</td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
        </div>
    </section>
@endforeach
</main>
@endsection()
