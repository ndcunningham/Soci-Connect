<!DOCTYPE html>
<html>
    <head>
        <title>Soci-Connect</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel='stylesheet'/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" rel='stylesheet'/>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        @section('scripts')
        @show
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Soci-Connect</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"><li><a href="#">About</a></li></ul>
                      <ul class="nav navbar-nav navbar-right">
                      @if(!Session::has('user'))
                        <li class="active"><a href="{{ url('/login')}}">Login <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Register</a></li>
                        @else
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{session('user')->Name}}
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ url('/logout')}}">Logout</a></li>
                          </ul>
                        </div>
                        @endif
                        </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </nav>
                <div class="content">
                    @yield('content')
                </div>
                <div>
                <br/>
                    @section('footer')
                    &copy; 2015 - Soci-Connect
                    @show
                </div>
            </div><!-- /.container-fluid -->
    </body>
</html>
