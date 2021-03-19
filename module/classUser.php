<?php


class classUser
{
    private $conect;
    public function __construct()
    {
        include "connectDatabase.php";
        $this->conect = new connectDatabase();
        $this->conect = $this->conect->connect();
    }

    public function getlistUser(){
        if(!$this->conect){
            return false;
        }else{
            $data = array(array());
            $sql = "SELECT * from user ";
            $getdata = mysqli_query($this->conect, $sql);
            if(mysqli_num_rows($getdata) <= 0) return false;
            else{
                $dem=0;
                while($linedata = mysqli_fetch_assoc($getdata)){
                    $data[$dem][0] = $linedata['id'];
                    $data[$dem][1] = $linedata['email'];
                    $data[$dem][2] = $linedata['password'];
                    $data[$dem][3] = $linedata['name'];
                    $data[$dem][4] = $linedata['phonenumber'];
                    $data[$dem][5] = $linedata['address'];
                    $dem++;
                }
            }
            return $data;
        }
        return false;
    }
    public function deleteUserByID($id)
    {
        $sql = "delete from user where id = $id";
        echo $sql;
        try {
            mysqli_query($this->conect, $sql);
            return true;
        }catch (Exception $e) {
            return false;
        }
    }
}

?>