<div class="row">
    <div class="form-group col-md-12">
        <label>Nombre de Grado</label>
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-12">
        <label>Año de Trabajo</label>
        {{ Form::number('year', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-12">
        <label>Maestro/a Guía</label>
        {{ Form::select('teacher_id', $maestros, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-12">
        @if ($edit === true)
        <button type="submit" class="btn btn-primary">Editar</button>
        @else
        <button type="submit" class="btn btn-primary">Crear</button>
        @endif

    </div>

</div>
