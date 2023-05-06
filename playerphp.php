<?php
$conn=mysqli_connect("localhost","root","","valstat");
$pname=document.querySelector('pname');
$sql="select Game_Name from player_info here Game_Name='cget';";
$result=$conn->query(sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
      $pname= $row["Game_Name"];
    }
}
?>