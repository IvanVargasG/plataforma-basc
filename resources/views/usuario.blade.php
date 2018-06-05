@extends('head')
@section('contenido')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ $nombre }} {{ $apellido }}
            </div>
        </div>
    </div>
@endsection
