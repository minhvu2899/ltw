<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">

  <a class="navbar-brand" href="#"><img src="public/images/logo.png" alt=""></a>
  <button class="navbar-toggler navbar-toggler-icon d-lg-none bg-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">

  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mt-2 mt-lg-0 ml-auto ">

      <li class="nav-item ml-2">
        <a class="nav-link" href="#About"><span class="link-text">Về chúng tôi</span></a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link" href="#searchOrder"><span class="link-text">Tra cứu vận đơn</span></a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link" href="#service"><span class="link-text">Dịch vụ</span></a>
      </li>


      <li class="nav-item ml-2">
        <a class="nav-link" href="#feel"><span class="link-text">Đối tác</span></a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link" href="#pthd"><span class="link-text">Phương thức hoạt động</span></a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link" href="#ncc"><span class="link-text">Nhà cung cấp nổi bật</span></a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link" href="#contact"><span class="link-text">Liên hệ</span></a>
      </li>



      <?php if (isset($_SESSION['user'])) {
        require_once "./mvc/views/pages/user.php";
      } else {
        echo  "<li class=" . "nav-item>";
        echo "<a class=" . "nav-link" . " href=" . "Login" . "><span class=" . "link-text" . ">Đăng nhập</span></a>";
        echo "</li>";
      }
      ?>

    </ul>

  </div>
</nav>