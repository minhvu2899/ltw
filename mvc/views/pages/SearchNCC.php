<div class="content-header">
      <h1>Quản lí nhà cung cấp</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Quản lí nhà cung cấp</li>
      </ol>
    </div>
<div class="container">
    <div class="row">
    <div class="col-md-12">
          <div class="search-ncc">
          <form class="form-inline text-center">
    <input onkeyup="showResult(this.value)" class="form-control mr-sm-2 ml-2" type="search" placeholder="Tìm kiếm nhà cung cấp" aria-label="Search" style="width:570px;">
    </
   
    
    </div>
  </form>
          </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div><h2 id="ketqua" class="text-center" style="display:none">Kết quả tìm được là:</h2></div>
    <div id="livesearch">
      </div>
    </div>
    <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    document.getElementById("ketqua").style.display="none";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        document.getElementById("ketqua").style.display="block";
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
   
  }
  xmlhttp.open("GET","NhaCungCap/SearchNCC1/"+str,true);
  xmlhttp.send();
}
</script>