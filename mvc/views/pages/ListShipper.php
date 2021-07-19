<?php if(isset($_SESSION['edit'])){ echo "<div class='bg-danger' style='height: 50px;'><span class='label-success align-item-center'>";echo $_SESSION['edit'];echo "</span> </div>"; unset($_SESSION['edit']);}?>
<div class="content-header">
      <h1>Quản lí Shipper</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí Shipper</li>
      </ol>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
         
          <a href="Shipper/ThemShipper" class="btn btn-primary" >
  Thêm Shipper
</a>

<!-- Modal -->

</div>
          <div class="list-ncc">
            <h2>Danh sách các shipper</h2>
          </div>
  <table class="table" id="datatable">
  <thead>
    <tr>
      <th scope="col">Mã Shipper</th>
      <th scope="col">Tên</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SĐT</th>
      
      <th><a href="Shipper/ThemShipper" class="btn btn-primary"><i class="fa fa-fw fa-ambulance"></i>Thêm Shipper</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $listShipper=$data["ListShipper"];
    while($row=mysqli_fetch_array($listShipper)){
    ?>
    <tr>
      <th scope="row"><?php echo $row[0]?></th>
      <td><?php echo $row[1]?></td>
      <td><?php echo $row[2]?></td>
      <td><?php echo $row[3]?></td>
   
   
      <td>
        
      <a href="Shipper/SuaShipper/<?php echo $row[0] ?>" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>
        <a onclick="return confirm('Bạn có muốn xóa không')" href="Shipper/XoaShipper/<?php echo $row[0]?>" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
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

    </div>
</div>
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