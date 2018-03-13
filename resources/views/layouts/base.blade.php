<!doctype html>
<html lang="{{ app()->getLocale() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                /* background-image: url("https://dl.dropboxusercontent.com/s/08an1vduqv60gof/IMG_8465.jpg?dl=0");
                background-repeat: no-repeat; */
                /* background-size: cover; */
                /* background-color: #e1eaea; */
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: inline; 
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #000000;
                font-size: 62px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .well{
                margin-bottom: 20px;
                background: #E0E0E0;
                padding: 10px;
                margin-left: 300px;
                margin-right:300px;
            }

            .form-group{
                margin-left: 300px;
                margin-right:300px;
            }

            .btn{
                margin-bottom: 10px;
            }
        </style>
  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title{{config('app.name', 'WCCC')}}</title>
    </head>
    <body>
      @include('inc.navbar')
      @include('inc.messages')
        @yield('content')

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
        </body>
</html>
