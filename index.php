<?php
/**
 * Programmer: Michael Le-Reiver
 * Date: 11/26/16
 * Time: 8:32 AM
 * File Name: index.php
 * Description: Index code
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guano</title>
    <!-- Metadata Tags -->
    <meta name="description" content="  "> <!-- Description for search engines-->
    <meta name="keyword" content="  "> <!--Keywords for SEO -->
    <!--Requires use of head files file-->
    <?php require_once('includes/utilities/head_files.php'); ?>
</head>
<body>
    <section id="top"></section>
    <nav>
        <ul>
            <li><a href="#top"><img id="logo_nav" src="includes/images/guano_logo_white_black.png" width="40px"></a></li>
            <li><a href="#music"><span id="icon_nav" class="fa fa-music" aria-hidden="true"></span></a></li>
            <li><a href="#video"><span id="icon_nav" class="fa fa-video-camera" aria-hidden="true"></span></a></li>
            <li><a href="#shows"><span id="icon_nav" class="fa fa-ticket" aria-hidden="true"></span></a></li>
        </ul>
    </nav>
    <header>

    </header>
    <main>
        <section id="newsletter">
            <h2>Sign-up for Our Newsletter</h2>
            <form action="index.php" method="post">
                <input type="email" name="email" placeholder="Please Enter Your Email">
                <input id="submit" name="submit" type="submit" value="Submit">
            </form>
        </section>
        <section id="music">
            <h2>Music</h2>
            <audio controls src="includes/audio/guano_reptile.mp3"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
            <audio controls src="includes/audio/"></audio>
        </section>
        <section id="video">
            <h2>Videos</h2>
            <video controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <video  controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <video controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </section>
        <section id="shows">
            <h2>Shows</h2>
            <table >
                <tr>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Location</th>
                    <th>Tickets</th>
                </tr>
                <tr>
                    <td>12/18<br>2016</td>
                    <td>The Nile</td>
                    <td>Phoenix, AZ</td>
                    <td><button>BUY</button></td>
                </tr>
                <tr>
                    <td>12/28<br>2016</td>
                    <td>Los Gatos Locos</td>
                    <td>Albuquerque, NM</td>
                    <td><button>BUY</button></td>
                </tr>
                <tr>
                    <td>01/10<br>2017</td>
                    <td>The NightHawk</td>
                    <td>San Diego</td>
                    <td><button>BUY</button></td>
                </tr>
                <tr>
                    <td>01/20<br>2017</td>
                    <td>Jake's Hut</td>
                    <td>Boulder, CO</td>
                    <td><button>BUY</button></td>
                </tr>
            </table>
        </section>
    </main>
    <!-- Requires use of footer file  -->
    <?php require ('footer.php');?>
    <!-- Requires use of smooth scrolling script for anchor tags   -->
    <?php require('includes/scripts/smooth_scroll.php');?>

</body>
</html>
