<?php
session_start();
$conn=mysqli_connect("localhost","root","","valstat");
$n=$_POST['uname'];
$p=$_POST['upass'];
$sql="select role from details where Game_Name='".$n."' && password='".$p."';";
$result=$conn->query($sql);
$row= mysqli_fetch_assoc($result);
if(!$result->num_rows <1)
{
    if($row['role']=='admin')
    {
        $_SESSION['admin']=1;
        header("location: home2.php");
        exit();
    }
    if($row['role']=='team')
    {
        $_SESSION['admin']=2;
        header("location: home2.php");
         exit();
    }
    
}
else
{
    header("location: pnf.php");
    exit();
}

?>