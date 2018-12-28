<nav class="navbar navbar-inverse " style="position: fixed !important;width: 100%  ; top: 0;overflow: hidden;">
    <div class="container"  style="">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Musahamat') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
              <li><a href="/supplier">Suppliers</a></li>
              <li><a href="/product_lines">Product Lines</a></li>
              <li><a href="/withdrawals/ ">Crates & Boxes</a></li>
              <!-- <li><a href="/supplier/create" class="hidden-print btn btn-default pull-left" style="margin-right: 20px;">Switch theme</a></li> -->

                <li>
<!--                 
                {--!! Form::open(['action' => 'lightingController@toggle', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!--}
                {{--Form::submit('toggle ligts', ['class'=>'btn btn-primary pull-right'])--}} -->

                
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                @else
                <li>  <a>{{ Auth::user()->name }}</a>
                </li>
                 <li>
                 <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                </li>           
                    <!-- <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           Staff: {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        // <ul class="dropdown-menu " style=" position: relative" role="menu">
                        //     <li>
                               
                        //     </li>
                        // </ul>
                    </li> -->
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="hidden-print">
</br>
</br>
</br>
</div>
<style>
div.header {
    display: block; text-align: center; 
    position: running(header);
}
div.footer {
    display: block; text-align: center;
    position: running(footer);
}
@page {
    @top-center { content: element(header) }
}
@page { 
    @bottom-center { content: element(footer) }
}
</style>
<div class="visible-print header">
    <center> <img style="width:70%;" src="/HEADER.png"></center>
</div>

