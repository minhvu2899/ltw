<?php
class User extends DB{
    public function GetSV(){
        //connnect db
        return "Vu Hong Minh";
    }
    public function checkQuyen($username){
        $sql="select * from users where username='$username'";
        $query=mysqli_query($this->con,$sql);
        $row=mysqli_fetch_row($query);
        return $row[8];
    }
    public function checkUsername($username){
        $sql="select * from users where username='$username'";
        $query=mysqli_query($this->con,$sql);
        $row=mysqli_num_rows($query);
        return $row;
    }
    public function chitietUser($username){
        $sql="select * from users where username='$username'";
        $query=mysqli_query($this->con,$sql);
       
        $row=mysqli_fetch_row($query);
        return $row;
    }
    public function checkLogin($username,$password){
        $sql = "select * from users where username = '$username' and password = '$password'";
       
        $query = mysqli_query($this->con,$sql);
        
        $num_rows = mysqli_num_rows($query);
        return json_encode($num_rows);
    }
    public function insertUSer($username,$password,$ten,$email,$sdt){
        $sql="INSERT INTO users (username,password,ten,email,sdt) values ('$username','$password','$ten','$email','$sdt')";
        $query = mysqli_query($this->con,$sql);
        return json_encode($query);
    }
    public function registerShipper($id,$username,$password,$ten,$sdt,$diachi,$quyen){
        $sql="INSERT INTO users (id,username,password,ten,sdt,diachi,quyen) values ('$id','$username','$password','$ten','$sdt','$diachi','$quyen')";
        $query = mysqli_query($this->con,$sql);
        return json_encode($query);
    }
    public function updateUser($username,$ten,$email,$sdt,$diachi,$file_name){
        $sql="update users set
                ten='$ten',
                
                email='$email',
                sdt='$sdt',
                diachi='$diachi',
                img='$file_name'
              
                where username='$username'";
                $query=mysqli_query($this->con,$sql);
                return $query;

    }
    public function DoiMatKhau($id,$password_new){
        $sql="update users set
                
                
               
                password='$password_new'
             
              
                where id='$id'";
                $query=mysqli_query($this->con,$sql);
                return $query;

    }

}

?>