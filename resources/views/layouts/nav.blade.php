@if(Auth::user()->user_type=="S")
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home">
          <img class="img-responsive" src="{{ asset("images/logo1.png") }}" alt="Derulo">
        </a>
      </div>
      <ul class="nav navbar-nav" style="background-color:black;">
        <li class="active"><a href="/take">Join Contest</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a ><span class="glyphicon glyphicon-user"></span> {{Auth::user()->username}}</a></li>
        <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </nav>
@elseif(Auth::user()->user_type=="T")
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home">
          <img class="img-responsive" src="{{ asset("images/logo1.png") }}" alt="Derulo">
        </a>
      </div>
      <ul class="nav navbar-nav" style="background-color:black;">
        <li class="active"><a href="/create">Buat Contest</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a ><span class="glyphicon glyphicon-user"></span> {{Auth::user()->username}}</a></li>
        <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </nav>
@endif
