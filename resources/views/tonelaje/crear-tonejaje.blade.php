@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Tonelaje</div>

                <div class="card-body">
                  @if (session('message'))
                      <div class="alert alert-warning">
                          {{ session('message') }}
                      </div>
                  @endif
                  <div role="main">
                    <div class="">
                      <form class="needs-validation" action="{{ route('tonelaje.store') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Tonelaje(s)</label>
                            <input type="text" class="form-control" name="tonelaje" id="validationCustom01" placeholder="Tonelaje" value="{{ old('tonelaje') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Proveedor</label>
                            <select name="id_proveedor" id="validationCustom02" placeholder="Proveedor" class="form-control">
                                <option value="">-- Escoja el proveedor --</option>
                                @foreach ($proveedores as $proveedor)
                                <option value="{{ $proveedor->codigo }}"> {{ $proveedor->nombre }}</option>
                                @endforeach
                            </select>
                              Looks good!
                            </div>
                          </div>
                        </div>
<<<<<<< HEAD
                        <button class="btn btn-primary" type="submit">Crear Tonelaje</button>
=======
                        <button class="btn btn-primary" type="submit">Crear Vehiculo</button>
>>>>>>> fadd4964ae31d235921c3578cc41362bc7e07c99
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
