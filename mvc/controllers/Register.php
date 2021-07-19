<?php
    class Register extends Controller{
        public $user;
        public function __construct() {
            $this->user = $this->model("User");
        }
        function SayHi(){
            $this->RegisterUser();
            $this->view(
                "Login",
                [
                    
                    "Page"=>"register",
                    // "SV"=>$m->SinhVien()
                ]);

        }
       
        function RegisterUser(){
          
            if(isset($_POST['register'])){
                $ten=$this->test_input($_POST['ten']);
                $email=$this->test_input($_POST['email']);
                $sdt=$this->test_input($_POST['sdt']);
                $username=$this->test_input($_POST['username']);
                $password=trim($_POST['password']);
                $password=md5($password);
                if(empty($ten)){
                    $_SESSION['errTen']="Vui lòng không để trống ten";
                    return;
                }
                 if(empty($email)){
                    $_SESSION['errEmail']="Vui lòng không để trống email";
                    return;
                }
                else{
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $_SESSION['errEmail'] = "Địa chỉ email không hợp lệ";
                        return;
                    }
                     
                }
                
                if(empty($sdt)){
                    $_SESSION['errSDT']="Vui lòng không để trống số điện thoại";
                    return;
                }
                else{
                    if (!preg_match('/^0(3\d{8}|9\d{8}|5\d{8}|8\d{8}|7\d{8})$/', $sdt)){
                        $_SESSION['errSDT']="Số điện thoại không hợp lệ";
                    }
                    
                }
                 if(empty($username)){
                    $_SESSION['errUsername']="Vui lòng không để trống username";
                    return;
                }
                if(empty($password)){
                    $_SESSION['errPassword']="Vui lòng không để trống password";
                    return;
                }
              
                    if($this->user->checkUsername($username)==0){
                        $kq=$this->user->insertUSer( $username,$password,$ten,$email,$sdt);
                        if($kq){
                            echo '<script type="text/javascript">
                            alert("Bạn đã đăng kí thành công!");
                             </script>';   
                             echo '<script type="text/javascript">
                             window.location = "http://localhost/ltweb/Login"
                        </script>';
                        }     
                    }
                    else{
                        $_SESSION['errRegister']="Tên tài khoản đã tồn tại!";
                    }
                    
                   
               
            }
            
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    }
?>