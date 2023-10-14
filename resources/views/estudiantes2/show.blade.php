@extends('layouts.app')

@section('template_title')
    {{ $estudiantes2->name ?? "{{ __('Show') Estudiantes2" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estudiantes2</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes2s.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiantes2->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $estudiantes2->email }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $estudiantes2->matricula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
