<?php


if(isset($data['User'])){
    $user=$data['User'];
}
?>
<section id=contact>
    <div class="container mb-5">
      <header class="header-title text-center ">
        <h3 class="">Danh sách đơn hàng</h3>
    </header>
      <div class="row border " style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">
   
   <div class="col-md-12">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã vận đơn</th>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Tên nhà cung cấp</th>
      <th scope="col">Tên shipper</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Tình trạng</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    
    $listDH=$data["ListDH"];
    while($row=mysqli_fetch_array($listDH)){
    ?>
    <tr>
      <th scope="row"><?php echo $row[0]?></th>
      <td><?php echo $row[1]?></td>
      <td><?php echo $row[2]?></td>
      <td><?php echo $row[3]?></td>
      <td><?php echo $row[4]?></td>
      <td><?php echo $row[5]?></td>
      <td>
        <form action="Users/UpdateDonHang/<?php echo $row[0]?>" method="POST">
      <div class="form-group">
               
               <select class="form-control" name="status" id="" >
               
               <option value="">Chọn trạng thái</option>
                    <option value="1">Đang xử lí</option>
                    <option value="2">Đã xử lí</option>
                    <option value="3">Đang lấy hàng</option>
                    <option value="4">Đang giao hàng</option>
                    <option value="5">Đã nhận hàng</option>
                    <option value="6">Đã hủy</option>
               </select>
             </div>
             <button type="submit" class="btn btn-info" name="updateStatus">Cập nhật</button>       
    </form>
      </td>
      
     
      
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
      </div>
   
      
       
      </div>
      <div class="row">
          <div class="col-md-12">
              <span><?php if(isset($_SESSION['updateStatus'])) echo $_SESSION['updateStatus'];?></span>
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