 <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">
                    
                    <a href="{{route('index')}}" class="site-title yellow-text">Business Perfect</a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li  class="nav-item" >
                            <a class=" nav-link @if(request()->routeIs('index')) active @else '' @endif"  href="{{route('index')}}">Home</a></li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('blog')) active @else '' @endif" href="{{route('blog')}}">Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('portfolio')) active @else '' @endif" href="{{route('portfolio')}}">Portfolio</a>                                
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('contact')) active @else '' @endif" href="{{route('contact')}}">Contact</a>
                        </li> 
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->