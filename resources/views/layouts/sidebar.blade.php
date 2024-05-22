<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin/tours') }}">
        <div class="sidebar-brand-icon mbl-nav-logo">
           <img src="{{asset('forntend/images/logo-mbl.png')}}" alt="" style="width: 60px">

        </div>
        <div class="sidebar-brand-text mx-3">
            <img src="{{asset('forntend/images/logo-desk.png')}}" alt="" style="width: 130px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
   <!--  <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a href="{{ url('admin/dashboard') }}" class="nav-link">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li> -->

    <!-- Other menu items with conditional class -->
    <!-- Replace 'url('admin/tours')' with appropriate URLs for other menu items -->

     <li class="nav-item {{ Request::is('admin/categories') ? 'active' : '' }}">
        <a href="{{ url('admin/categories') }}" class="nav-link">
            <i class="fa fa-list"></i>
            <span>Categories</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('admin/tours') ? 'active' : '' }}">
        <a href="{{ url('admin/tours') }}" class="nav-link">
            <i class="fa fa-solid fa-plane"></i>
            <span>Tours</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('admin/gallery') ? 'active' : '' }}">
        <a href="{{ url('admin/gallery') }}" class="nav-link">
            <i class="fa fa-image"></i>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('admin/flyers') ? 'active' : '' }}">
        <a href="{{ url('admin/flyers') }}" class="nav-link">
            <i class="fa fa-file-invoice"></i>
            <span>Flyers</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('admin/links') ? 'active' : '' }}">
        <a href="{{ url('admin/links') }}" class="nav-link">
            <i class="fa fa-link"></i>
            <span>Quick Links</span>
        </a>
    </li>

    <!-- Repeat the same pattern for other menu items -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('home') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse {{ Request::is('home') ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('home') ? 'active' : '' }}" href="{{ url('/home') }}">Home</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        {{-- <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="..."> --}}
        <p class="text-center mb-2"><strong>HEART OF THE NORTH TOURS</strong> is packed with premium features, components, and more!</p>
        {{-- <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a> --}}
    </div>

</ul>
