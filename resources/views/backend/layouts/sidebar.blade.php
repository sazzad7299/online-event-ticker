 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }}<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

     <!------------------ Brand------------------------->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrand"
            aria-expanded="true" aria-controls="collapseBrand">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Slider</span>
        </a>
        <div id="collapseBrand" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Slider:</h6>
                <a class="collapse-item" href="{{ route('viewslider') }}">All Slider</a>
                <a class="collapse-item" href="{{ route('addslider') }}">Add Slider</a>

            </div>
        </div>
    </li>
    <!------------------ Category------------------------->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Category</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{route('allCategory')}}">All Category</a>
                <a class="collapse-item" href="{{route('addCategoryForm')}}">Add Category</a>


            </div>
        </div>
    </li><!------------------ Product------------------------->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent"
            aria-expanded="true" aria-controls="collapseEvent">
            <em class="fas fa-fw fa-wrench"></em>
            <span>Event</span>
        </a>
        <div id="collapseEvent" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Event</h6>
                <a class="collapse-item" href="{{route('allEvent')}}">All Event</a>
                <a class="collapse-item" href="{{route('addEventForm')}}">Add Event</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHall"
            aria-expanded="true" aria-controls="collapseEvent">
            <em class="fas fa-fw fa-wrench"></em>
            <span>Hall</span>
        </a>
        <div id="collapseHall" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hall</h6>
                <a class="collapse-item" href="{{route('viewHall')}}">All Hall</a>
                <a class="collapse-item" href="{{route('addHall')}}">Add Hall</a>

            </div>
        </div>
    </li>
    <li class="nav-item" style="display: none">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
            aria-expanded="true" aria-controls="collapseEvent">
            <em class="fas fa-fw fa-wrench"></em>
            <span>BLOG</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar" >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">BLOGS</h6>
                <a class="collapse-item" href="{{route('blog.index')}}">Blog List</a>
                <a class="collapse-item" href="{{route('blog.create')}}">Add blog</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <em class="fas fa-users"></em>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.orders') }}">
            <em class="fas fa-shopping-cart"></em>
            <span>Orders</span>
        </a>
    </li>




    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
