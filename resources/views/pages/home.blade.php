@extends('layouts.base')

@section('content')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<link rel="stylesheet" href="css/home.css">

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel">
  <div class="carousel-item active">
    <img class="img-fluid" src="img/pic4.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="container">
        <div class="carousel-caption text-left">
          @if(count($posts) > 0)
          @foreach($posts as $post)
            <h1>{{$post->title}}</h1>
            <p >{!!$post->body!!}</p>
          @endforeach  
          @else
            <p>No Posts Found</p>
          @endif
        <a class="btn btn-primary" href="/posts/{{$post->id}}" role="button">View Post</a>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <img src="img/pic3.jpg" class="img-responsive" alt="slide two" >
  </div>
  <div class="carousel-item">
    <img src="img/pic2.jpg" alt="slide three" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
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
        <img class="rounded-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAk1BMVEVFfptAanr///9xnLNMdofd5+xtma9FfpyerrY1ZHU+aHhYg5VTeIbH09g5ZnYzdZTn7/Jnk6p8mKNqh5NGb3+zwshDd5BBboGbuMhgjqdDdo5BbYBCcohEfJc9eZhJcH+mvsyOpa5jg5CvxtNNgpyNq71jiZng6e3L19uApLjS3+Z/mqXz9/kpXW+Mo6y6zdjAzNEGHzoHAAAErUlEQVR4nO3bb1/aMBAH8GSoRRT/DrACdU6Ygm76/l/dAigCbSBJL5e7fu73cE/Y99Pr9XKtSjU8rdT/gegRIf+IkH9EyD8i5B8R8o8I+UeE/CNC/hEh/4iQf0TIPyLkHxHyjwj5R4T8I0L+ESH/iJB/RMg/IuQfEfKPCPlHhPwjQv4RIf+IkH9EyD8i5J9Ewszpn0CCLsyKQk3y/LqcSZwfxBVmhcpb01/vL/Orcm76UX4TVVhks6f51Q9Lbi7uY5QqpjCbda28pVCPxvBEPGGRv+/zLYV6AF+paMKidbzXtxJqfQ99FbGExeztAPBTqAfARCShA/BLqIdj0J/GERb5YeBaqIegPRVJOD8M/BZq01PhfhtFWEwdgJtCPYB7bOBcw2dfoalUKCKGsJg63IU7QlOpQDcjitDlLiwJTU8FIWIIr52KtCQ0T3+IX0cQFndORVohBOmpCMLLJydglRCCiCDMuuHCxdO/ZhCEE7dGUy2s31PjC7PcUfhaLTRP/1q/j3ANT6zHpvnrzUbOO9VCPax1aEwofHv9e3qxERtwWanhSSj8Z6nKSmL40z+d8MValbCVmk7Y++kB1IsBJ+wy8hGGPv0ZCfWgH3IVOQnDRnFeQj3wvxmZCQMGHG5C/57KT+j79Gco9FzEcRSaAceDyFLodWiMJ8w+U1iFF9vxIrpXajRhvs6setX2cbuTB7/L6DqKxxJedr9f0FcCy7Gd8W1xnFOjCQ+9Dy3HsqepSyQk/O1zXlxm4DKnEhI+eAudeiohodeZf008WKl0hM8h19BhvcFeePDQSEfYDZ5x9lcqHWEvFHjgOyM6wna4cO+hkY7wMfA2XMVeqXSE3iPNdqzrDTrC23pC6xdxZITP/kPbTjrV72/ICI9rCy2VSkb4ETS07cQMOKVSJSPseR6ALSkv4qIJ3b6h+U4b4BIuUlpvxBIW07uvPFUf8ruP7c0A3Iar7I7iCF8qWDZR7VMgUinbh8b4QtuuLZ5wu6em25dGFG5VajOFm19vNFX4PYo3Vrh+J95c4VelNlm4IjZauHwN12zhYr3RdKEenTRd2DkToQhFKEIRilCEIhShCEUoQhGKUIQiFKEIRShCEYpQhDyE+kiEIhShCEUoQhGKEERY/blwg4R5r1uRF98/+yUsVJOz84rU+XN8akI1HnXKQQLiCFXWx/KkEprLOGi6MBuPGi5UmbofNluoUlUqptBUKloHTSM0SdBTkYVqjH4zYgsVek9FF6L3VHShSR+1p6YQ4lZqEqGp1IYLTfpoN2MqId6cmkpoKhWJmEy4ODSiVGpCIdIonlSIcjMmFSqMnppaGL9SkwtV7J5KQBh5EUdAGLlSSQij9lQSQjPgxOupNIQqYqWSEUZbxJERmsQ5NFISxqlUUsIoPZWUMMp6g5ZQRVjEkROCL+LoCaErlZ5QAb+/ISkErVSaQshFHE2hAlxvkBWCVSpdIdSAQ1eogCqVtBBkFKcthFjEURfWX8RRF9avVPrCuj2VvrDu1xsMhKpepfIQmjk1eBHHQ2iMwYdGLsLwL+L4CENHcUbCwJ7KSKjCFnG8hCGVykyYFSPPv0XpHKkWs1wf+eXPf52ri2jgSn9YAAAAAElFTkSuQmCC" alt="Generic placeholder image" width="140" height="140">
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
        <img class="featurette-image img-fluid mx-auto" src="https://photos-5.dropbox.com/t/2/AADtqtC2-3ybEVPIS5SZ4hrss4JpGM98O1PbHCFMrVQ3Hg/12/192203035/jpeg/32x32/1/_/1/2/Redstone%20NewYears2018%20(LoRes)-9357.jpg/EODLwc4JGNMBIAcoBw/JFwoCB9O_JZcwY3URB5EweYwmp5n35nNLf3y3mm02uM?size=1280x960&size_mode=3" alt="Generic placeholder image">
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