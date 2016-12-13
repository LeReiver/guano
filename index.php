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
        <ul class="topnav" id="myTopnav">
            <li class="icon">
                <a href="javascript:void(0);" onclick="show_nav()">
                    <div class="container" onclick="hamburger(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
            </li>
            <li><a href="#top"><img id="logo_nav" src="includes/images/guano_logo_white_black.png"
                                    aria-hidden="true" alt="Guano logo navigation image"></a></li>
            <li><a href="#top"><img id="logo_icon_nav" src="includes/images/guano_logo_white_black.png"
                                    aria-hidden="true" alt="Guano logo navigation image"></a></li>
            <li><a href="#listen"><span id="icon_nav" class="fa fa-music" aria-hidden="true"></span></a></li>
            <li><a href="#watch"><span id="icon_nav" class="fa fa-video-camera" aria-hidden="true"></span></a></li>
            <li><a href="#join"><span id="icon_nav" class="fa fa-ticket" aria-hidden="true"></span></a></li>
        </ul>
    </nav>
    <header></header>
    <main>
        <section id="description">
            <h3>strange music for strange people</h3>
        </section>
        <section id="newsletter" class="section group">
            <form action="index.php" method="post">
                <div class="col span_9_of_12">
                    <input type="email" name="email" autofocus placeholder="Enter email to join newsletter">
                </div>
                <div class="col span_3_of_12">
                    <input id="submit" name="submit" type="submit" value="Submit">
                </div>
            </form>
        </section>
        <section id="description">
            <h3 id="listen">listen</h3>
        </section>
        <section id="music">
            <!--            <div class="section group">-->
            <!---->
            <!--                <div class="col span_6_of_12">-->
                    <!-- Requires use of audio container page for showing audio container   -->
                    <?php require_once('audio_player.php'); ?>
            <!--                </div>-->
            <!--                <div id="break">&nbsp;</div>-->
            <!--                <div class="col span_6_of_12">-->
            <!--                    <!--Requires use of audio container page for showing audio container-->
            <!--                    <?php //require_once('audio_player_2.php'); ?>
<!--                </div>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Reptile</span></h3>-->
            <!--                <audio controls src="includes/audio/reptile.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Strap On</span></h3>-->
            <!--                <audio controls src="includes/audio/strapon.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Satanic Panic 1</span></h3>-->
            <!--                <audio controls src="includes/audio/satanic_panic_1.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Satanic Panic 2</span></h3>-->
            <!--                <audio controls src="includes/audio/satanic_panic_2.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Satanic Panic 3</span></h3>-->
            <!--                <audio controls src="includes/audio/satanic_panic_3.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Augmentation</span></h3>-->
            <!--                <audio controls src="includes/audio/augmentation.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">The People</span></h3>-->
            <!--                <audio controls src="includes/audio/the_people.mp3"></audio>-->
            <!--            </div>-->
            <!--            <div id="song">-->
            <!--                <h3><span id="title">Shell Shock</span></h3>-->
            <!--                <audio controls src="includes/audio/shellshock.mp3"></audio>-->
            <!--            </div>-->

            <!---->
            <!--            <div class="mainContainer">-->
            <!--                <table style="width:100%">-->
            <!--                    <tr><td valign="top">-->
            <!--                            <div class="containerPlayer">-->
            <!--                                <div id="listContainer" class="playlistContainer">-->
            <!--                                    <ul id="playListContainer">-->
            <!--                                        <li data-src="includes/audio/reptile.mp3">-->
            <!--                                            <a href="#">Reptile</a>-->
            <!--                                        </li>-->
            <!--                                        <li data-src="includes/audio/shellshock.mp3">-->
            <!--                                            <a href="#">Shell Shock</a>-->
            <!--                                        </li>-->
            <!--                                        <li data-src="includes/audio/strapon.mp3">-->
            <!--                                            <a href="#">Strap On</a>-->
            <!--                                        </li>-->
            <!--                                        <li data-src="includes/audio/the_people.mp3">-->
            <!--                                            <a href="#">The People</a>-->
            <!--                                        </li>-->
            <!--                                        <li data-src="includes/audio/fink.mp3">-->
            <!--                                            <a href="#">Fink</a>-->
            <!--                                        </li>-->
            <!--                                    </ul>-->
            <!--                                </div>-->
            <!--                                <div id="playerContainer">-->
            <!--                                    <div id="controlContainer">-->
            <!--                                        <ul class="controls">-->
            <!--                                            <li>-->
            <!--                                                <a href="#" class="shuffle shuffleActive" data-attr="shuffled"></a>-->
            <!--                                            </li>-->
            <!--                                            <li>-->
            <!--                                                <a href="#" class="left" data-attr="prevAudio"></a>-->
            <!--                                            </li>-->
            <!--                                            <li>-->
            <!--                                                <a href="#" class="play" data-attr="playPauseAudio"></a>-->
            <!--                                            </li>-->
            <!--                                            <li>-->
            <!--                                                <a href="#" class="right" data-attr="nextAudio"></a>-->
            <!--                                            </li>-->
            <!--                                            <li>-->
            <!--                                                <a href="#" class="repeat" data-attr="repeatSong"></a>-->
            <!--                                            </li>-->
            <!--                                        </ul>-->
            <!--                                        <div class="audioDetails">-->
            <!--                                            <span class="songPlay"></span>-->
            <!--                                            <span data-attr="timer" class="audioTime"></span>-->
            <!--                                        </div>-->
            <!--                                        <div class="progress">-->
            <!--                                            <div data-attr="seekableTrack" class="seekableTrack"></div>-->
            <!--                                            <div class="updateProgress"></div>-->
            <!--                                        </div>-->
            <!---->
            <!--                                    </div>-->
            <!---->
            <!--                                    <div class="volumeControl">-->
            <!--                                        <div class="volume volume1"></div>-->
            <!--                                        <input class="bar" data-attr="rangeVolume" type="range" min="0" max="1" step="0.1" value="0.7" />-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                </table>-->
        </section>
        <section id="description">
            <h3 id="watch">watch</h3>
        </section>
        <section id="video">
            <h3><span id="title">Church Socks and Lotion</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/csal.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span id="title">Satanic Panic</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/satanic_panic.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span id="title">Fink</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/fink.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span id="title">Epitomize</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/epitomize.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span id="title">The People</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/the_people.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span id="title">Food/ Midget</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/food_midget.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span id="title">Shell Shock</span></h3>
            <span id="venue">Live at Hollywood Alley</span> <br><span id="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/shell_shock.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <section id="description">
                <h3 id="join">join us</h3>
            </section>
        <section id="shows">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Location</th>
                    <th>Tickets</th>
                </tr>
                <tr>
                    <td>12/22<br>2016</td>
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
                    <td>
                        <button>BUY</button>
                    </td>
                </tr>
                <tr>
                    <td>01/28<br>2017</td>
                    <td>Nutz</td>
                    <td>Nashville, TN</td>
                    <td>
                        <button>BUY</button>
                    </td>
                </tr>
            </table>
        </section>
    </main>
    <!-- Requires use of footer file  -->
    <?php require ('footer.php');?>
    <!-- Requires use of smooth scrolling script for anchor tags   -->
    <?php require('includes/scripts/smooth_scroll.php');?>
    <!-- Requires use of responsive nav script for handling responsive navigation   -->
    <?php require('includes/scripts/responsive_nav.php'); ?>
    <!-- Requires use of image slider script for handling footer slide show   -->
    <?php require('includes/scripts/image_slider.php'); ?>
    <!-- Requires use of audio player script for playing audio   -->
    <?php require('includes/scripts/audio_container.php'); ?>
</body>
</html>
