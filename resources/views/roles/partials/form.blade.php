<div class="form-group">
  {{ Form::label('name',  'Nombre del Rol') }}
  {{ Form::text('name', null, ['class' => 'form-control','required' ]) }}
</div>

<div class="form-group">
  {{ Form::label('slug',  'URL Amigable') }}
  {{ Form::text('slug', null, ['class' => 'form-control', 'required' ]) }}
</div>

<div class="form-group">
  {{ Form::label('description',  'Descripción') }}
  {{ Form::textarea('description', null, ['class' => 'form-control' ]) }}
</div>

<h3>Permiso Especial</h3>
<div class="form-group">
  <label> {{ Form::radio('special', 'all-access') }} Acesso Total </label>
  <label> {{ Form::radio('special', 'no-access') }} Ningún acceso </label>
</div>

<h3>Lista de permisos</h3>
<ul class="list-unstyled">
  @foreach($permissions as $permission)
    <li>
      <label>
        {{ Form::checkbox('permissions[]', $permission->id, null) }}
        {{ $permission->name }}
        <em> {{ $permission->description }}</em>
      </label>
    </li>
  @endforeach
</ul>

<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary' ]) }}
</div>
