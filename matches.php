<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="matchescss.css">
    <link rel="icon" type="image/x-icon" href="vallogo.png"> 
</head>
<body>
    <?php
    session_start();
    ?>
    <?php
    

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
        <div class="bchild" style="overflow:scroll">
        <div class="history">
                <div >
                <table>
                    <tr>
                        <th>S No.</th>
                        <th>Agent Played</th>
                        <th>Gamemode</th>
                        <th>Map name</th>
                        <th>Score</th>
                        <th>K/D/A</th>
                        <th>ACS</th>
                    </tr>

                    <?php
                        
                        for($i=1;$i<=30;$i++)
                        {
                            echo '
                            <tr>
                                <td>
                                '.$i.'</td>
                                <td>';
                                $sql="select Agent_played from matches where Srno=".$i.";";
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
                                else if(strcmp($row['Agent_played'],"Reyna ")==0)
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
                                echo '</td>
                                <td>';
                                    
                                    $conn=mysqli_connect("localhost","root","","valstat");
                                    $sql="select Gamemode from matches where Srno=".$i.";";
                                    $result=$conn->query($sql);
                                    $row= mysqli_fetch_assoc($result);
                                    echo $row['Gamemode'];
                                echo '
                                </td>
                                <td>';
                                    $conn=mysqli_connect("localhost","root","","valstat");
                                    $sql="select Map from matches where Srno=".$i.";";
                                    $result=$conn->query($sql);
                                    $row= mysqli_fetch_assoc($result);
                                    echo $row['Map'];
                                    echo'
                                     </td>
                                <td>';
                                
                                    $conn=mysqli_connect("localhost","root","","valstat");
                                    $sql="select Score from matches where Srno=".$i.";";
                                    $result=$conn->query($sql);
                                    $row= mysqli_fetch_assoc($result);
                                    echo $row['Score'],":",$row['Score']-2;
                                    echo'
                                </td>
                                <td>';
                                    $conn=mysqli_connect("localhost","root","","valstat");
                                    $sql="select KDR from matches where Srno=".$i.";";
                                    $result=$conn->query($sql);
                                    $row= mysqli_fetch_assoc($result);
                                    echo $row['KDR'];
                                    echo'
                                    </td>
                                    
                                <td>';
                                    $conn=mysqli_connect("localhost","root","","valstat");
                                    $sql="select ACS from matches where Srno=".$i.";";
                                    $result=$conn->query($sql);
                                    $row= mysqli_fetch_assoc($result);
                                    echo $row['ACS'];
                                    echo'</td>
                            </tr>'; 
                            
                            
                        }
                    ?>
                     
                </table>
            </div>   
             </div> 
            
                            
        </div>
       
    </div>
    <?php
        
    ?>
   </body>
</html>