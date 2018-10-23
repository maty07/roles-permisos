@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Editar usuario
            <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm float-right">Atras</a>
          </div>
          <div class="card-body">
            {!! Form::model($user, ['route' => ['users.update', $user->id  ],
              'method' => 'PUT' ]) !!}

              @include('users.partials.form')

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection()
