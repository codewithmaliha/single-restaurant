 <!-- Sidebar Start -->
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Menu</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('admin/menu') }}" class="dropdown-item">Menu List</a>
                    <a href="typography.html" class="dropdown-item">Favorite List</a>
                    <a href="element.html" class="dropdown-item">Special Offer List</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Order</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('admin/orders-list')}}" class="dropdown-item">Order List</a>
                    <a href="element.html" class="dropdown-item">Special Order List</a>
                </div>
            </div>
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Single Menu</a>
        </div>
    </nav>

<!-- Sidebar End -->
