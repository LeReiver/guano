<?php
/**
 * Programmer: Michael Le-Reiver
 * Date: 11/30/16
 * Time: 1:50 PM
 * File: responsive_nav.php
 * Description: JS script for handling responsive navigation
 */
?>
<script>

    function hamburger(x) {
        x.classList.toggle("change");
    }

    function show_nav() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

</script>
