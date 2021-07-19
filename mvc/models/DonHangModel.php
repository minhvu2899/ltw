<?php
class DonHangModel extends DB{
   
    
    public function insertDH($ten,$diachi,$sdt,$email,$soluongnhap){
        $sql="INSERT INTO nhacungcap (ten,diachi,sdt,email,soluongnhap) values ('$ten','$diachi','$sdt','$email','$soluongnhap')";
        $query = mysqli_query($this->con,$sql);
        return json_encode($query);
    }
    public function editDH($id,$ten,$diachi,$sdt,$email,$soluongnhap){
        $sql="update nhacungcap set
                ten='$ten',
                diachi='$diachi',
                sdt='$sdt',
                email='$email',
                soluongnhap='$soluongnhap'
                where id='$id'";
                $query=mysqli_query($this->con,$sql);
                return $query;
    }
    public function chitietDH($id){
        $sql="select * from nhacungcap where id='$id'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getListDH(){
        $sql="select * from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getListDonHang($begin,$end){
        $sql="select * from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and vanchuyen.ngaytao >='$begin' and vanchuyen.ngaytao <='$end'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getListDHShipper($id){
        $sql="select vanchuyen.idVD,vanchuyen.idDH,nhacungcap.ten,shipper.ten,vanchuyen.Total,vanchuyen.ngaytao,vanchuyen.status from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and shipper.id='$id'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getDHShipper($id){
        $sql="select vanchuyen.idVD,vanchuyen.idDH,nhacungcap.ten,shipper.ten,vanchuyen.Total,vanchuyen.ngaytao,vanchuyen.status from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and vanchuyen.idVD='$id'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getListDHBySoLuongNhap($begin,$end){
        // $sql="select nhacungcap.id,nhacungcap.ten,sum(vanchuyen.soluongnhap) from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and vanchuyen.ngaytao >='$begin' and vanchuyen.ngaytao <='$end' GROUP BY nhacungcap.id,nhacungcap.ten";
        $sql="SELECT nhacungcap.id,nhacungcap.ten,SUM(vanchuyen.`soluongnhap`)as soluong  FROM `vanchuyen`,nhacungcap where vanchuyen.IDNCC=nhacungcap.id and vanchuyen.ngaytao >='$begin' and vanchuyen.ngaytao <='$end' and vanchuyen.status='5' GROUP BY vanchuyen.idNCC  
        ORDER BY soluong DESC";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getListDHByDoanhThu($begin,$end){
        // $sql="select nhacungcap.id,nhacungcap.ten,sum(vanchuyen.Total) from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and vanchuyen.ngaytao >='$begin' and vanchuyen.ngaytao <='$end' GROUP BY nhacungcap.id,nhacungcap.ten";
        $sql="SELECT nhacungcap.id,nhacungcap.ten,SUM(vanchuyen.`Total`)as tongtien  FROM `vanchuyen`,nhacungcap where vanchuyen.IDNCC=nhacungcap.id and vanchuyen.ngaytao >='$begin' and vanchuyen.ngaytao <='$end' and vanchuyen.status='5' GROUP BY vanchuyen.idNCC  
        ORDER BY tongtien DESC";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function getListDHByID($idNCC,$begin,$end){
        $sql="select vanchuyen.idVD,nhacungcap.id,nhacungcap.ten,shipper.ten,vanchuyen.soluongnhap,vanchuyen.Total,vanchuyen.ngaytao,vanchuyen.status from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and vanchuyen.ngaytao >='$begin' and vanchuyen.ngaytao <='$end' and nhacungcap.id='$idNCC' and vanchuyen.status='5' ";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function xoaNCC($id){
        $sql="delete from nhacungcap where id='$id'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function SearchNCC($str){
        $sql="SELECT * FROM nhacungcap WHERE ten LIKE '%".$str."%'";
        $query=mysqli_query($this->con,$sql);
        return $query;
    }
    public function Loc($trangthai){
        $sql="select * from vanchuyen,nhacungcap,shipper where vanchuyen.idNCC=nhacungcap.id and vanchuyen.idShipper=shipper.id and vanchuyen.status='$trangthai'";
        $query=mysqli_query($this->con,$sql);
        return $query;

    }
    public function UpdateDonHang($id,$status){
        $sql="update vanchuyen set
                
                status='$status'
                where idVD='$id'";
                $query=mysqli_query($this->con,$sql);
                return $query;
    }
}

?>