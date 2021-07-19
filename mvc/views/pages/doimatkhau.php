<?php


if(isset($data['User'])){
    $user=$data['User'];
}
?>
<section id=contact>
    <div class="container mb-5">
      <header class="header-title text-center ">
        <h3 class="">Đổi mật khẩu</h3>
    </header>
      <div class="row border " style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">
      <div class="col-md-3"></div>
        <div class="col-md-6 my-4 ">

          

          <form action="Users/DoiMatKhau" class="p-5 bg-white " method="POST">
           

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black  font-weight-bold" for="" >Mật khẩu cũ:</label>
                <input type="password" name="password_old" class="form-control" placeholder="Nhập mật khẩu cũ">
              </div>
              
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="email">Mật khẩu mới</label> 
                <input type="password" id="email" class="form-control" name="password_new" placeholder="Nhập mật khẩu mới" >
              </div>
            </div>

         

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="message">Nhập lại mật khẩu mới</label> 
                <input type="password" id="sdt" name="repassword" class="form-control" placeholder="Nhập lại mật khẩu mới" >

              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Xác nhận" class="btn btn-danger py-2 px-4 text-white" name="updatePassword">
              </div>
            </div>
            <span class="badge badge-success"><?php if(isset($_SESSION['updateUser'])) echo $_SESSION['updateUser'];?></span>

          </form>
        
        </div>
      
       
      </div>
      
    </div>
    </div>
  
   </section>
   <script>
       const header = document.querySelector('.navbar');
const colornav=document.querySelectorAll('link-text')
	var scroll_position = window.scrollY;
	
		header.style.backgroundImage="linear-gradient(to right, #a8caba 0%, #5d4157 100%)";
		colornav.style.color='#fff';
		document.getElementById("navbar").style.marginTop = "0";
   </script>
   <!-- <script src="http://localhost/Minh/public/js/app.js"></script> -->
 