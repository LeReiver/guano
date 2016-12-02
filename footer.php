<?php
/**
 * Programmer: Michael Le-Reiver
 * Date: 11/26/16
 * Time: 8:40 AM
 * File Name: footer.php
 * Description: Footer code for Guano
 */

require_once('includes/scripts/image_slider.php');
?>
<footer>
    <section id="booking">
        <h3>Contact us for booking:</h3>
        <p><a href="mailto:booking@guano.com">booking@guano.com</a> &nbsp;| +1-666-000-0000</p>
    </section>
    <section id="social">
        <a href="http://soundcloud.com/" target="_blank"><span id="footer_nav" class="fa fa-soundcloud"
                                                               aria-hidden="true"></span></a>
        <a href="http://spotify.com/" target="_blank"><span id="footer_nav" class="fa fa-spotify"
                                                            aria-hidden="true"></span></a>
        <a href="http://instagram.com/" target="_blank"><span id="footer_nav" class="fa fa-instagram"
                                                              aria-hidden="true"></span></a>
    </section>
    <section id="footer_img" class=" w3-content">
        <img class="img_slider w3-animate wait" style="width:100%" src="includes/images/flyer_wht_2.png">
        <img class="img_slider w3-animate wait" style="width:100%" src="includes/images/flyer_wht_1.png">
    </section>
    <section id="copyright">
        &copy; 2016 Guano | Designed by <a href="http://lereiver.com" target="_blank">LeReiver</a>
    </section>
</footer>
