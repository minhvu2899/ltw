<?php
class NhaCungCapModel extends DB
{
    public function insertNCC($ten, $diachi, $sdt, $email, $nhomhang)
    {
        $sql = "INSERT INTO nhacungcap (ten,diachi,sdt,email,nhom) values ('$ten','$diachi','$sdt','$email','$nhomhang')";
        $query = mysqli_query($this->con, $sql);
        return json_encode($query);
    }
    public function editNCC($id, $ten, $diachi, $sdt, $email, $nhom)
    {
        $sql = "update nhacungcap set
                ten='$ten',
                diachi='$diachi',
                sdt='$sdt',
                email='$email',
                nhom='$nhom'
                
               
                where id='$id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function chitietNCC($id)
    {
        $sql = "select * from nhacungcap where id='$id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function getListNCC()
    {
        $sql = "select * from nhacungcap";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function xoaNCC($id)
    {
        $sql = "delete from nhacungcap where id='$id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function SearchNCC($str)
    {
        $sql = "SELECT * FROM nhacungcap WHERE ten LIKE '%" . $str . "%'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function SearchNCCByID($id)
    {
        $sql = "SELECT * FROM nhacungcap WHERE id='$id'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function SapXepSoLuongNhap()
    {
        $sql = "SELECT * FROM nhacungcap ORDER BY soluongnhap ASC";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function SapXepDuNo()
    {
        $sql = "SELECT * FROM nhacungcap ORDER BY tienno ASC";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function SapXepTen()
    {
        $sql = "SELECT * FROM nhacungcap ORDER BY ten ASC";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function Loc($loai)
    {
        $sql = "select * from nhacungcap where nhom='$loai'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
    public function TKNhomNCC()
    {
        $sql = "SELECT COUNT(nhacungcap.id) as soluong, nhacungcap.nhom from nhacungcap GROUP BY nhacungcap.nhom";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }
}
