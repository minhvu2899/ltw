<div class="wrapper">
  <div class="form-body">
    <form action="./Login/" class="col-form"  method="POST">
    <div class="col-logo"><a href="../index.html"><img alt="" src="../dist/img/logo-lg.png"></a></div>
      <header>Đăng nhập</header>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Tài khoản</label>
            <input class="form-control" placeholder="E-mail" type="text" name="username" id="username"value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">
            <div id="messUn"></div>
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errUsername'])){ echo $_SESSION['errUsername'];unset($_SESSION['errUsername']);} ?></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Mật khẩu</label>
            <input class="form-control" placeholder="Password" type="password" name="password" >
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errPassword'])) echo $_SESSION['errPassword']; unset($_SESSION['errPassword']); ?></span> </div>
        </section>
        <section>
          <div class="row">
            <div class="col-md-6 checkbox"> <a href="forgot-password.html" class="modal-opener">Quên mật khẩu?</a> </div>
            <div class="col-md-6 text-right">
              <label class="checkbox">
                <input name="remember" checked="" type="checkbox">
                <i></i>Ghi nhớ đăng nhập</label>
               
            </div>
            <span class="text-danger" aria-hidden="true"><?php if(isset($_SESSION['errLogin'])){echo $_SESSION['errLogin'];} unset($_SESSION['errLogin']);?></span>
          </div>
        </section>
      </fieldset>
      <footer class="text-right">
        <button type="submit" class="btn btn-info pull-right" name="login">Đăng nhập</button>
        <a href="Register" class="button button-secondary">Đăng kí</a> </footer>
       
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
     
       if(data==0){
        $("#messUn").html("<span class='text-danger'>Tài khoản không tồn tại</span>");
        
       }
       else {
        $("#messUn").html("<span class='text-success'>Tài khoản hợp lệ</span>");
       }
      
       
       
     
     });
   });
 });
  
</script>