<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Valotrack | Home</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="vallogo.png">
    <script src="file1.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <div class="background">
        <!--Navigation box-->
        <div class="topnav">

            <a href="home.html">Home</a>
            <a href="#">Leaaderboard</a>
            <a href="#">Lineup</a>
            <a href="insights.html">Insights</a>
            <a href="#">Database</a>
            <a href="about.html">About us</a>
            <a href="add.php">Add Player</a>
            <div class="topnav-right">
                <a href="signin.html">Sign in/Login</a>
            </div>

        </div>

        <header>
            <div class="heading"><h1 >Valorant Game Stats</h1></div>
            <div class="subheading"><h3>Check Detailed Valorant Stats and Leaderboards</h3></div>
            <form action="player.php" method="post">
                <div class="searchbo">
                <input type="search" class="searchbox" name ="txtbox" placeholder="Find an Agent, Guide, ie, player#NA1 or sage" >
                </div>
                <div class="details">   
                </div>
                <div class="dbut"> 
                <input class="click"  type="submit" name="login" value="Search Players" >
                </div>
            </form> 
        </header>
    </div>
    <main>
        <section>
            <section class="leaderboard">
                <h2>Leaderboard </h2>
                <div class="card-group">
                    <div class="card">
                      <img class="card-img-top" src="1TenZ.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">#1 Rank</h5>
                        <p class="card-text">Tyson Ngo, the so-called “Wonder Boy,” is enjoying his time in Valorant, and no one can deny it. His journey in CS GO was not so pleasant; however, he has redeemed himself in Valorant. First, he was a part of Cloud9 Blue but later he joined the Sentinels. That’s when the trophies started coming in, and the team was unbeatable.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="2Yay.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">#2 Rank</h5>
                        <p class="card-text">Jacob Whiteaker, with the gamer tag “Yay” is currently a part of OpTic Gaming’s roster. He also played CS GO but his skills got the recognition they deserved in Valorant. In the North American region for Valorant, he is considered one of the best players and top fraggers in 2023.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="3ScreaM.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">#3 Rank</h5>
                        <p class="card-text">Adil Benrlitom with the gamer tag “ScreaM” is also known as “the headshot machine.” His one taps with a dot crosshair are just flawless and satisfying. Unlike TenZ he is considered one of the top players for having a deadly aim in both CS GO and Valorant.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
                
            </section>
        </section>



<!--About section-->

        <section class="about">
            <h2>About the developers</h2>
            <div class="main1">
                <img src="IMG_9440.jpg">
                <div class="about-text1">
                    
                    <p>Hi My name is Subroto Santra. I am a front-end web developer. I can provide clean code and pixel perfect
                        design. I also make the website more & more interactive with web animations.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="main2">
                <img src="om.jpg">
                <div class="about-text2">
                    <p>Hi My name is Om Basak. I am a front-end web developer. I can provide clean code and pixel perfect
                        design. I also make the website more & more interactive with web animations.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="main3">
                <img src="Lisa Shibu George.jpg">
                <div class="about-text3">
                    <p>Hi My name is Lisa Shibu George. I am a front-end web developer. I can provide clean code and pixel perfect
                        design. I also make the website more & more interactive with web animations.
                    </p>
                    
                </div>
            </div>
        </section>

        <!--footer section-->

        <div class="footer-content-text">
            <span class="copyright">
                2023 ©
                <a href="home.html" style="color: white;">Tracking Network</a>
            </span>
            <div class="links" >
                    <a href="privacypolicy.html" target="_blank" rel="noopener" >Privacy Policy</a>
                    <a href="tos.html" target="_blank" rel="noopener" >Terms of Service</a>
                    <a href="support.html" target="_blank" rel="noopener" >Support</a>
            </div>
            <p class="publisher-notice">
                Valorant Tracker isn't endorsed by Riot Games and doesn't reflect the views or opinions of Riot Games or
                anyone officially involved in producing or managing Riot Games properties. Riot Games, and all
                associated
                properties are trademarks or registered trademarks of Riot Games, Inc.
            </p>

        </div>

    </main>
</body>

</html>