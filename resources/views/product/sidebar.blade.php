<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="lte/dist/img/CG_Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Christopher Guy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="lte/dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <!-- <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Data Kategori
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Data Produk
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Data user
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Wishlist
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Data Order
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Data Payment
                <i class="right fa fa-angle-left"></i>
              </p>
            </a> -->
            <!-- Nyoba Dulu -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('admin')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('product')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('admin/product')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Wishlist</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
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