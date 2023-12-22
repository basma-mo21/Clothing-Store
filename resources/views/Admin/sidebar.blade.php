

<!-- Sidebar -->
<ul style="margin-top: -50px" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">DASHBOARD </div>
    </a>

    <!-- Divider -->
 

 
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
  

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Utilities Collapse Menu -->
    

    <!-- Heading -->
    <div class="sidebar-heading">
        categories
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('product')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add New Products</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ url('showproduct') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Show Products</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ url('showorder') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Show Order</span></a>
    </li>

  

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  
</ul>
<!-- End of Sidebar -->