@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Conductor</div>

                <div class="card-body">
                  @if (session('message'))
                      <div class="alert alert-warning">
                          {{ session('message') }}
                      </div>
                  @endif
                  <div role="main">
                    <div class="">
                      <form class="needs-validation" action="{{ route('conductor.store') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Documento</label>
                            <input type="text" class="form-control" name="documento" id="validationCustom01" placeholder="Documento" value="{{ old('documento') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="validationCustom02" placeholder="Nombres" value="{{ old('nombres') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="validationCustom02" placeholder="Apellidos" value="{{ old('apellidos') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Email</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                              </div>
                              <input type="text" class="form-control" name="email" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" value="{{ old('email') }}" required>
                              <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom03">direccion</label>
                            <input type="text" class="form-control" name="direccion" id="validationCustom03" placeholder="Direccion" value="{{ old('direccion') }}" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="validationCustom04" placeholder="Telefono" value="{{ old('telefono') }}" >
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Crear Conductor</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
