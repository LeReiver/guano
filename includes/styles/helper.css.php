<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/26/16
 * Time: 8:24 AM
 * 
 *
 */
 header('Content-Type: text/css');
 ?>
 /*
Written by Juan Moldanado
Helper properties for styling
*/

 /* Must-have CSS declarations for every project */

* {
    box-sizing: border-box;
    /* Ignore border and padding sizes when sizing boxes. No more stealing sizing from box widths to account for padding sizes! Use the responsive grid to your heart's content. */
}

html {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    /* Default font smoothing is terrible and makes fonts too thick. This is better. */
}

img, embed {
    max-width: 100%;
    /* Images and embedded content can't be larger than the box they are in. Very responsive. */
}

a {
    outline: none;
    /* No more ugly dotted outlines on active links. */
}

@media print {
    a:after {
        content: " [" attr(href) "] ";
        /* Printed versions of the page now add the URL after the hyperlink. */
    }  
}