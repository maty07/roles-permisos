@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Editar roleo
            <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm float-right">Atras</a>
          </div>
          <div class="card-body">
            {!! Form::model($role, ['route' => ['roles.update', $role->id  ],
              'method' => 'PUT' ]) !!}

              @include('roles.partials.form')

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection()
