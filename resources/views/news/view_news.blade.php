@extends('layouts.app')


@section('content')




    <ul class="list-group">




                <li class="list-group-item"> <h2>{{$news->title}}</h2> </li>
                <li class="list-group-item">  {{$news->content}}</li>
                <li class="list-group-item">  <p>{{$news->author}}</p></li>
                <li class="list-group-item">  <p>{{$news->publish_date}}</p></li>
                         <br>
        <br>



        <a  class="card-link" href="{{'/edit_news/'.$news->id}}" >Edit</a>

        <br>


                  <form action="{{'/news/'.$news->id}}" method="post">
                      {{ csrf_field() }}

                      {{Form::hidden('_method', 'DELETE')}}

                      <input type="submit" value="Delete" class="btn btn-danger" onclick="confirm('Are you sure want to delete')">

                  </form>







    </ul>









@endsection
