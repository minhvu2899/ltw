<?php
if(isset($_POST['sapxep'])){
    echo $_POST['loaisapxep'];
}
?>
<div class="content-header">
      <h1>Quản lí nhà cung cấp</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí nhà cung cấp</li>
      </ol>
    </div>
<div class="container">
    <div class="row">
    <div class="col-md-12 d-flex justify-content-between">
          <div class="search-ncc">
              <a href="NhaCungCap/SearchNCC" class="btn btn-success">Tìm kiếm nhà cung cấp theo tên</a>
          </div>
          <form class="form-inline" action="NhaCungCap/SearchNCC" method="post">
            <div class="form-group">
           
              <input type="text" name="searchID" id="" class="form-control" placeholder="Tìm kiếm theo ID" aria-describedby="helpId">
              <button type="submit" class="btn btn-danger">Tìm kiếm</button>
            </div>
          </form>
    </div>
    </div>
    <div class="row my-3">
    <div class="col-md-6">
    <div class="list-ncc">
            <h2>Danh sách các nhà cung cấp</h2>
          </div>
         <div><a href="NhaCungCap/ThemNCC" class="btn btn-primary">Thêm NCC</a></div>
    </div>
    <div class="col-md-2">
    <div class="input-group d-flex ">
    <div class="input-group-append">
    
  </div>

  
  
</div>

    </div>
    <div class="col-md-3">
    <span class="btn btn-success" type="text" name="sapxep">Lọc</span>
            <form action="" method="post">
                <div class="input-group d-flex ">
                  <div class="input-group-append">
                  </div>
                <div>
                    <select onchange="this.options[this.selectedIndex].value && (window.location='NhaCungCap/LocNCC/'+this.options[this.selectedIndex].value);" class="custom-select" id="inputGroupSelect04" name="loaisapxep" style="height: 39px;">
                    <option selected value="">Chọn  nhóm hàng</option>
                    <option <?php if(isset($_SESSION['loc']) && $_SESSION['loc1']==1) {echo "selected=\"selected\"";} unset($_SESSION['loc1']);?> value="tieu-dung">Tiêu dùng</option>
                    <option <?php if(isset($_SESSION['loc']) && $_SESSION['loc2']==2) {echo "selected=\"selected\"";} unset($_SESSION['loc2']);?>value="do-uong">Đồ uống</option>
                    <option <?php if(isset($_SESSION['loc']) && $_SESSION['loc3']==3) {echo "selected=\"selected\"";} unset($_SESSION['loc3']);?>value="thuc-an-nhanh">Thức ăn nhanh</option>
                  </select>
                </div>
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
            
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
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
            }
          ?>
        </tbody>
      </table>
      </div>
    </div>
          
      </div>
    </div>
<!-- wrapper --> 

<!-- jQuery --> 

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="2px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","NhaCungCap/SearchNCC/"+str,true);
  xmlhttp.send();
}
</script>
<script src="../dist/js/jquery.min.js"></script> 
<script src="../bootstrap/js/bootstrap.min.js"></script> 
<script src="../dist/js/ovio.js"></script>