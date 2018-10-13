@extends('layouts.app')


@section('content')
    <h1>  {{$cat_name}} news </h1>



    <ul class="list-group">

        @if(count($news_list)>0)
            @foreach( $news_list as $news)


                <li class="list-group-item"><h5><a href="{{'/view_news/'.$news->id}}"> {{$news->title}}</a> </h5></li>
                <li class="list-group-item">  {{$news->highlights}}</li>
                <li class="list-group-item">  <p>{{$news->author}}</p></li>
                <li class="list-group-item">  <p>{{$news->publish_date}}</p></li>




                <br>
                <br>
                <br>
                <br>
                <br>





    </ul>
    @endforeach
    @endif








@endsection
