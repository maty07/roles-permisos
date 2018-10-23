@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                  <table class="table table-striped mb-3">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Name</th>
                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                            @can('users.show')
                              <a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}">
                                Ver
                              </a>
                            @endcan()
                          </td>
                          <td>
                            @can('users.edit')
                              <a class="btn btn-warning btn-sm" href="{{ route('users.edit', $user->id) }}">
                                Editar
                              </a>
                            @endcan()
                          </td>
                          <td>
                            @can('users.destroy')
                              {!! Form::open(['route' => ['users.destroy', $user->id],
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
                  {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
