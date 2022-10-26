<?php
    session_start();

    // connect to database
    require_once('php/database.php');

    $i = $_SESSION['loggedin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Tab Logo-->
    <link rel="icon" href="images/WhiteB6.png" type="image/icon type">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="view/main.css">
    <link rel="stylesheet" href="view/homepage.css">
    <title>B6 Cinemas</title>
</head>

<div id="navBar">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light ">
        <a class="navbar-brand" href="#">
            <img src="images/B6 Cinema (2).png" width="70" height="70" class="d-inline-block align-center" alt="B6 Cinemas logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div id="loginToggle">
                        <button class="btn">
                            <a class="nav-link" href="view/loginAndReg/login.php">Login</a>
                        </button>
                    </div>
                </li>

            </ul>
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search Movies" aria-label="Search">
                <button class="btn" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

<!--Fun logo-->
<div class="funLogo">
    <h1><b>Welcome To</b></h1>
    <img src="images/B6CinemaBigLogo.png">
    <h1><b>B6 Cinemas</b></h1>
</div>

<!--Main section-->
<div>
    <div>

        <div class="hero-container first" >
            <h1>Now Playing</h1><br>
            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://i.ibb.co/ThPNnzM/blade-runner.jpg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Blade Runner 2049</h4>
                        <p class="ticket__movie-slogan">
                            More human than human is our motto.
                        </p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=gCcx85zbxz4'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://i.ibb.co/Zd51z5c/justice-league.jpg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Justice League</h4>
                        <p class="ticket__movie-slogan">You can't save the world alone.</p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=r9-DM9uBtVI'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://m.media-amazon.com/images/M/MV5BYmMxZWRiMTgtZjM0Ny00NDQxLWIxYWQtZDdlNDNkOTEzYTdlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Thor: Love and Thunder</h4>
                        <p class="ticket__movie-slogan">
                            “Let me tell you the story of the space viking, Thor Odinson…”
                        </p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=Go8nTmfrQd8'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://londonmumsmagazine.com/wp-content/uploads/2022/08/movie-review-bullet-train.jpeg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Bullet Train</h4>
                        <p class="ticket__movie-slogan">You can't save the world alone.</p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=0IOsk2Vlc4o'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="hero-container">
            <h1>Coming Soon</h1>
            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://i.ibb.co/ThPNnzM/blade-runner.jpg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Blade Runner 2049</h4>
                        <p class="ticket__movie-slogan">
                            More human than human is our motto.
                        </p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=gCcx85zbxz4'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://i.ibb.co/Zd51z5c/justice-league.jpg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Justice League</h4>
                        <p class="ticket__movie-slogan">You can't save the world alone.</p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=r9-DM9uBtVI'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://m.media-amazon.com/images/M/MV5BYmMxZWRiMTgtZjM0Ny00NDQxLWIxYWQtZDdlNDNkOTEzYTdlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Thor: Love and Thunder</h4>
                        <p class="ticket__movie-slogan">
                            “Let me tell you the story of the space viking, Thor Odinson…”
                        </p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=Go8nTmfrQd8'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="poster-container">
                    <a href="#"><img src="https://londonmumsmagazine.com/wp-content/uploads/2022/08/movie-review-bullet-train.jpeg" class="poster" /></a>
                </div>
                <div class="ticket-container">
                    <div class="ticket__content">
                        <h4 class="ticket__movie-title">Bullet Train</h4>
                        <p class="ticket__movie-slogan">You can't save the world alone.</p>
                        <button class="ticket__buy-btn" onclick="location.href='https://www.youtube.com/watch?v=0IOsk2Vlc4o'">Watch the trailer</button>
                        <button class="ticket__buy-btn">
                            <a href="view/buyTickFlow/selectShowtime.php">Book movie</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.addEventListener('load', (event) => {
            var log = <?php echo $i ?>;

            if (log) {
                document.getElementById("loginToggle").innerHTML = '<button class="btn"><a class="nav-link" href="view/loginAndReg/logout.php">Logout</a></button><button class="btn"><a class="nav-link" href="view/profile/editprofile.php">Edit Profile</a></button>';
            }
        });
    </script>
</html>