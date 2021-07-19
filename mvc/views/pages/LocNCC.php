<div class="content-header">
      <h1>Quản lí nhà cung cấp</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí nhà cung cấp</li>
      </ol>
</div>
<div class="container">
    <div class="row">
      
        <div class="col-md-4">
            <div class="form-group">
                <label for="" class="text-bold">Dư nợ</label>
                    <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
         
           </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label for="" class="text-bold"></label>
            <input type="text"
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
        
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã NCC</th>
            <th scope="col">Tên</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">SĐT</th>
            <th scope="col">Email</th>
            <th scope="col">Nhóm hàng</th>
        
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($data['ListNCC'])){
          $listNCC=$data["ListNCC"];
          while($row=mysqli_fetch_array($listNCC)){
          ?>
          <tr>
            <th scope="row"><?php echo $row[0]?></th>
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <td><?php echo $row[3]?></td>
            <td><?php echo $row[4]?></td>
            <td>    <?php if($row[5]==1){ ?>
          <span class="label-danger label">Tiêu dùng</span>
        <?php } elseif($row[5]==2){?>
          <span class="label label-primary">Đồ uống</span>
        <?php } elseif($row[5]==3){?>
          <span class="label label-success">Thức ăn nhanh</span>
        <?php }?></td>
           
            <td>
              <!-- <a href="NhaCungCap/ChitietNCC/<?php echo $row[0] ?>" class="btn btn-info"><i class="fa fa-fw fa-eye"></i></a> -->
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