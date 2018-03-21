@extends('layouts.base')

@section('content')

  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="https://jjraiaphoto.files.wordpress.com/2014/11/monument-canyon-colorado-national-monument-co.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption text-left">
                  @if(count($posts) > 0)
                  @foreach($posts as $post)
                    <h1>{{$post->title}}</h1>
                    <p>{!!$post->body!!}</p>
                   @endforeach  
                   @else
                        <p>No Posts Found</p>
                    @endif
                    <a class="btn btn-lg btn-primary" href="/posts/{{$post->id}}" role="button">Find Out More</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="https://dl.dropboxusercontent.com/s/08an1vduqv60gof/IMG_8465.jpg?dl=0" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="https://dl.dropboxusercontent.com/s/08an1vduqv60gof/IMG_8465.jpg?dl=0" alt="Third slide">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  
  
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
  
        <div class="container marketing">
  
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfyBspjTVAoelRD9yTna_frNl5uJ6KDYvlqPLHkOnrBbIap4rb" alt="Generic placeholder image" width="140" height="140">
              <h2>Join Email List</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="data:image/png;base64,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" alt="Generic placeholder image" width="140" height="140">
              <h2>Follow Us</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaMvNDgsDNVaUkXn_fH-ZXHTp_EwD0loJpeIcGCGz3wx-0G9mX" alt="Generic placeholder image" width="140" height="140">
              <h2>Donate</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
  
  
          <!-- START THE FEATURETTES -->
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="https://photos-5.dropbox.com/t/2/AADZqDdqT4pPP2UvFpg1mwXH-HKjGFjcEMDhRqeC_WRUjQ/12/117288735/jpeg/32x32/3/1521111600/0/2/IMG_4350.JPG/EMbWvloY7hQgBygH/SLLknIbS1yl0ww7Udfj3p2ux-flmHZLmHHD5WoC1y3M%2CQnPYPkYn5ZJesyy0gqlAvgh8UbhrI-imy2T1K517SZ8%2CMdCE6yeUDg2vzHCM0ALxl6rQacFN8dwDe6sgDRurBdA?dl=0&size=2048x1536&size_mode=3" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="https://photos-4.dropbox.com/t/2/AACestBgBEiigNtUnUV5oSHhXA13sHdjx-fxah-HemLZwQ/12/192203035/jpeg/32x32/1/_/1/2/Dave%20%26%20Susan%20Dec%202017-6554.jpg/EODLwc4JGNMBIAcoBw/NSHGOtgy5q0AS0eBwi8IlkqdsP4HDfZ9MX4iyurd3NY%2CToaaecsOH5iYDVrX-D6OpKAY7YAkYgwPDjpEX6NcjBo%2CgIZZtXuA8cxXhpbY4SRoa5a1c_UDMoYWPRs5VLwBPag%2Cxj2kjAvfuO8rKl1e20fWCdgcLAdIoa1235PIonhJ448?size=2048x1536&size_mode=3" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="https://photos-3.dropbox.com/t/2/AABA5d3WHpd7f3nGHWnHIstTkdPxKz9aHU4H0Kba3tjk9g/12/192203035/jpeg/32x32/1/_/1/2/Rob%20N%20Chandler%20Unaweep%20-3166.jpg/EODLwc4JGNMBIAcoBw/JzMj9fNhtUlxjIAuf29RiChSt4XykyDKqfdMMGm30Kk%2CT5otdtTnnrqC4CiydvC93ftFuHKZihX4UDiu_IYQblU%2ClTK1MCz2mCwa1ULUfR7ZBRYoiDUzF9KDOZtXp5aldVs?size=2048x1536&size_mode=3" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <!-- /END THE FEATURETTES -->
  
        </div><!-- /.container -->
  
  
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>
  
@endsection