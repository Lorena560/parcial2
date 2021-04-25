@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}">{{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tamaño:</strong>
                            {{ $libro->tamanio }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Paginas:</strong>
                            {{ $libro->cant_pag }}
                        </div>
                        <div class="form-group">
                            <strong>Pecio:</strong>
                            {{ $libro->pecio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $libro->fecha_public }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
