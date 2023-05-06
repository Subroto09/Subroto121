<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from details where Game_Name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);     
        $row= mysqli_fetch_assoc($result);
        if(!$result->num_rows <1)
        {
            header("Location: insights.html");
            exit();
        }   
        else{
            header("location: invalid.php");
            exit();
        }   
?>  
