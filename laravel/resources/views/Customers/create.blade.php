@extends('app')

@section('content')
    <h1>Add a New Customer</h1>

    <hr/>

    {!! Form::open(['url' => 'Customers']) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Customer Name:') !!}
        {!! Form::text('Name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone', 'Phone Number:') !!}
        {!! Form::text('Phone', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Street', 'Street:') !!}
        {!! Form::text('Street', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('City', 'City:') !!}
        {!! Form::text('City', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('State', 'State:') !!}
        {!! Form::text('State', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Zip', 'Zip:') !!}
        {!! Form::text('Zip', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Notes', 'Customer Notes:') !!}
        {!! Form::textarea('Notes', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Customer', ['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}
@stop