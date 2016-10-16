@extends('layouts.layout')

@section('content')



  {{Form::open(['route' => 'products/store'])}}

  {{ Form::label('title', 'Title:') }}
  {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

  {{ Form::close() }}

@endsection
