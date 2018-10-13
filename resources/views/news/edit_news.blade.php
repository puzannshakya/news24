@extends('layouts.app')


@section('content')
    <h1 xmlns:display="http://www.w3.org/1999/xhtml"> Edit News</h1>



    <form action="{{'/news/'.$news->id}}" method="post">
        {{ csrf_field() }}


    <div class="form-group" >
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $news->title , ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
    </div>



    <div class="form-group" >
        {{Form::label('content', 'Content of the news')}}
        {{Form::textarea('content', $news->content , ['class' => 'form-control', 'id' => 'editor1', 'placeholder' => 'Enter content of the news'])}}
    </div>

    <div class="form-group" >
        {{Form::label('author', 'Author')}}
        {{Form::text('author', $news->author , ['class' => 'form-control', 'placeholder' => 'Enter Author'])}}
    </div>

    <div class="form-group">
        {{Form::label('category', 'Categories')}}

        @if(count($categories)>0)
            @foreach( $categories as $category)


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="categoryArr[]" value="{{$category->display_name}}"

                        {{in_array($category->display_name,$categoryArr)?"checked":""}}
                        >
                        {{$category->display_name}}
                    </label>
                </div>



            @endforeach
        @endif

    </div>
    <div class="form-group" >
        {{Form::label('publish_date', 'Publish date')}}
        {{Form::text('publish_date', $news->publish_date , ['class' => 'form-control', 'placeholder' => 'YY-MM-DD'])}}
    </div>



    <div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update News', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>




@endsection
