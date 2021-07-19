<div class="content-header">
      <h1>Thống kê nhà cung cấp</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Thống kê nhà cung cấp</li>
      </ol>
</div>
<div class="container">
 
    <form action="ThongKeNCC/ThongKeTheoSoLuongNhap" method="post">
    <div class="row m-auto">
    <div class="col-md-3">
      <div class="form-inline">
        <label for="">Từ</label>
        <input type="date"
          class="form-control" name="date-from" id="" aria-describedby="helpId" placeholder="" >          
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-inline">
        <label for="">Đến</label>
        <input type="date"
          class="form-control" name="date-to" id="" aria-describedby="helpId" placeholder="">
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-inline">
      <div class="input-group d-flex ">
    <div class="input-group-append">
  
  </div>
  <div>
    <select class="custom-select" id="inputGroupSelect04" name="loaithongke" style="height: 39px;">
    <option  value="">Chọn loại thống kê</option>
    <option <?php if(isset($_SESSION['ss']) && $_SESSION['ss']==1) echo "selected=\"selected\""?> value="1">Theo số lượng nhập</option>
    <option <?php if(isset($_SESSION['ss']) && $_SESSION['ss']==2) echo "selected=\"selected\""?>value="2">Theo doanh thu</option>
    
  </select>
   
  </div>
      </div>
      </div>
      </div>
      <div class="col-md-3">
       
          <div class="form-inline">
            <label for=""></label>
            <input class="btn btn-danger"type="submit" name="thongke" id="" class="form-control" placeholder="" aria-describedby="helpId" value="Xem thống kê">
        
          </div>
        
      </div>
     </div>
    </form>
    
     <div class="row">
     <div class="col-md-12">
    
   <table class="table">
  <thead>
    <tr>
      <?php if(isset($_POST['thongke'])){?>
      <th scope="col">Mã vận đơn</th>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Tên nhà cung cấp</th>
      <th scope="col">Tên shipper</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Tình trạng</th>
      <th>Hành động</th>
      <?php }?>
    </tr>
  </thead>
 
  <tbody> 
    <?php
    
    if(isset($data['ListDH'])){$listDH=$data["ListDH"];
    while($row=mysqli_fetch_array($listDH)){
    ?>
    <tr>
      <th scope="row"><?php echo $row[0]?></th>
      <td><?php echo $row[1]?></td>
      <td><?php echo $row[8]?></td>
      <td><?php echo $row[16]?></td>
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
        <?php }elseif($row[6]==4){ ?>
          <span class="badge badge-success">Đang hủy</span>
        <?php } ?>
      </td>
      
      <td>
        <a href="NhaCungCap/ChitietNCC/<?php echo $row[0] ?>" class="btn btn-info"><i class="fa fa-fw fa-eye"></i></a>
        <a href="NhaCungCap/SuaNCC/<?php echo $row[0] ?>" class="btn btn-danger"><i class="fa fa-fw fa-edit"></i></a>
        <a onclick="return confirm('Bạn có muốn xóa không')" href="NhaCungCap/XoaNCC/<?php echo $row[0]?>" class="btn btn-success"><i class="fa fa-fw fa-trash"></i></a>
      </td>
    </tr>
    <?php
      }}
    ?>
  </tbody>
</table>
      </div>
     </div>
  </div>
