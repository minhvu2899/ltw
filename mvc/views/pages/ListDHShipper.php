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
      <th>Hành động</th>
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
      <td><?php if($row[6]==1){ ?>
          <span class="badge-danger badge">Đang xử lí</span>
        <?php } elseif($row[6]==2){?>
          <span class="badge badge-primary">Đã xử lí</span>
        <?php } elseif($row[6]==3){?>
          <span class="badge badge-info">Đang lấy hàng</span>
        <?php } elseif($row[6]==4){?>
          <span class="badge badge-success">Đang giao hàng</span>
          <?php }elseif($row[6]==5){ ?>
          <span class="badge badge-success">Đã nhận hàng</span>
        <?php } elseif($row[6]==6){ ?>
          <span class="badge badge-danger">Đã hủy</span>
          <?php } ?>
      </td>
      
      <td>
        <a href="Users/UpdateDonHang/<?php echo $row[0] ?>" class="btn btn-info"><i class="fa fa-fw fa-edit"></i></a>
        
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
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