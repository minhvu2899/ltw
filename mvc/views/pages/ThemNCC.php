<div class="content-header">
      <h1>Quản lí nhà cung cấp</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí nhà cung cấp</li>
      </ol>
    </div>
<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <div class="form-body">
    <form action="./Nhacungcap/ThemNCC/" class="col-form" novalidate method="POST">
    <!-- <div class="col-logo"><a href="../index.html"><img alt="" src="../dist/img/logo-lg.png"></a></div> -->
      <header>Thêm nhà cung cấp</header>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            
            <input class="form-control" placeholder="Tên nhà cung cấp" type="text" name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'] ?>">
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errtenNCC'])){ echo $_SESSION['errtenNCC'];unset($_SESSION['errtenNCC']);} ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
      
            <input class="form-control" placeholder="Địa chỉ" type="text" name="diachi" value="<?php if(isset($_POST['diachi'])) echo $_POST['diachi'] ?>">
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errdiachiNCC'])){ echo $_SESSION['errdiachiNCC'];unset($_SESSION['errdiachiNCC']);} ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
       
            <input class="form-control" placeholder="Số điện thoại" type="text" name="sdt" value="<?php if(isset($_POST['sdt'])) echo $_POST['sdt'] ?>">
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errsdtNCC'])){ echo $_SESSION['errsdtNCC'];unset($_SESSION['errsdtNCC']);} ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
           
            <input class="form-control" placeholder="E-mail" type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['erremailNCC'])){ echo $_SESSION['erremailNCC'];unset($_SESSION['erremailNCC']);} ?></span>  </div>
        </section>
    
        <section>
          <div class="form-group has-feedback">
          
          <div class="form-group">
               <label for="">Nhóm hàng</label>
               <select class="form-control" name="nhomhang" id="" >
                 <option value="">Chọn nhóm hàng</option>
                 <option value="1">Tiêu dùng</option>
                 <option value="2">Đồ uống</option>
                 <option value="3">Thức ăn nhanh</option>
               </select>
             </div>
             <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errnhomNCC'])){ echo $_SESSION['errnhomNCC'];unset($_SESSION['errnhomNCC']);} ?></span> 
        </section>
      </fieldset>
      <footer class="text-right">
        <button type="submit" class="btn btn-info pull-right" name="addNCC">Thêm</button>
        <!-- <a href="Register" class="button button-secondary">Reset</a>  -->
      </footer>
    </form>
  </div>
      </div>
      