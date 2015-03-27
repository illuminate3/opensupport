
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        @include ('_head')
    </head>
    <body class="skin-blue layout-top-nav">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">               
                <nav class="navbar navbar-static-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="/" class="navbar-brand">Open support</a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="{{ Request::is('tickets*') ? 'active' : '' }}"><a href="/tickets">Tickets</a></li>
                                <li class="{{ Request::is('clients*') ? 'active' : '' }}"><a href="/clients">Clients</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                <li class="{{ Request::is('auth/login') ? 'active' : '' }}"><a href="/auth/login">Login</a></li>
                                @else
                                <li class="{{ Request::is('admin*') ? 'active' : '' }}"><a href="/admin">Administration</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ action('UserController@profile') }}">Profile</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/auth/logout">Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">

                    <div class="container-fluid">
                        <div class="row">
                            

                                @yield('content')

                           
                        </div>
                    </div>

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="text-center">Open support on <a href="https://github.com/smaegaard/opensupport">github</a>.</div>
            </footer>
        </div><!-- ./wrapper -->

        @include ('_javascript')
        
        @yield('script')
        
    </body>
</html>