@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos
                  @can('products.create')
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">
                      Crear
                    </a>
                  @endcan
                </div>

                <div class="card-body">
                  <table class="table table-striped mb-3">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                        <tr>
                          <td>{{ $product->name }}</td>
                          <td>
                            @can('products.show')
                              <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">
                                Ver
                              </a>
                            @endcan()
                          </td>
                          <td>
                            @can('products.edit')
                              <a class="btn btn-warning btn-sm" href="{{ route('products.edit', $product->id) }}">
                                Editar
                              </a>
                            @endcan()
                          </td>
                          <td>
                            @can('products.destroy')
                              {!! Form::open(['route' => ['products.destroy', $product->id],
                                'method' => 'DELETE']) !!}
                                  <button class="btn btn-sm btn-danger">
                                    Eliminar
                                  </button>
                              {!! Form::close() !!}
                            @endcan()
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
