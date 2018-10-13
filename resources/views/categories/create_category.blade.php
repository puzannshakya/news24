@extends('layouts.app')


@section('content')
    <h1> Contact </h1>



    {!!  Form::open(['url' => 'categories']) !!}


    <div class="form-group" >
        {{Form::label('name', 'Category Name')}}
        {{Form::text('category_name', '' , ['class' => 'form-control', 'placeholder' => 'Enter a category'])}}
    </div>

    <div>

        {{Form::submit('Save Category', ['class' => 'btn btn-primary'])}}


        {!! Form::close() !!}
    </div>

@endsection
