<header>

</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href='<?php echo ROOT_URL ; ?>'>Home</a>
       <?php if (isset($_SESSION['user'])): ?>
    <!-- // Nếu tồn tại, in ra tên người dùng -->
    <?php 
            $fname = $_SESSION['user']['user_email'];
            
            echo "  <a class='nav-link' href= '?url=LoginController/logout'>{$fname}</a>";
        
    ?>
   <?php else: ?>
    <!-- // Nếu không tồn tại, hiển thị liên kết Đăng nhập/Đăng ký -->
         <a class="nav-link" href='<?php echo ROOT_URL . '?url=LoginController/login'; ?>'>đăng nhập</a>
        <a class="nav-link" href="<?php echo ROOT_URL . '?url=ReristerController/rerister'; ?>">đăng ký</a>
    <?php endif; ?>



       
        


        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>