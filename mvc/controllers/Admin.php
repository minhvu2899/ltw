<?php
    class Admin extends Controller{
        public $m,$dh,$ncc;
        function __construct()
        {
            $this->m=$this->model("User");
            $this->dh=$this->model("DonHangModel");
            $this->ncc=$this->model("NhaCungCapModel");
        }
        function SayHi(){
            $kq=$this->ncc->getListNCC();
           
           
            $this->view(
                "Admin",
                [
                    "Page"=>"ListNCC",
                    "ListNCC"=>$kq,
                    
                ]);
        }
        function Profile(){
           
            if(isset($_SESSION['admin'])){
                $kq=$this->m->chitietUser($_SESSION['admin'][1]);
                $this->view(
                    "Admin",
                    [
                      
                        "Page"=>"profile",
                        "User"=>$kq
                    ]);
            }
        //     else{
        //         echo '<script type="text/javascript">
        //         window.location = "http://localhost/ltweb/"
        //    </script>';
        //     }
           

        }
        function CapNhatProfile(){
           if(isset($_POST['updateprofile']) && isset($_SESSION['admin'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $diachi=$_POST['diachi'];
                $username=$_SESSION['admin'][1];
                if(isset($_FILES['img'])){
                    $img=$_FILES['img'];
                    $file_name=$img['name'];
                    move_uploaded_file($img['tmp_name'],"./public/images/$file_name");
                }
                
                $kq=$this->m->updateUser($username,$name,$email,$sdt,$diachi,$file_name);
                if($kq){
                    echo "Thành công";
                    $_SESSION['updateUser']="Bạn đã cập nhật thông tin thành công";
                    $this->Profile();
                   
                }
                else{
                    echo "Thất bại";
                }
            }  
        }
    }
?>