<?php
$servername="localhost";
$username="root";
$password="";
$database="valstat";

$conn=mysqli_connect($servername,$username,$password,$database);

$name=$_POST['inname'];
$sql="insert into player_info (Game_Name,Player_Tag,Top_Agent) values ('".$name."','".$_POST['intag']."','".$_POST['inagent']."');";
//$sql="delete from player_info where Game_Name='".$name."';";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Cannot connect".mysqli_error($conn);
}
else
{
   header("location: insuc.php");
  
}

$sql="insert into performance (Player_Tag,Peak_Rating,Playtime,KDR) values ('".$_POST['intag']."','".$_POST['incr']."','".$_POST['intime']."','".$_POST['inkd']."');";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Cannot connect".mysqli_error($conn);
}


$sql="insert into leaderboard (Player_Name,Tier,Wins) values ('".$_POST['inname']."','".$_POST['inpr']."','".$_POST['inw']."');";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Cannot connect".mysqli_error($conn);
}

?>