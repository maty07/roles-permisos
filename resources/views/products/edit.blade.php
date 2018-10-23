@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Editar producto
            <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm float-right">Atras</a>
          </div>
          <div class="card-body">
            {!! Form::model($product, ['route' => ['products.update', $product->id  ],
              'method' => 'PUT' ]) !!}

              @include('products.partials.form')

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection()
