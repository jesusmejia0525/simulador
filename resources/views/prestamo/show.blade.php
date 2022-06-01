@extends('layouts.app')

@section('template_title')
    {{ $prestamo->name ?? 'Show Prestamo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prestamos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $prestamo->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Used At:</strong>
                            {{ $prestamo->last_used_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
