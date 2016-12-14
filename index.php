<?php ?>
<!DOCTYPE html>
<!--
 * Programmer: Michael Le-Reiver
 * Date: 11/26/16
 * Time: 8:32 AM
 * File: index.php
 * Description: A website for a metal band from Tempe Arizona. Designed and developed using PHP, JS, and LESS.

*  NOTES FOR FUTURE MODIFICATIONS

 * Responsive Grid System:
 *      - This website uses Responsive Grid System for responsive columns for varying device size: http://www.responsivegridsystem.com/
 *
 * Audio Controller:
 *      -  http://arunkumarsekar.github.io/audioControls/
 *
 * Color Palette:
 *      Link to color palette https://color.adobe.com/Alisea---Industry---Metal-color-theme-8396638/
 *      - The dark gray (#1B1E23) is dark and bold and will contribute to the brand by providing a dark background for certain elements as well as the background color for the footer.
 *      - The red (#8A001E) is dark and muted and will contribute to the brand by being used for headings and element borders.
 *      - The off white (#F5F5F5) is bright and will contribute to the brand by being utilized in the navigation and footer.
 *      - The light gray (#D5D1D9) is subtle but bold enough to be used as text over the dark gray background and will contribute to the brand by being used for main text and element borders.
 *      - The gray-blue (#72809F) is calming and almost neutral. It will contribute to the brand by being used for element headings.
 * SEO Assets:
 *      - Description: Strange Music For Strange People - Guano’s mix of melancholy soundscapes and heavy rhythms spawn a dark eclectic blend of music madness.
 *      - Keywords: Guano, guano, guano music, heavy metal music, experimental, dark, Tempe AZ, vintage metal, melancholy, soundscapes, heavy rhythms, eclectic, madness
-->
<html lang="en">
<head>
    <title>Guano</title>
    <!-- Metadata Tags -->
    <meta name="description"
          content="Strange Music For Strange People - Guano’s mix of melancholy soundscapes and heavy rhythms spawn a dark eclectic blend of music madness.">
    <!-- Description for search engines-->
    <meta name="keyword"
          content="Guano, guano, guano music, heavy metal music, experimental, dark, Tempe AZ, vintage metal, melancholy, soundscapes, heavy rhythms, eclectic, madness">
    <!--Keywords for SEO -->
    <!--Requires use of head files file-->
    <?php require_once('includes/utilities/head_files.php'); ?>
</head>
<body>
    <section id="top"></section>
    <!-- Navigation -->
    <nav>
        <ul class="topnav" id="myTopnav">
            <li class="icon">
                <!-- Handles Hamburger Icon change-->
                <a href="javascript:void(0);" onclick="show_nav()">
                    <div class="container" onclick="hamburger(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
            </li>
            <!-- Nav Icons -->
            <li><a href="#top"><img id="logo_nav" src="includes/images/guano_logo_white_black.png"
                                    aria-hidden="true" alt="Guano logo navigation image"></a></li>
            <!-- Top one hidden for spacing. Needed to use hack.-->
            <li><a href="#top"><img id="logo_icon_nav" src="includes/images/guano_logo_white_black.png"
                                    aria-hidden="true" alt="Guano logo navigation image"></a></li>
            <li><a href="#listen"><span id="icon_nav" class="fa fa-music" aria-hidden="true"></span></a></li>
            <li><a href="#watch"><span id="icon_nav" class="fa fa-video-camera" aria-hidden="true"></span></a></li>
            <li><a href="#join"><span id="icon_nav" class="fa fa-ticket" aria-hidden="true"></span></a></li>
        </ul>
    </nav>
    <header>
        <!-- Holds header image-->
    </header>
    <main>
        <!-- Description -->
        <section class="description">
            <h3>strange music for strange people</h3>
            <p>Guano’s mix of melancholy soundscapes and heavy rhythms spawn a dark eclectic blend of music madness.</p>
        </section>
        <!-- Newsletter -->
        <section id="newsletter" class="section group">
            <form action="index.php" method="post">
                <div class="col span_9_of_12">
                    <input type="email" name="email" placeholder="Enter email to join newsletter">
                </div>
                <div class="col span_3_of_12">
                    <input id="submit" name="submit" type="submit" value="Submit">
                </div>
            </form>
        </section>
        <section class="description">
            <h3 id="listen">listen</h3>
        </section>
        <!-- Music Section - Uses audioController jQuery plugin-->
        <section id="music">
            <!-- Requires use of audio container page for showing audio container   -->
            <?php require_once('audio_player.php'); ?>
        </section>
        <section class="description">
            <h3 id="watch">watch</h3>
        </section>
        <!-- Video Section -->
        <section id="video">
            <h3><span class="title">Church Socks and Lotion</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/csal.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span class="title">Satanic Panic</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/satanic_panic.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span class="title">Fink</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/fink.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span class="title">Epitomize</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/epitomize.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span class="title">The People</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/the_people.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span class="title">Food/ Midget</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/food_midget.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h3><span class="title">Shell Shock</span></h3>
            <span class="venue">Live at Hollywood Alley</span> <br><span
                class="date">- Tempe, AZ October 17, 1998</span>
            <video controls>
                <source src="includes/videos/shell_shock.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <section class="description">
                <h3 id="join">join us</h3>
            </section>
            <!-- Shows Section -->
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
    <!-- Footer Section-->
    <!-- Requires use of footer file  -->
    <?php require ('footer.php');?>
    <!-- JS Scripts -->
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
