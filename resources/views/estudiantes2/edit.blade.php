@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Estudiantes2
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Estudiantes2</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estudiantes2s.update', $estudiantes2->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('estudiantes2.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
