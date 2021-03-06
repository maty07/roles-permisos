@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Detalles del usuario
            <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm float-right">Atras</a>
          </div>
          <div class="card-body">
            <p> <strong>Nombre:</strong>  {{ $user->name }} </p>
            <p> <strong>Email:</strong>  {{ $user->email }} </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection()
