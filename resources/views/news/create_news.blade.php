@extends('layouts.app')


@section('content')
    <h1 xmlns:display="http://www.w3.org/1999/xhtml"> Create News</h1>



    {!!  Form::open(['url' => 'news']) !!}


    <div class="form-group" >
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '' , ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
    </div>

    <center>
   <label> Choose an Image</label>
    <input type="file" id="file-field" onchange="previewImage(event)">
    <div> <img src="/images/preview.png" width="400" height="400" id="image-field"></div>



    </center>

<!-- Javascipt for viewing the image choosed -->
    <script type="text/javascript">

        function previewImage(event)
        {
            var reader = new FileReader();
            var imageField = document.getElementById("image-field");

            reader.onload = function () {

                if(reader.readyState == 2){
                    imageField.src = reader.result;
                }
            }

            reader.readAsDataURL(event.target.files[0]);

        }

    </script>


    <div class="form-group" >
        {{Form::label('content', 'Content of the news')}}
        {{Form::textarea('content', '' , ['class' => 'form-control', 'id' => 'editor1', 'placeholder' => 'Enter content of the news'])}}
    </div>

    <div class="form-group" >
        {{Form::label('author', 'Author')}}
        {{Form::text('author', '' , ['class' => 'form-control', 'placeholder' => 'Enter Author'])}}
    </div>

    <div class="form-group">
        {{Form::label('category', 'Categories')}}

        @if(count($categories)>0)
            @foreach( $categories as $category)


                <div class="checkbox">
                   <label>
                      <input type="checkbox" name="categoryArr[]" value="{{$category->display_name}}">{{$category->display_name}}
                   </label>
                </div>



            @endforeach
            @endif

    </div>
    <div class="form-group" >
        {{Form::label('publish_date', 'Publish date')}}
        {{Form::text('publish_date', '' , ['class' => 'form-control', 'placeholder' => 'YY-MM-DD'])}}
    </div>



    <div>

        {{Form::submit('Save News', ['class' => 'btn btn-primary'])}}


        {!! Form::close() !!}
    </div>



@endsection
