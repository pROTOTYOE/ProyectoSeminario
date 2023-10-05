@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mantenimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mantenimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Vehiculos:</strong>
                            {{ $mantenimiento->id_vehiculos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipomantenimiento:</strong>
                            {{ $mantenimiento->tipomantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Costomantenimiento:</strong>
                            {{ $mantenimiento->costomantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $mantenimiento->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
