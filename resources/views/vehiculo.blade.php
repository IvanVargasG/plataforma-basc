@extends('head')
@section('contenido')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ $title }} {{ $vehiculo->placa }}
            </div>
        </div>
    </div>
@endsection
