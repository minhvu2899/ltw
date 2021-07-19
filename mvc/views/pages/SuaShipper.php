<?php $shipper=$data['ShipperEdit']?>
<div class="content-header">
      <h1>Quản lí Shipper</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí Shipper</li>
      </ol>
    </div>
<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <div class="form-body">
    <form action="Shipper/SuaShipper/<?php echo $shipper[0]?>" class="col-form" novalidate method="POST">
    <!-- <div class="col-logo"><a href="../index.html"><img alt="" src="../dist/img/logo-lg.png"></a></div> -->
      <header>Sửa Shipper</header>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            
            <input class="form-control" placeholder="Tên shipper" type="text" name="ten" value="<?php echo $shipper[1]?>">
            <span class=" form-control-feedback" aria-hidden="true"></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
      
            <input class="form-control" placeholder="Địa chỉ" type="text" name="diachi" value="<?php echo $shipper[2]?>">
            <span class=" form-control-feedback" aria-hidden="true"></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
       
            <input class="form-control" placeholder="Số điện thoại" type="text" name="sdt" value="<?php echo $shipper[3]?>">
            <span class=" form-control-feedback" aria-hidden="true"></span> </div>
        </section>
      
        <section>
            
             <div class="form-group">
               <label for="">Trạng thái</label>
               <select class="form-control" name="trangthai" id="" value="<?php echo $shipper[4]?>">
                 <option <?php if($shipper[4]==2) echo "selected=\"selected\""?>value="2">Đang hoạt động</option>
                 <option <?php if($shipper[4]==1) echo "selected=\"selected\""?> value="1">Đang rảnh</option>
                 <option <?php if($shipper[4]==0) echo "selected=\"selected\""?> value="0">Đã nghỉ</option>
               </select>
             </div>
         
        </section>
       
    
      </fieldset>
      <footer class="text-right">
        <button type="submit" class="btn btn-info pull-right" name="EditShipper">Cập nhật</button>
        <!-- <a href="Register" class="button button-secondary">Reset</a>  -->
      </footer>
    </form>
  </div>
      </div>
      