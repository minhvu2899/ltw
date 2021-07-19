
<div class="content-header">
      <h1>Quản lí vận chuyển</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí vận chuyển</li>
      </ol>
    </div>
<div class="container">
    <div class="row mb-3">
    <div class="col-md-4">
         
          <div class="list-ncc">
            <h2>Danh sách các đơn hàng</h2>
          </div>
       
    </div>
    <div class="col-md-6">
           
            
                <div class="input-group d-flex ">
                <button class="btn btn-success">Lọc trạng thái:</button>
                  <div class="input-group-append">
                  </div>
                <div>
                    <select onchange="this.options[this.selectedIndex].value && (window.location='DonHang/Loc/'+this.options[this.selectedIndex].value);" class="custom-select" id="inputGroupSelect04" name="loaisapxep" style="height: 39px;">
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==0) echo "selected=\"selected\""?>  value="tat-ca">Tất cả</option>
                    
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==1) echo "selected=\"selected\""?>value="dang-xu-li">Đang xử lí</option>
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==2) echo "selected=\"selected\""?>value="da-xu-li">Đã xử lí</option>
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==3) echo "selected=\"selected\""?>value="dang-lay-hang">Đang lấy hàng</option>
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==4) echo "selected=\"selected\""?>value="dang-giao-hang">Đang giao hàng</option>
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==5) echo "selected=\"selected\""?>value="da-nhan-hang">Đã nhận hàng</option>
                    <option <?php if(isset($_SESSION['loctt']) && $_SESSION['loctt']==6) echo "selected=\"selected\""?>value="da-huy">Đã hủy</option>
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
      <td><?php echo $row[9]?></td>
      <td><?php echo $row[15]?></td>
      <td><?php echo $row[4]?></td>
      <td><?php echo $row[5]?></td>
      <td><?php if($row[7]==1){ ?>
          <span class="label-danger label">Đang xử lí</span>
        <?php } elseif($row[7]==2){?>
          <span class="label label-primary">Đã xử lí</span>
        <?php } elseif($row[7]==3){?>
          <span class="label label-info">Đang lấy hàng</span>
        <?php } elseif($row[7]==4){?>
          <span class="label label-success">Đang giao hàng</span>
        <?php }elseif($row[7]==5){ ?>
          <span class="label label-success">Đã nhận hàng</span>
        <?php } elseif($row[7]==6){ ?>
          <span class="label label-danger">Đã hủy</span>
          <?php } ?>
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