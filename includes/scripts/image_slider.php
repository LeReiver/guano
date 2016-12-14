<?php
/**
 * Programmer: Michael Le-Reiver
 * Date: 12/16/16
 * Time: 4:08 PM
 * File: image_slider.php
 * Description: Image Slider for footer image flicker effect
 */
?>
<script>
    // carousel slider function for footer image,- high speed for flicker effect
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("img_slider");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 60);
    }
</script>

