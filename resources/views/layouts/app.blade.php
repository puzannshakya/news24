
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>

       News 24


    </title>

    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <script src="http://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

</head>

<body>

@include('inc.navbar')

<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')

    @endif

    <div class="row">
        <div class="col-md-8 col-lg-8">

            @include('inc.messages')

            @yield('content')
        </div>

    </div></div>




<script>

    CKEDITOR.replace( 'editor1' );
</script>


</body>


</html>
