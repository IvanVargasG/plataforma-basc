@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver Proveedor</div>

                <div class="card-body">
                  @if (session('message'))
                      <div class="alert alert-success">
                          {{ session('message') }}
                      </div>

                  @endif
                  <div class="flex-center position-ref full-height">
                      <div class="content">
                          <div class="title m-b-md">
                              {{ $nombres }} {{ $apellidos }}
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
