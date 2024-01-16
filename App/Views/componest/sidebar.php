<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3  mb-3 pb-3 d-flex">
    <div class="image">
      <img src="public\uploads\user.jpg" class="img-circle elevation-2" alt="">
      <span class="brand-text font-weight-light text-center">MinhNhut170502@gmail.comn</span>
    </div>
  </div>


  <a href="App\Views\componest\login.php" class="text-decoration-none text-white ms-5">
        Đăng Nhập/Đăng Ký
    </a>


    

  <!-- Sidebar -->

  <div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



        <li class="nav-item">
          <a href="index.php?pg=home&action=caterori" class="nav-link">
            <i class="fa-solid fa-sun"></i>
            <p>
              Hôm Nay
              <span class="badge badge-info right">3</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?pg=home&action=task" class="nav-link">
            <i class="fa-solid fa-house"></i>
            <p>
              Nhiệm vụ
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?pg=home&action=task" class="nav-link">
            <i class="fa-regular fa-star"></i>
            <p>
              Quan Trọng
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>



      </ul>
     
    </nav><hr>
    <nav>
    <div class="mt-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="New List ">
          <button class="btn btn-primary" type="button" id="button-addon2">THÊM</button>
        </div>
      </div>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>