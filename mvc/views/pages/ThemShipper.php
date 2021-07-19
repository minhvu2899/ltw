
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
    <form action="Shipper/ThemShipper/" class="col-form" novalidate method="POST">
    <!-- <div class="col-logo"><a href="../index.html"><img alt="" src="../dist/img/logo-lg.png"></a></div> -->
      <header>Thêm Shipper</header>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            
            <input class="form-control" placeholder="Tên shipper" type="text" name="ten" >
            <span class=" form-control-feedback" aria-hidden="true"></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
      
            <input class="form-control" placeholder="Địa chỉ" type="text" name="diachi" >
            <span class=" form-control-feedback" aria-hidden="true"></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
       
            <input class="form-control" placeholder="Số điện thoại" type="text" name="sdt" >
            <span class=" form-control-feedback" aria-hidden="true"></span> </div>
        </section>
      
        <section>
            
             <div class="form-group">
               <label for="">Trạng thái</label>
               <select class="form-control" name="trangthai" id="" value="<?php echo $shipper[4]?>">
                 <option value="2">Đang hoạt động</option>
                 <option  value="1">Đang rảnh</option>
                 <option  value="0">Đã nghỉ</option>
               </select>
             </div>
         
        </section>
       
    
      </fieldset>
      <footer class="text-right">
        <button type="submit" class="btn btn-info pull-right" name="addShipper">Thêm</button>
        <!-- <a href="Register" class="button button-secondary">Reset</a>  -->
      </footer>
    </form>
  </div>
      </div>
      