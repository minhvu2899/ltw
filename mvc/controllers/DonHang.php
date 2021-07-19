<?php
    
    class DonHang extends Controller{
        public $dh;
        function __construct()
        {
            $this->dh=$this->model("DonHangModel");
        }
        function SayHi(){
           $this->GetAllDH();
            $this->view(
                "Admin",
                [
                    
                    "Page"=>"ListDonHang",
                    // "SV"=>$m->SinhVien()
                ]);

        }
        function ThemDH(){
            $this->view(
                "Admin",
                [
                    "Page"=>"ThemNCC"
                ]);
            if(isset($_POST['addNCC'])){
                $ten=$_POST['ten'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $soluongnhap=$_POST['soluongnhap'];
                $kq=$this->ncc->InsertNCC($ten,$diachi,$sdt,$email,$soluongnhap);
                echo $kq;
                
                if($kq){
                      
                   
                    echo "Thành công";
                    echo '<script type="text/javascript">
                    window.location = "http://localhost/ltweb/NhaCungCap/ListNCC"
               </script>';
                  
                }
            }
        }
        function SuaNCC($id){
                echo $id;
                $ncc=$this->ncc->chitietNCC($id);   
                $row= mysqli_fetch_array($ncc); 
                $this->view(
                    "Admin",
                    [
                        "Page"=>"SuaNCC",
                        "NCCEdit"=>$row
                    ]);
                          
            
              
            if(isset($_POST['editNCC'])){
                $ten=$_POST['ten'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $soluongnhap=$_POST['soluongnhap'];
                $kq=$this->ncc->editNCC($id,$ten,$diachi,$sdt,$email,$soluongnhap);
                if($kq){
                    echo "Thành công";
                    echo '<script type="text/javascript">
                    window.location = "http://localhost/ltweb/NhaCungCap/ListNCC"
               </script>';
                }
            }
        }
        function xoaNCC($id){
            $kq=$this->ncc->xoaNCC($id);
            if($kq){
                echo "Thành công";
                echo '<script type="text/javascript">
                window.location = "http://localhost/ltweb/NhaCungCap/ListNCC"
           </script>';
            }
        }
        function SearchNCC(){
            $this->view(
                "Admin",
                [
                    "Page"=>"SearchNCC",
                    
                ]);
        }
        function SearchNCC1($str){
            
            $kq=$this->ncc->SearchNCC($str);
           if(mysqli_num_rows($kq)==0){ echo "Không tìm thấy kết quả";}
            else{
                echo   "<table class='table'>
                        <thead>
                        <tr>
                            <th scope='col'> Mã NCC</th>
                            <th scope='col'>Tên</th>
                            <th scope='col'>Địa chỉ</th>
                            <th scope='col'>SĐT</th>
                            <th scope='col'>Số lượng nhập</th>
                            <th scope='col'>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>";
                        // <th><a href='NhaCungCap/ThemNCC' class='btn btn-primary'>Thêm NCC</a></th> 
                while($row = mysqli_fetch_array($kq)) {
        echo "<tr>
                 <th scope='row'>".$row[0]."</th>
                 <td>".$row[1]."</td>
                  <td>".$row[2]."</td>
                   <td>".$row[3]."</td>
                  <td>".$row[5]."</td>
                  <td>".$row[4]."</td>
                  <td>
                    <a href='NhaCungCap/SuaNCC/$row[0] 'class='btn btn-danger'>Edit</a>
                    <a onclick='return confirm('Bạn có muốn xóa không')' href='NhaCungCap/XoaNCC/'. $row[0].' class='btn btn-success'>Xóa</a>
                </td>
            </tr>";
                 }
             echo "</tbody></table>";
           
              }
        }
            
    
        function GetAllDH(){
            $kq=$this->dh->getListDH();
           
            $this->view(
                "Admin",
                [
                    "Page"=>"ListDonHang",
                    "ListDH"=>$kq,
                    
                ]);
        }
        function ChitietNCC($id){
            $this->view(
                "Admin",
                [
                    "Page"=>"chitietNCC",
                   
                    
                ]);
        }
        function Loc($loai){

                if($loai==="dang-xu-li"){
                    $_SESSION['loctt']=1;
                    $kq=$this->dh->Loc(1);
                }elseif($loai==="da-xu-li"){
                    $_SESSION['loctt']=2;
                    $kq=$this->dh->Loc(2);    
                }elseif($loai=="dang-lay-hang"){
                    $_SESSION['loctt']=3;
                    $kq=$this->dh->Loc(3);
                }elseif($loai=="dang-giao-hang"){
                    $_SESSION['loctt']=4;
                    $kq=$this->dh->Loc(4);
                }elseif($loai=="da-nhan-hang"){
                    $_SESSION['loctt']=5;
                    $kq=$this->dh->Loc(5);
                } elseif($loai=="da-huy"){
                    $_SESSION['loctt']=6;
                    $kq=$this->dh->Loc(6);
                } elseif($loai=="tat-ca"){
                    $_SESSION['loctt']=0;
                    $kq=$this->dh->getListDH();
                }         
                $this->view(
                    "Admin",
                    [
                        "Page"=>"ListDonHang",
                        "ListDH"=>$kq,
                        
                    ]);
        }
    }
?>