<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="user-footer" style="padding: 10px;">
          <div class="btn-group dropleft"> <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cog" aria-hidden="true"></i> </button>
            <div class="dropdown-menu"> <a class="dropdown-item" href="<?php echo site_url('Admin/settings'); ?>">Profile</a> <a class="dropdown-item" href="<?php echo '#' ?>">Logout</a></div>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4"> <a href="index3.html" class="brand-link p-4"><span class="brand-text">Kushiyu Restaurant </span> </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image"> <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"></div>
          <div class="info"> <a href="#" class="d-block">Admin</a></div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/dashboard'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "dashboard") {echo "active";} ?>"> <i class="nav-icon fa fa-home fa-fw"></i>
                <p>Dashboard</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/order_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "order_management") {echo "active";} ?>"> <i class="nav-icon fa fa-first-order"></i>
                <p>Orders</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/customer_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "customer_management") {echo "active";} ?>"> <i class="nav-icon fa fa-users"></i>
                <p>Users</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/item_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "item_management") {echo "active";} ?>"> <i class="nav-icon fa fa-shopping-bag"></i>
                <p>Catalog</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/category_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "category_management") {echo "active";} ?>"> <i class="nav-icon fa fa-list"></i>
                <p>Category</p>
			  </a></li>
			  <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/our_store'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "our_store") { echo "active";} ?>"> <i class="nav-icon fas fa-store-alt"></i>
                <p>Our Store</p>
			  </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/banner_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "banner_management") {echo "active";} ?>"> <i class="nav-icon fa fa-bandcamp"></i>
                <p>Banners</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/coupon_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "coupon_management") {echo "active";} ?>"> <i class="nav-icon fa fa-tag fa-lg"></i>
                <p>Coupons</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/giftcard_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "giftcard_management") {echo "active";} ?>"> <i class="nav-icon fa fa-gift"></i>
                <p>Gift Card</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/wallet_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "wallet_management") { echo "active";} ?>"> <i class="nav-icon fa fa-inr"></i>
                <p>Wallet</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/rating_management'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "rating_management") {echo "active";} ?>"> <i class="nav-icon fa fa-star-half-o"></i>
                <p>Reviews</p>
              </a></li>
              <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/report_management/1'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "report_management") {echo "active";} ?>"> <i class="nav-icon fa fa-bar-chart"></i>
                <p>Reports</p>
              </a></li>
            <li class="nav-item animated flipInX"> <a href="<?php echo site_url('Admin/settings'); ?>" class="nav-link <?php if ($this->uri->segment(2) == "settings") {echo "active";} ?>"> <i class="nav-icon fa fa-cog"></i>
                <p>Settings</p>
              </a></li>
              

           
			  
          </ul>
        </nav>
      </div>
    </aside>