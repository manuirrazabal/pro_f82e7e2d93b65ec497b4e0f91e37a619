<header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('public/img/procor-logo-web-.png') }}" alt="Logo" width="150"> 
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                            <li @if($menu == "home") class="active" @endif ><a href="{{ url('/') }}">Home <i class="fa"></i></a></li>
                            <li @if($menu == "services") class="active" @endif ><a href="{{ url('/our-services') }}">Our Services <i class="fa"></i></a></li>
                            <li @if($menu == "projects") class="active" @endif ><a href="{{ url('/projects') }}">Our Projects <i class="fa"></i></a></li>
                            <li @if($menu == "about") class="active" @endif ><a href="{{ url('/about-us') }}">About Us<i class="fa"></i></a></li>
                            <li @if($menu == "contact") class="active" @endif ><a href="{{ url('/contact-us') }}">Contact<i class="fa"></i></a></li>
                        </ul>

                        
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->