@extends('layouts.app')


@section('content')
    <h1> Categories of news </h1>



    <ul class="list-group">

        @if(count($categories)>0)
            @foreach( $categories as $category)


        <li class="list-group-item"><h5> <a href="{{'/view_newslist/'.$category->display_name}}"> {{$category->display_name}}</a> </h5></li>


                <form action="{{'/categories/'.$category->display_name}}" method="post">
                    {{ csrf_field() }}

                    {{Form::hidden('_method', 'DELETE')}}

                    <input type="submit" value="Delete" class="btn btn-danger" onclick="confirm('Are you sure want to delete')">

                </form>


            <br>
                <br>
                <br>
                <br>
                <br>





    </ul>
         @endforeach
        @endif








@endsection
