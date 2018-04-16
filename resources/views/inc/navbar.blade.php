<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" style="background-color: #8d8721;">
    <a class="navbar-brand" href="/"><img src="img/wclogo.jpg"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

<div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
   </li>
  <li class="nav-item active">
      <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
     </li>
   <li class="nav-item active">
     <a class="nav-link" href="/posts">Archive <span class="sr-only">(current)</span></a>
    </li>
    @if(!Auth::guest())
      {{-- <li><a class="nav-link" href="{{ route('register') }}">Register</a></li> --}}
      <li>
        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
    @endif
    {{-- <form class="form-inline">
      <button class="btn btn-light" type="button">Donate</button>
    </form> --}}
  </li>
 </ul>
 {{-- <form class="form-inline my-2 my-lg-0">
   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 </form> --}}
 <div>
  <button class="btn btn-success" type="button">Donate</button>
 </div>
</div>
</nav>