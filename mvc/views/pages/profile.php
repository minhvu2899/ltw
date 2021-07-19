<?php


if(isset($data['User'])){
    $user=$data['User'];
}
?>
<section id=contact>
    <div class="container mb-5">
      <header class="header-title text-center ">
        <h3 class="">Thông tin cá nhân</h3>
    </header>
      <div class="row border " style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">
      <div class="col-md-3"></div>
        <div class="col-md-6 my-4 ">

          

          <form action="<?php if(isset($_SESSION['user'])){ echo "Users";} else if(isset($_SESSION['admin'])){echo "Admin";}?>/CapNhatProfile" class="p-5 bg-white " method="POST" enctype="multipart/form-data">
           

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black  font-weight-bold" for="fname" >Họ tên</label>
                <input type="text" name="name" class="form-control" placeholder="Họ" value="<?php echo $user[3];?>">
              </div>
              
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="email">Email</label> 
                <input type="email" id="email" class="form-control" name="email" placeholder="Nhập email của bạn" value="<?php echo $user[4];?>">
              </div>
            </div>

         

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="message">Số điện thoại</label> 
                <input type="subject" id="sdt" name="sdt" class="form-control" placeholder="Số điện thoại" value="<?php echo $user[5];?>">

              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="message">Địa chỉ</label> 
                <input type="subject" id="sdt" name="diachi" class="form-control" placeholder="Địa chỉ" value="<?php echo $user[6];?>">

              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="message">Ảnh</label> 
                <input type="file" id="sdt" name="img" class="form-control" placeholder="Địa chỉ" >

              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black  font-weight-bold" for="message">Ảnh</label> 
                <img src="<?php echo "./public/images/$user[7]";?>" alt="" style="width: 80px;height: 80px;">

              </div>
            </div>    
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Cập nhật" class="btn btn-danger py-2 px-4 text-white" name="updateprofile">
              </div>
            </div>
            

          </form>
          <span class="badge badge-success"><?php if(isset($_SESSION['updateUser'])) {echo $_SESSION['updateUser'];} unset($_SESSION['updateUser']); ?></span>
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