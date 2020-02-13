<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::to('admin')}}" class="brand-link">
      <img src="{{asset('lte/dist/img/CG_Logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Christopher Guy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('lte/dist/img/profile.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{URL::to('admin')}}" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <!-- Nyoba Dulu -->
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{URL::to('admin')}}" class="nav-link">
                <i class="fa fa-dashboard"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('product')}}" class="nav-link">
                <i class="fa fa-product-hunt"></i>
                  <p>Data Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('customer')}}" class="nav-link">
                <i class="fa fa-user-circle-o"></i>
                  <p>Data Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('wishlist')}}" class="nav-link">
                <i class="fa fa-heart-o"></i>
                  <p>Wishlist</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('order')}}" class="nav-link active">
                <i class="fa fa-shopping-cart"></i>
                  <p>Data Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('payment')}}" class="nav-link">
                <i class="fa fa-credit-card"></i>
                  <p>Data Payment</p>
                </a>
              </li>
            </ul> 
          </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>