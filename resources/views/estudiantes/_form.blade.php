<div class="row">

    <div class="form-group col-md-6">
        <label for="name">Nombre</label>
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        <label for="email">E-Mail</label>
        {{ Form::email('email', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        <label for="phone">Teléfono/Celular</label>
        {{ Form::email('phone', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        <label for="phone_2">Teléfono/Celular</label>
        {{ Form::email('phone_2', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        <label for="phone_2">Grado</label>
        {!! Form::select('grade_id', $grades, null, ['class' => 'form-control select2-js']) !!}
    </div>

    <div class="form-group col-md-12">
        <label for="address">Dirección</label>
        {{ Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3]) }}
    </div>

</div>
