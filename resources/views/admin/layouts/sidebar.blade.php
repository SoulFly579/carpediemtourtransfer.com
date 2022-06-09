
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/dashboard')}}">
            <div class="sidebar-brand-text mx-3">Admin Page</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::segment(2)=='dashboard') active @endif">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)=='articles') in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#articleCollapse"
               aria-expanded="true" aria-controls="articleCollapse">
                <i class="far fa-newspaper"></i>
                <span>Articles</span>
            </a>
            <div id="articleCollapse" class="collapse @if(Request::segment(2)=='articles') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Article Event:</h6>
                    <a class="collapse-item @if(Request::segment(2)=='articles' and !Request::segment(3)) active @endif" href="{{url("/admin/articles/")}}">All Article</a>
                    <a class="collapse-item @if(Request::segment(2)=='articles' and Request::segment(3)=='create') active @endif" href="{{url("/admin/articles/create")}}">Create Article</a>
                </div>
            </div>

        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)=='services') in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#servicesCollapse"
               aria-expanded="true" aria-controls="servicesCollapse">
                <i class="fas fa-car-side"></i>
                <span>Services</span>
            </a>
            <div id="servicesCollapse" class="collapse @if(Request::segment(2)=='services') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Services Event:</h6>
                    <a class="collapse-item @if(Request::segment(2)=='services' and !Request::segment(3)) active @endif" href="{{url("/admin/services")}}">All Services</a>
                    <a class="collapse-item @if(Request::segment(2)=='services' and Request::segment(3)=='create') active @endif" href="{{url("/admin/services/create")}}">Create Services</a>
                </div>
            </div>

        </li>

        <li class="nav-item @if(Request::segment(2)=='sliders') active @endif">
            <a class="nav-link" href="{{url("/admin/sliders")}}">
                <i class="far fa-images"></i>
                <span>Sliders</span></a>
        </li>

        <li class="nav-item @if(Request::segment(2)=='gallery') active @endif">
            <a class="nav-link" href="{{url("/admin/gallery")}}">
                <i class="far fa-image"></i>
                <span>Gallery</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2)=='about') active @endif">
            <a class="nav-link" href="{{url("/admin/about")}}">
                <i class="far fa-address-card"></i>
                <span>About</span></a>
        </li>
        <li class="nav-item @if(Request::segment(2)=='settings') active @endif">
            <a class="nav-link" href="{{url("/admin/settings")}}">
                <i class="fas fa-cog"></i>
                <span>Settings</span></a>
        </li>

    </ul>
