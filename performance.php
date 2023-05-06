<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="playercss.css">
    <link rel="icon" type="image/x-icon" href="vallogo.png"> 
    
</head>
<body>
    <?php
    session_start();
    $conn=mysqli_connect("localhost","root","","valstat");
    ?>
    <div class="topnav">

        <a href="home.php">Home</a>
        <a href="leads.html">Leaderboard</a>
        <a href="leads.html">Insights</a>
        <a href="about.html">About us</a>
        <a href="playerrep.php">Report</a>
        <div class="topnav-right">
                <a href="signout.php"></a>
        </div>

    </div>
    <div class="body">
        <?php
        $sql="select Top_Agent from player_info where Game_Name='".$_SESSION['name']."';";
        $result=$conn->query($sql);
        $row= mysqli_fetch_assoc($result);
        $_SESSION['tagent']=$row['Top_Agent'];
        if(strcmp($row['Top_Agent'],"Sage")==0)
        {
           echo "<img src='sage.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Brimstone")==0)
        {
            echo "<img src='brimstone.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Reyna ")==0)
        {
            echo "<img src='reyna.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Cypher")==0)
        {
            echo "<img src='cypher.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Sova")==0)
        {
            echo "<img src='sova.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Viper")==0)
        {
            echo "<img src='viper.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Phoenix")==0)
        {
            echo "<img src='phoenix.webp' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Killjoy")==0)
        {
            echo "<img src='killjoy.png' class='picon'>";
        }
        else if(strcmp($row['Top_Agent'],"Chamber")==0)
        {
            echo "<img src='Chamber_icon.webp' class='picon'>";
        }
        ?> 
        
        <h1 class="pname" name="pname" action="playerphp.php">
            <?php
            $sql="select Game_Name,Player_Tag from player_info where Game_Name='".$_SESSION['name']."';";
            $result=$conn->query($sql);
            $row= mysqli_fetch_assoc($result);
            echo $row['Game_Name'];
            ?>
        </h1>
    
    </div>
    <div class="pnav">

        <a href="player2.php">Overview</a>
        <a href="performance.php">Performance</a>
        <a href="matches.php">Matches </a>
        <a href="agents.php">Agents</a>
       

    </div>

    <div class="parent">
        <div class="achild">
            <p style="font-size: 30px; color: white;padding-top: 50px;">Current Rating:</p>
            <div class="CRating">
                
                    <?php
                    $sql="select Tier from leaderboard where Player_Name='".$_SESSION['name']."';";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    if(strcmp($row['Tier'],"Ascendant")==0)
                    {
                        echo "<img src='ascendant.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Iron")==0)
                    {
                        echo "<img src='iron.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Bronze")==0)
                    {
                        echo "<img src='bronze.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Silver")==0)
                    {
                        echo "<img src='silver.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Gold")==0)
                    {
                        echo "<img src='gold.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Platinum")==0)
                    {
                        echo "<img src='platinum.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Diamond")==0)
                    {
                        echo "<img src='diamond.webp' class='rank'>";
                    }
                    else if(strcmp($row['Tier'],"Radiant")==0)
                    {
                        echo "<img src='radiant.png' class='rank'>";
                    }
                    ?>
                <div class="flexrating">
                    <p class="rating" style="font-size:25px;color: white;">Rating:</p>
                    <p class="rating"  style="font-size: 20px;color: white; padding: 5px;">
                    <?php
                    $sql="select Tier from leaderboard where Player_Name='".$_SESSION['name']."';";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    echo $row['Tier'];
                    ?>
                    </p>
                 </div>
            </div>
            <p style="font-size: 30px; color: white; padding: 7px;padding-top: 70px;">Peak Rating:</p>
            <div class="CRating"> 
                    <?php
                    $sql="select Peak_Rating from performance where Player_Tag in (select Player_Tag from player_info where Game_Name='".$_SESSION['name']."');";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    if(strcmp($row['Peak_Rating'],"Ascendant")==0)
                    {
                        echo "<img src='ascendant.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Iron")==0)
                    {
                        echo "<img src='iron.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Bronze")==0)
                    {
                        echo "<img src='bronze.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Silver")==0)
                    {
                        echo "<img src='silver.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Gold")==0)
                    {
                        echo "<img src='gold.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Platinum")==0)
                    {
                        echo "<img src='platinum.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Diamond")==0)
                    {
                        echo "<img src='diamond.webp' class='rank'>";
                    }
                    else if(strcmp($row['Peak_Rating'],"Radiant")==0)
                    {
                        echo "<img src='radiant.png' class='rank'>";
                    }
                    ?>
                <div class="flexrating">
                    <p class="rating" style="font-size:25px;color: white;">Rating:</p>
                    <p class="rating"  style="font-size: 20px;color: white;padding: 5px;">
                    <?php
                    $sql="select Peak_Rating from performance where Player_Tag in (select Player_Tag from player_info where Game_Name='".$_SESSION['name']."');";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    echo $row['Peak_Rating'];
                    ?>
                    </p>
                 </div>
            </div>
        </div>
        <div class="bchild">
            <p style="font-size: 30px;padding-bottom: 10px;color: white;">Overview:</p>
            <div class="overview">
                <div class="elements">
                    <p >Time Spent in-game:</p>
                    <p> 
                    <?php
                    $sql="select Playtime from performance where Player_Tag in (select Player_Tag from player_info where Game_Name='".$_SESSION['name']."');";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    echo $row['Playtime'];
                    ?>
                    </p>
                </div>
                <div class="elements">
                    <p > K/D ratio:</p>
                    <p > 
                    <?php
                    $conn=mysqli_connect("localhost","root","","valstat");
                    $sql="select KDR from performance where Player_Tag in (select Player_Tag from player_info where Game_Name='".$_SESSION['name']."');";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    echo $row['KDR'];
                    ?>    
                    </p>
                </div>
                 <div class="elements">
                    <p > Wins:</p>
                    <p >
                    <?php
                    $conn=mysqli_connect("localhost","root","","valstat");
                    $sql="select Wins from leaderboard where Player_Name='".$_SESSION['name']."';";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    echo $row['Wins'];
                    ?> 
                    </p>
                </div>
                 <div class="elements">
                    <p > Losses:</p>
                    <p > <?php
                    $conn=mysqli_connect("localhost","root","","valstat");
                    $sql="select Wins from leaderboard where Player_Name='".$_SESSION['name']."';";
                    $result=$conn->query($sql);
                    $row= mysqli_fetch_assoc($result);
                    echo $row['Wins']-41;
                    ?>  </p>
                </div>
             </div>
             <p style="font-size: 30px;padding-bottom: 10px;color: white;">Performance:</p>
            <div class="history">
                <!-- <img src="Chamber_icon.webp" class="micon">
                <p class="center">Gamemode</p>
                <p class="center">Map name</p>
                <p class="center">X:X</p>
                <p class="center">K/D/A</p>
                <p class="center">ACS</p>  -->
                <div >
                <table>
                    <tr>
                        <th>Episode</th>
                        <th>Top Agent</th>
                        <th>Peak Rating</th>
                        <th>Playtime</th>
                        <th>Win %</th>
                        <th>HeadShot %</th>
                        
                    </tr>
                    <tr>
                        <td>
                        1 </td>
                        <td><?php
                        $sql="select Agent_played from performance where Episode=1 and Peak_Rating != 'Iron';";
                        $result=$conn->query($sql);
                        $row= mysqli_fetch_assoc($result);
                        if(strcmp($row['Agent_played'],"Sage")==0)
                        {
                        echo "<img src='sage.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Brimstone")==0)
                        {
                            echo "<img src='brimstone.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Reyna")==0)
                        {
                            echo "<img src='reyna.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Cypher")==0)
                        {
                            echo "<img src='cypher.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Sova")==0)
                        {
                            echo "<img src='sova.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Viper")==0)
                        {
                            echo "<img src='viper.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Phoenix")==0)
                        {
                            echo "<img src='phoenix.webp' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Killjoy")==0)
                        {
                            echo "<img src='killjoy.png' class='micon'>";
                        }
                        ?></td>
                        <td>
                            <?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Peak_Rating from performance where Episode=1 and Peak_Rating != 'Iron';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            if(strcmp($row['Peak_Rating'],"Ascendant")==0)
                            {
                                echo "<img src='ascendant.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Iron")==0)
                            {
                                echo "<img src='iron.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Bronze")==0)
                            {
                                echo "<img src='bronze.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Silver")==0)
                            {
                                echo "<img src='silver.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Gold")==0)
                            {
                                echo "<img src='gold.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Platinum")==0)
                            {
                                echo "<img src='platinum.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Diamond")==0)
                            {
                                echo "<img src='diamond.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Radiant")==0)
                            {
                                echo "<img src='radiant.png' class='micon'>";
                            }
                            ?> 
                        </td>
                        <td><?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Playtime from performance where Episode=1 and Peak_Rating != 'Iron';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Playtime'],"hrs";
                            ?> </td>
                        <td>
                        <?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Win_Percentage from performance where Episode=1 and Peak_Rating != 'Iron';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Win_Percentage'];
                            ?> 
                        </td>
                        <td><?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Headshot_Percentage from performance where Episode=1 and Peak_Rating != 'Iron';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Headshot_Percentage'];
                            ?></td>
                        
                    </tr>
                    <tr>
                        <td>
                        2 </td>
                        <td><?php
                        $sql="select Agent_played from performance where Episode=2 and Peak_Rating != 'Bronze';";
                        $result=$conn->query($sql);
                        $row= mysqli_fetch_assoc($result);
                        if(strcmp($row['Agent_played'],"Sage")==0)
                        {
                        echo "<img src='sage.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Brimstone")==0)
                        {
                            echo "<img src='brimstone.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Reyna")==0)
                        {
                            echo "<img src='reyna.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Cypher")==0)
                        {
                            echo "<img src='cypher.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Sova")==0)
                        {
                            echo "<img src='sova.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Viper")==0)
                        {
                            echo "<img src='viper.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Phoenix")==0)
                        {
                            echo "<img src='phoenix.webp' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Killjoy")==0)
                        {
                            echo "<img src='killjoy.png' class='micon'>";
                        }
                        ?></td>
                        <td>
                            <?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Peak_Rating from performance where Episode=2 and Peak_Rating != 'Bronze';;";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            if(strcmp($row['Peak_Rating'],"Ascendant")==0)
                            {
                                echo "<img src='ascendant.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Iron")==0)
                            {
                                echo "<img src='iron.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Bronze")==0)
                            {
                                echo "<img src='bronze.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Silver")==0)
                            {
                                echo "<img src='silver.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Gold")==0)
                            {
                                echo "<img src='gold.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Platinum")==0)
                            {
                                echo "<img src='platinum.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Diamond")==0)
                            {
                                echo "<img src='diamond.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Radiant")==0)
                            {
                                echo "<img src='radiant.png' class='micon'>";
                            }
                            ?> 
                        </td>
                        <td><?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Playtime from performance where Episode=2 and Peak_Rating != 'Bronze';;";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Playtime'],"hrs";
                            ?> </td>
                        <td>
                        <?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Win_Percentage from performance where Episode=2 and Peak_Rating != 'Bronze';;";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Win_Percentage'];
                            ?> 
                        </td>
                        <td><?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Headshot_Percentage from performance where Episode=2 and Peak_Rating != 'Bronze';;";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Headshot_Percentage'];
                            ?></td>
                        
                    </tr>
                    <tr>
                        <td>
                        3 </td>
                        <td><?php
                        $sql="select Agent_played from performance where Episode=3 and Peak_Rating != 'Silver';";
                        $result=$conn->query($sql);
                        $row= mysqli_fetch_assoc($result);
                        if(strcmp($row['Agent_played'],"Sage")==0)
                        {
                        echo "<img src='sage.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Brimstone")==0)
                        {
                            echo "<img src='brimstone.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Reyna")==0)
                        {
                            echo "<img src='reyna.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Cypher")==0)
                        {
                            echo "<img src='cypher.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Sova")==0)
                        {
                            echo "<img src='sova.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Viper")==0)
                        {
                            echo "<img src='viper.png' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Phoenix")==0)
                        {
                            echo "<img src='phoenix.webp' class='micon'>";
                        }
                        else if(strcmp($row['Agent_played'],"Kiljoy")==0)
                        {
                            echo "<img src='killjoy.png' class='micon'>";
                        }
                        ?></td>
                        <td>
                            <?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Peak_Rating from performance where Episode=3 and Peak_Rating != 'Silver';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            if(strcmp($row['Peak_Rating'],"Ascendant")==0)
                            {
                                echo "<img src='ascendant.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Iron")==0)
                            {
                                echo "<img src='iron.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Bronze")==0)
                            {
                                echo "<img src='bronze.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Silver")==0)
                            {
                                echo "<img src='silver.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Gold")==0)
                            {
                                echo "<img src='gold.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Platinum")==0)
                            {
                                echo "<img src='platinum.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Immortal")==0)
                            {
                                echo "<img src='immortal.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Diamond")==0)
                            {
                                echo "<img src='diamond.webp' class='micon'>";
                            }
                            else if(strcmp($row['Peak_Rating'],"Radiant")==0)
                            {
                                echo "<img src='radiant.png' class='micon'>";
                            }
                            ?> 
                        </td>
                        <td><?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Playtime from performance where Episode=3 and Peak_Rating != 'Silver';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Playtime'],"hrs";
                            ?> </td>
                        <td>
                        <?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Win_Percentage from performance where Episode=3 and Peak_Rating != 'Silver';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Win_Percentage'];
                            ?> 
                        </td>
                        <td><?php
                            $conn=mysqli_connect("localhost","root","","valstat");
                            $sql="select Headshot_Percentage from performance where Episode=3 and Peak_Rating != 'Silver';";
                            $result=$conn->query($sql);
                            $row= mysqli_fetch_assoc($result);
                            echo $row['Headshot_Percentage'];
                            ?></td>
                        
                    
                    </tr>
                </table>
            </div>   
             </div> 
        </div>
       
    </div>
    <?php
        
    ?>
</body>
</html>