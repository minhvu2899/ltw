<?php
    class Ajax extends Controller{
        public $UserModel;
        function __construct()
        {
            $this->UserModel=$this->model("User");
            $this->ncc=$this->model("NhaCungCapModel");
        }
        function checkUsername(){
            $un=$_POST['un'];
            $kq= $this->UserModel->checkUsername($un);
            if($kq==1){
                echo 1;
            }
            else echo 0;
        }
        function getTKNhomNCC(){
            $kq= $this->ncc->TKNhomNCC();
            $m= [];
            while($value = mysqli_fetch_array($kq)){
                $n =[];
                array_push($n,$value['soluong']);
                array_push($n,$value['nhom']);
                array_push($m,(object)$n);
            }
            echo json_encode($m);
        }
      
    }
?>