<?php 

    require_once("connection.php");
    $query = " select * from leaderboard ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="lead.css" rel="stylesheet">
    <title>leaderboard</title>
</head>
<body class="bg-dark">
    

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-dark table-hover">
                        <h2> LEADERBOARD </h2> 
                            <tr>
                                <td> Player_Name </td>
                                <td> Rank </td>
                                <td> Rank Rating </td>
                                <td> Tier </td>
                                <td> Win  </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Player_Name = $row['Player_Name'];
                                        $Rank = $row['Rank'];
                                        $Rank_Rating = $row['Rank_Rating'];
                                        $Tier = $row['Tier'];
                                        $Wins = $row['Wins'];
                            ?>
                                    <tr>
                                        <td><?php echo $Player_Name ?></td>
                                        <td><?php echo $Rank ?></td>
                                        <td><?php echo $Rank_Rating ?></td>
                                        <td><?php echo $Tier ?></td>
                                        <td><?php echo $Wins ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>