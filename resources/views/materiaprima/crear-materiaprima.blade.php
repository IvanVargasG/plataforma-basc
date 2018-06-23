@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Materia Prima</div>

                <div class="card-body">
                  @if (session('message'))
                      <div class="alert alert-warning">
                          {{ session('message') }}
                      </div>
                  @endif
                  <div role="main">
                    <div class="">
                      <form class="needs-validation" action="{{ route('materiaprima.store') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Materia Prima</label>
                            <input type="text" class="form-control" name="materiaprima" id="validationCustom01" placeholder="Materia prima" value="{{ old('materiaprima') }}" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>                          
                        </div>
                        <button class="btn btn-primary" type="submit">Crear Materia Prima</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
