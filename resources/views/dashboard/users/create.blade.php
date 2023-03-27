@extends('layouts.user_type.auth')
@section('content')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="bg-light p-4 rounded">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        {!! Form::open(['route' => 'users.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                            @error('name')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                            @error('email')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'required', 'minlength' => 8])
                            !!}
                            @error('password')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>

                        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
