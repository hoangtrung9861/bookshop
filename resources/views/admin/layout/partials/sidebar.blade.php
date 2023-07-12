<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ Route('admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Book Admin <sup>R</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ Route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ Route('adminProduct') }}">
            <i class="fa-brands fa-product-hunt"></i>
            <span>Products</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ Route('adminOrder') }}">
            <i class="fas fa-wallet"></i>
            <span>Orders</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ Route('adminAccount') }}">
            <i class="fa-regular fa-user"></i>
            <span>Accounts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fa-solid fa-users"></i>
           <span>Users</span> 
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('roles.index') }}">
            <i class="fa-brands fa-slack"></i>
           <span>Role</span> 
        </a>
    </li>


</ul>
<!-- End of Sidebar -->
