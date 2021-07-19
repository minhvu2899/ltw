<div class="wrapper">
  <div class="form-body">
    <form action="./Register/" class="col-form" novalidate method="POST">
    <div class="col-logo"><a href="../index.html"><img alt="" src="../dist/img/logo-lg.png"></a></div>
      <header>Đăng kí</header>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Tên</label>
            <input class="form-control" placeholder="Tên" type="text" name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>">
            <span class="text-danger" aria-hidden="true">*<?php if(isset($_SESSION['errTen'])){ echo $_SESSION['errTen'];}unset($_SESSION['errTen']); ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">E-mail</label>
            <input class="form-control" placeholder="E-mail" type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
            <span class="text-danger" aria-hidden="true">*<?php if(isset($_SESSION['errEmail'])){ echo $_SESSION['errEmail'];}unset($_SESSION['errEmail']); ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Số điện thoại</label>
            <input class="form-control" placeholder="Số điện thoại" type="text" name="sdt" value="<?php if(isset($_POST['sdt'])) echo $_POST['sdt'];?>">
            <span class="text-danger" aria-hidden="true">*<?php if(isset($_SESSION['errSDT'])){ echo $_SESSION['errSDT'];}unset($_SESSION['errSDT']); ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Username</label>
            <input class="form-control" placeholder="Username" type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">
            <div id="messUn"></div>
            <span class="text-danger" aria-hidden="true">*<?php if(isset($_SESSION['errUsername'])){ echo $_SESSION['errUsername'];}unset($_SESSION['errUsername']); ?></span>  </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Password</label>
            <input class="form-control" placeholder="Password" type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>">
            <span class="text-danger" aria-hidden="true">*<?php if(isset($_SESSION['errPassword'])){ echo $_SESSION['errPassword'];}unset($_SESSION['errPassword']); ?></span>  </div>
        </section>
        <span class="text-danger" aria-hidden="true">*<?php if(isset($_SESSION['errRegister'])){ echo $_SESSION['errRegister'];}unset($_SESSION['errRegister']); ?></span> 
      </fieldset>
      <footer class="text-right">
        <button type="submit" class="btn btn-info pull-right" name="register">Register</button>
        <a href="Login" class="button button-secondary">Login</a> </footer>
    </form>
  </div>
</div>
<!-- wrapper --> 

<!-- jQuery --> 
<script>
 
    $(document).ready(function(){
      $("#username").keyup(function(){
        
        var user=$(this).val();
        // alert($un);
        
        $.post("./Ajax/checkUsername",{un:user},function(data){
          // alert(data);
          // var x="";
          // if(data=='true'){
          //   x="Tài khoản đã tồn tại!";
          // }
          // else{
          //   x="Tài khoản hợp lệ";
          // }
          //  alert(Boolean(data));
          if(data==1){
            $("#messUn").html("<span class='text-danger'>Tài khoản đã tồn tại! Vui lòng nhập tên khác</span>");
          }
          else {
            $("#messUn").html("<span class='text-success'>Tài khoản hợp lệ</span>");
          }
         
          
          
        
        });
      });
    });
     
</script>
<!-- <script src="../dist/js/jquery.min.js"></script> 
<script src="../bootstrap/js/bootstrap.min.js"></script> 
<script src="../dist/js/ovio.js"></script> -->