<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12/1/16
 * Time: 4:32 PM
 */

?>
<script>
    // carousel slider function for footer image
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

