@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Roles
                  @can('roles.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">
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
                      @foreach($roles as $role)
                        <tr>
                          <td>{{ $role->name }}</td>
                          <td width="10px">
                            @can('roles.show')
                              <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">
                                Ver
                              </a>
                            @endcan()
                          </td>
                          <td width="10px">
                            @can('roles.edit')
                              <a class="btn btn-warning btn-sm" href="{{ route('roles.edit', $role->id) }}">
                                Editar
                              </a>
                            @endcan()
                          </td>
                          <td width="10px">
                            @can('roles.destroy')
                              {!! Form::open(['route' => ['roles.destroy', $role->id],
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
                  {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
