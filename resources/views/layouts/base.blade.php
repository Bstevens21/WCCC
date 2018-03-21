<!doctype html>
<html lang="{{ app()->getLocale() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

  h1 {
    color: white;
  }

   .content {
                text-align: center;
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

body {
    padding-top: 0;
    padding-bottom: 3rem;
    color: #5a5a5a;
  }
  
  
  /* CUSTOMIZE THE CAROUSEL
  -------------------------------------------------- */
  
  /* Carousel base class */
  .carousel {
    margin-bottom: 4rem;
  }
  /* Since positioning the image, we need to help out the caption */
  .carousel-caption {
    bottom: 3rem;
    z-index: 10;
  }




  /* Declare heights because of positioning of img element */
  .carousel-item {
    height: 32rem;
    background-color: #777;
  }
  .carousel-item > img {
    position: absolute;
    top: 0%;
    bottom: 0;
    height: 50rem;
    width: 120rem;
    background: cover; 
  }
  
  
  /* MARKETING CONTENT
  -------------------------------------------------- */
  
  /* Center align the text within the three columns below the carousel */
  .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }
  .marketing h2 {
    font-weight: 400;
  }
  .marketing .col-lg-4 p {
    margin-right: .75rem;
    margin-left: .75rem;
  }
  
  
  /* Featurettes
  ------------------------- */
  
  .featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  }
  
  /* Thin out the marketing headings */
  .featurette-heading {
    font-weight: 300;
    line-height: 1;
    letter-spacing: -.05rem;
  }
  
  
  /* RESPONSIVE CSS
  -------------------------------------------------- */
  
  @media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
      margin-bottom: 1.25rem;
      font-size: 1.25rem;
      line-height: 1.4;
    }
  
    .featurette-heading {
      font-size: 50px;
    }
  }
  
  @media (min-width: 62em) {
    .featurette-heading {
      margin-top: 7rem;
    }
  }
        </style>
  <head>
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">   --}}
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
