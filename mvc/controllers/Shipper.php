<?php
    class Shipper extends Controller{
        public $ship,$user;
        function __construct()
        {
            $this->ship=$this->model("ShipperModel");
            $this->user=$this->model("User");
        }
        function SayHi(){
            $this->GetAllShipper();
            $this->view(
                "Admin",
                [
                    
                    "Page"=>"ListShipper",
                    // "SV"=>$m->SinhVien()
                ]);

        }
        function ListShipper(){
            $kq=$this->ship->getListShipper();
           
           
            $this->view(
                "Admin",
                [
                    "Page"=>"ListShipper",
                    "ListShipper"=>$kq,
                    
                ]);    
        }
        function ThemShipper(){
            $this->view(
                "Admin",
                [
                    "Page"=>"ThemShipper",
                    
                    
                ]);   
            if(isset($_POST['addShipper'])){
                $ten=$_POST['ten'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
               
                $trangthai=$_POST['trangthai'];
                echo $ten;
                $kq=$this->ship->InsertShipper($ten,$diachi,$sdt,$trangthai);
                echo $kq;
                
                if($kq){
                    echo "<script>alert('Bạn đã thêm shipper thành công')</script>";
                    $shipper=$this->ship->chitietShipperByName($ten);
                    $id=$shipper[0];
                    echo $id;

                    $username="shipper".$shipper[0];
                    echo $username;
                    $register=$this->user->registerShipper($id,$username,md5('123456'),$ten,$sdt,$diachi,1);  
                    if($register){
                        echo "<script>alert('Bạn đã tạo thành công tài khoản cho shipper')</script>";
                    }
                   
                    echo '<script type="text/javascript">
                    window.location = "http://localhost/ltweb/Shipper/ListShipper"
               </script>';
                  
                }
            }
        }
        function SuaShipper($id){
            echo $id;
                $ship=$this->ship->chitietShipper($id);   
                $row= mysqli_fetch_array($ship); 
                $this->view(
                    "Admin",
                    [
                        "Page"=>"SuaShipper",
                        "ShipperEdit"=>$row
                    ]);
                          
            
              
            if(isset($_POST['EditShipper'])){
                $id1=$id;
                $ten=$_POST['ten'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $trangthai=$_POST['trangthai'];
               
                $kq=$this->ship->editShipper($id1,$ten,$diachi,$sdt,$trangthai);
                if($kq){
                    $_SESSION['edit']="Bạn đã sửa thành công";
                    echo "Thành công";
                    echo '<script type="text/javascript">
                    window.location = "http://localhost/ltweb/Shipper/ListShipper"
               </script>';
                }
            }
        }
        function XoaShipper($id){
            $kq=$this->ship->xoaShipper($id);
            if($kq){
                echo "Thành công";
                echo '<script type="text/javascript">
                window.location = "http://localhost/ltweb/Shipper/ListShipper"
           </script>';
            }
        }
        function GetAllShipper(){
            $kq=$this->ship->getListShipper();
           
           
            $this->view(
                "Admin",
                [
                    "Page"=>"ListShipper",
                    "ListShipper"=>$kq,
                    
                ]);
        }
    }
?>