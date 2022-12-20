@extends('adminlte::page')

@section('template_title')
    {{ $nota->name ?? 'Show Nota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Empleado:</strong>
                            {{ $nota->empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $nota->proveedore->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $nota->tipo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $nota->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $nota->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
