<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="playercss.css">
    <link rel="stylesheet" href="add.css">
    <link rel="icon" type="image/x-icon" href="vallogo.png"> 
</head>
<body>
<div class="topnav">
    <a href="home2.php">Home</a>
    <a href="leads.html">Leaderboard</a>
    <a href="leads.html">Insights</a>
    <a href="about.html">About us</a>
</div>
<div class="body">
    <h1 class="iname">Player Info:</h1>
</div>
<div class="ibody">
    <form action="add2.php" method="Post">
        <p class="ipname">Player Name:  <input type="text" name="inname" class="inp"></p>
        <p class="ipname">Player Tag:  <input type="text" name="intag" class="inp"></p>
        <p class="ipname">Current Rating:  <input type="text" name="incr" class="inp"></p>
        <p class="ipname">Peak Rating:  <input type="text" name="inpr" class="inp"></p>
        <p class="ipname">Top Agent:  <input type="text" name="inagent" class="inp"></p>
        <p class="ipname">Time Spent in-game:  <input type="text" name="intime" class="inp"></p>
        <p class="ipname">K/D ratio:  <input type="text" name="inkd" class="inp"></p>
        <p class="ipname">Wins:  <input type="text" name="inw" class="inp"></p>
        <div class="ibut" style="padding-left: 100px;padding-top: 15px;padding-bottom: 15px;">
        <input type="submit" name="ibut" style="font-size:50px;padding: 16px 32px;display: inline-block;cursor: pointer" value="Submit">
        </div>
    </form>
    
</div>
<?php   
    
?>
</body>
</html>