<?php
/**
 * Programmer: Chris Coyier: https://css-tricks.com/snippets/jquery/smooth-scrolling/
 * Date: 11/26/16
 * Time: 8:34 AM
 * File: smooth_scroll.php
 * Description: A function that provides smooth animated scrolling.
 */
?>
<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
