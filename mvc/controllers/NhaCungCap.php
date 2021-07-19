<?php
    
    class NhaCungCap extends Controller{
        public $ncc,$dh;
        function __construct()
        {
            $this->ncc=$this->model("NhaCungCapModel");
            $this->dh=$this->model("DonHangModel");
        }
        function SayHi(){
            
           $this->GetAllNCC();
            $this->view(
                "Admin",
                [
                    
                    "Page"=>"ListNCC",
                    // "SV"=>$m->SinhVien()
                ]);

        }
        function LocNCC($loai){
            if($loai==""){
                $this->view(
                    "Admin",
                    [
                        "Page"=>"ListNCC",
                        
                        
                    ]);
            }
            else if($loai==="tieu-dung"){
                    $_SESSION['loc1']=1;
                    $kq=$this->ncc->Loc(1);
                }elseif($loai==="do-uong"){
                    $_SESSION['loc2']=2;
                    $kq=$this->ncc->Loc(2);    
                }elseif($loai=="thuc-an-nhanh"){
                    $_SESSION['loc3']=3;
                    $kq=$this->ncc->Loc(3);
                }   
                $this->view(
                    "Admin",
                    [
                        "Page"=>"ListNCC",
                        "ListNCC"=>$kq
                        
                    ]);
            
            }
        function ThemNCC(){
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
                $nhomhang=$_POST['nhomhang'];
                if(empty($ten)){
                    $_SESSION['errtenNCC']="Vui lòng không để trống tên nhà cung cấp";
                    echo "<script>alert('Vui lòng không để trống tên nhà cung cấp')</script>";
                    return;
                }
                if(empty($diachi)){
                    $_SESSION['errdiachiNCC']="Vui lòng không để trống địa chỉ";
                    return;
                }
                if(empty($sdt)){
                    $_SESSION['errsdtNCC']="Vui lòng không để trống số điện thoại";
                    return;
                }
                else{
                    if (!preg_match('/^0(3\d{8}|9\d{8}|5\d{8}|8\d{8}|7\d{8})$/', $sdt)){
                        $_SESSION['errsdtNCC']="Số điện thoại không hợp lệ";
                        return;
                    }
                   
                    
                }
                if(empty($email)){
                    $_SESSION['erremailNCC']="Vui lòng không để trống email";
                    return;
                }
                else{
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $_SESSION['erremailNCC'] = "Địa chỉ email không hợp lệ";
                        return;
                    }
                     
                }
                if(empty($nhomhang)){
                    $_SESSION['errnhomNCC']="Vui lòng chọn nhóm hàng";
                    return;
                }


                $kq=$this->ncc->InsertNCC($ten,$diachi,$sdt,$email,$nhomhang);
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
               
                $nhomhang=$_POST['nhom'];
               
                if(empty($ten)){
                    echo '<script type="text/javascript">
                    alert("Vui lòng không để trống tên nhà cung cấp!");
                     </script>';
                    $_SESSION['errtenNCC']="Vui lòng không để trống tên nhà cung cấp";
                    return;
                }
                if(empty($diachi)){
                    echo '<script type="text/javascript">
                    alert("Vui lòng không để trống địa chỉ!");
                     </script>';
                    $_SESSION['errdiachiNCC']="Vui lòng không để trống địa chỉ";
                    return;
                }
                if(empty($sdt)){
                    echo '<script type="text/javascript">
                    alert("Vui lòng không để trống số điện thoại!");
                     </script>';
                    $_SESSION['errsdtNCC']="Vui lòng không để trống số điện thoại";
                    return;
                }
                if(empty($email)){
                    echo '<script type="text/javascript">
                    alert("Vui lòng không để trống email!");
                     </script>';
                    $_SESSION['erremailNCC']="Vui lòng không để trống email";
                    return;
                }
                if(empty($nhomhang)){
                    echo '<script type="text/javascript">
                    alert("Vui lòng chọn nhóm hàng!");
                     </script>';
                    $_SESSION['errnhomNCC']="Vui lòng chọn nhóm hàng";
                    return;
                }
                $kq=$this->ncc->editNCC($id,$ten,$diachi,$sdt,$email,$nhomhang);
                if($kq){
                    $_SESSION['mesedit']="Sửa thành công";
                    echo "Thành công";
                    echo '<script type="text/javascript">
                   alert("Bạn đã sửa thành công!");
                    </script>';
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
            if(isset($_POST['searchID'])){
                $id=$_POST['searchID'];
                echo $id;
                $kq=$this->ncc->SearchNCCByID($id);
                $this->view(
                    "Admin",
                    [
                        "Page"=>"ListNCC",
                        "ListNCC"=>$kq,
                        
                    ]);
            }
            else{
            $this->view(
                "Admin",
                [
                    "Page"=>"SearchNCC",
                    
                ]);
            }
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
                    <a onclick='return confirm(\'Bạn có muốn xóa không\')' href='NhaCungCap/XoaNCC/$row[0] ' class='btn btn-success'>Xóa</a>
                </td>
            </tr>";
                 }
             echo "</tbody></table>";
           
              }
        }
            
    
        function GetAllNCC(){
            $kq=$this->ncc->getListNCC();
           
           
            $this->view(
                "Admin",
                [
                    "Page"=>"ListNCC",
                    "ListNCC"=>$kq,
                    
                ]);
        }
        function ChitietNCC($id){
            $this->view(
                "Admin",
                [
                    "Page"=>"chitietNCC",
                   
                    
                ]);
        }
        function SapXep($loai){
            if($loai==1){
            $_SESSION['ss1']=1;
            $kq=$this->ncc->SapXepSoLuongNhap();
            }
            else if($loai==2){
                $_SESSION['ss2']=2;
                $kq=$this->ncc->SapXepDuNo();    
            }
            else if($loai==3){
                $_SESSION['ss3']=3;
                $kq=$this->ncc->SapXepTen();
            }
          
            
            $this->view(
                "Admin",
                [
                    "Page"=>"ListNCC",
                    "ListNCC"=>$kq,
                    
                ]);
        }

        function ThongKeNCC(){
            
            
            if(isset($_POST['thongke'])){
                $begin=  $_POST['date-from']   ;
                $end=$_POST['date-to'];
                $_SESSION['date-from']=$begin;
                $_SESSION['date-to']=$end;
                $loaithongke=$_POST['loaithongke'];
                // echo "<script>alert($loaithongke)</script";
                if($loaithongke==1){
                    $kq=$this->dh->getListDHBySoLuongNhap($begin,$end);
                    $_SESSION['thongke']="1";
                    $this->view(
                        "Admin",
                        [
                            "Page"=>"TKNCCTheoSoLuong",
                            "ListDH"=>$kq
                            
                        ]);
                }
                else if($loaithongke==2){
                    $kq=$this->dh->getListDHByDoanhThu($begin,$end);
                    $_SESSION['thongke']="2";
                    $this->view(
                        "Admin",
                        [
                            "Page"=>"TKNCCTheoSoLuong",
                            "ListDH"=>$kq
                            
                        ]);
                }
               
            }
           
           else{
            $this->view(
                "Admin",
                [
                    "Page"=>"ThongKeNCC",
                    
                    
                ]);
           }
         
        }
        function ChiTietTK($id){
            $begin=$_SESSION['date-from'];
            $end=$_SESSION['date-to'];
            $kq=$this->dh->getListDHByID($id,$begin,$end);
          
            $this->view(
                "Admin",
                [
                    "Page"=>"chitietTK",
                    "ListDH"=>$kq
                    
                ]);
        }
        function Loc(){
            $this->view(
                        "Admin",
                        [
                            "Page"=>"LocNCC",
                            
                            
                        ]);
            
            
        }
        // function LocNCC1($loai){
        //     if($loai==="tieu-dung"){
        //         // $_SESSION['loc']=1;
        //         $kq=$this->ncc->Loc(1);
        //     }elseif($loai==="do-uong"){
        //         // $_SESSION['loc']=2;
        //         $kq=$this->ncc->Loc(2);    
        //     }elseif($loai==1){
        //         // $_SESSION['loc']=3;
        //         $kq=$this->ncc->Loc(3);
        //     }   
        //     $this->view(
        //         "Admin",
        //         [
        //             "Page"=>"LocNCC",
        //             "ListNCC"=>$kq
                    
        //         ]);
        
        // }
       
        
    }
?>