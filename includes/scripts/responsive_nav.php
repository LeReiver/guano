<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/30/16
 * Time: 1:50 PM
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
