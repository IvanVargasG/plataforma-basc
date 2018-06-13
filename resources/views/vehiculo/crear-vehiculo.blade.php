@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Vehiculo</div>

                <div class="card-body">
                  @if (session('message'))
                      <div class="alert alert-warning">
                          {{ session('message') }}
                      </div>
                  @endif
                  <div role="main">
                    <div class="">
                      <form class="needs-validation" action="{{ route('vehiculo.store') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Placa(s)</label>
                            <input type="text" class="form-control" name="placa" id="validationCustom01" placeholder="Placa" value="{{ old('placa') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Kilometraje</label>
                            <input type="text" class="form-control" name="kilometraje" id="validationCustom02" placeholder="Kilometraje" value="{{ old('kilometraje') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Crear Vehiculo</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
