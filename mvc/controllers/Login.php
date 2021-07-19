<?php
    class Login extends Controller{
        public $user;
        public function __construct() {
            $this->user = $this->model("User");
        }
        function SayHi(){
            $this->LoginUser();
            $this->view(
                "Login",
                [
                    
                    "Page"=>"login",
                    // "SV"=>$m->SinhVien()
                ]);

        }
        function LoginUser(){
          
            if(isset($_POST['login'])){
                $username=$_POST['username'];
                $password=trim($_POST['password']);
                if(empty($username)){
                    $_SESSION['errUsername']="Vui lòng không để trống username";
                    return;
                }
               
                if(empty($password)){
                    $_SESSION['errPassword']="Vui lòng không để trống password";
                    return;
                }
              
                // echo $username;
                // echo $password;
                if($this->user->checkUsername($username)==0){
                    $_SESSION['errLogin']="Tên tài khoản không tồn tại!";
                }
                else{
                    $user=$this->user->chitietUser($username);
                    echo $password;
                    echo "<br>";
                    // echo $user[2];
                    //  var_dump(password_verify("123456",$user[2]));
                    //  die();

                    if(md5($password)==$user[2]){
                       
                        if($this->user->checkQuyen($username)==2){
                          
                       $_SESSION['admin']=$user;
                        header("location:http://localhost/ltweb/Admin/");
                        }
                        else if($this->user->checkQuyen($username)==1){
                            
                            $_SESSION['user']=$user;
                            $_SESSION['shipper']=$user[0];
                            header("location:http://localhost/ltweb/");
                        }
                        else if($this->user->checkQuyen($username)==0){
                            $_SESSION['user']=$user;
                            header("location:http://localhost/ltweb/");
                        }
                    }
                    else{
                        echo "Thất bại";
                        $_SESSION['errLogin']="Mật khẩu bạn nhập chưa đúng vui lòng thử lại!";
                    }
                    // $kq=$this->user->checkLogin( $username,$password);
                    // // echo $tong." ";
                    // // $quyen=$this->user->checkQuyen($username);
                    // // echo $quyen;
                    
                    // if($kq>0){
                    //     if($this->user->checkQuyen($username)==1){
                    //         $user=$this->user->chitietUser($username);    
                    //    $_SESSION['admin']=$user;
                    //     header("location:http://localhost/ltweb/Admin/");
                    //     }
                    //     else{
                    //         $user=$this->user->chitietUser($username);
                    //         $_SESSION['user']=$user;
                    //         header("location:http://localhost/ltweb/");
                    //     }
                    // }
                    // else{
                    //     $_SESSION['errLogin']="Mật khẩu bạn nhập chưa đúng vui lòng thử lại!";
                    // }
                }
            }
            
        }
        function Logout(){
            unset($_SESSION['admin']);
            unset($_SESSION['user']);
            unset($_SESSION['shipper']);
            header("location:http://localhost/ltweb/");
        }
    }
?>