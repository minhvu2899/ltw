<?php
class ShipperModel extends DB{
   
    
    public function insertShipper($ten,$diachi,$sdt,$trangthai){
        $sql="INSERT INTO shipper (ten,diachi,sdt,trangthai) values ('$ten','$diachi','$sdt','$trangthai')";
        $query = mysqli_query($this->con,$sql);
        return json_encode($query);
    }
    public function editShipper($id,$ten,$diachi,$sdt,$trangthai){
        $sql="update shipper set
                ten='$ten',
                diachi='$diachi',
                sdt='$sdt',
                
                trangthai='$trangthai'
                where id='$id'";
                $query=mysqli_query($this->con,$sql);
                return $query;
    }
    public function chitietShipper($id){
        $sql="select * from shipper where id='$id'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function chitietShipperByName($name){
        $sql="select * from shipper where ten='$name'";
        $query=mysqli_query($this->con,$sql);
       
        $row=mysqli_fetch_row($query);
        return $row;
    }
    public function getListShipper(){
        $sql="select * from shipper";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function xoaShipper($id){
        $sql="delete from shipper where id='$id'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function SearchShipper($str){
        $sql="SELECT * FROM shipper WHERE ten LIKE '%".$str."%'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
}

?>