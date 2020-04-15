@extends('Layout.app')
@section('title', 'Create Registration')
@section('content')

    <div class="row regi_form">
        <div class="offset-md-2 col-md-8 rform">
        <h3 class="text-center"><u>Students - Registration Form</u></h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ Form::open(['route' => 'registration.store', 'method' => 'post', 'files' => true]) }}
            @include ('Registration.form')
            <div class="offset-md-4 col-md-4">
                {{ Form::button('REGISTER', ['class' => 'btn btn-outline-success', 'type' => 'submit']) }}
            </div>
        {{ Form::close() }}
        </div>
    </div>
@endsection