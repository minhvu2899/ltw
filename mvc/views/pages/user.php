<li class="dropdown user user-menu nav-item ml-2 mt-2"> <a href="#" class="dropdown-toggle text-decoration-none" data-toggle="dropdown"> <span class="hidden-xs">Tài khoản của tôi</span> </a>
  <ul class="dropdown-menu info-user">
    <li class="user-header">
      <p><img src="<?php echo "./public/images/" . $_SESSION["user"][7]; ?>" alt="" style="height: 80px;width: 80px;"></p>
      <h2 class="text-left"> <small><?php echo $_SESSION['user'][3] ?></small> </h2>

    </li>
    <li><a href="Users" class="text-decoration-none "><i class="fas fa-user    "></i> My Profile</a></li>
    <li><a href="Users/DoiMatKhau" class="text-decoration-none "><i class="fas fa-atom"></i> Đổi mật khẩu</a></li>
    <li role="separator" class="divider"></li>
    <?php if (isset($_SESSION['shipper'])) { ?>
      <li><a href="Users/ListDonHang" class="text-decoration-none "><i class="fas fa-user    "></i>Danh sách đơn hàng</a></li>
    <?php } ?>



    <li><a href="Login/Logout" class="text-decoration-none "><i class="fa fa-power-off"></i> Đăng xuất</a></li>
  </ul>

</li>

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Dropdown button
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
</div>