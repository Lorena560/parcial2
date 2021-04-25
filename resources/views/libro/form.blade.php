<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $libro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tamanio') }}
            {{ Form::text('tamanio', $libro->tamanio, ['class' => 'form-control' . ($errors->has('tamanio') ? ' is-invalid' : ''), 'placeholder' => 'Tamanio']) }}
            {!! $errors->first('tamanio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_pag') }}
            {{ Form::text('cant_pag', $libro->cant_pag, ['class' => 'form-control' . ($errors->has('cant_pag') ? ' is-invalid' : ''), 'placeholder' => 'Cant Pag']) }}
            {!! $errors->first('cant_pag', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pecio') }}
            {{ Form::text('pecio', $libro->pecio, ['class' => 'form-control' . ($errors->has('pecio') ? ' is-invalid' : ''), 'placeholder' => 'Pecio']) }}
            {!! $errors->first('pecio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_public') }}
            {{ Form::text('fecha_public', $libro->fecha_public, ['class' => 'form-control' . ($errors->has('fecha_public') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Public']) }}
            {!! $errors->first('fecha_public', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>