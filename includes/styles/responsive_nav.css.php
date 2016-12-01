<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 11/30/16
 * Time: 2:46 PM
 */
 header('Content-type: text/css');
 
 ?>

/* -------------------- Hamburger Menu Bars ----------------------- */

.icon {
    margin: 10px;
}

.container {
    display: inline-block;
    cursor: pointer;
    margin: 0;
}

.bar1, .bar2, .bar3 {
    width: 30px;
    height: 4px;
    background-color: #F5F5F5;
    margin: 6px 0;
    transition: 0.8s;
}

.container.change {
    right: 1em;
    margin-top: -1em;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
    width: 30px;
}

.change .bar2 {
    opacity: 0;
}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
    width: 30px;
}

/* -------------------Collapsing Responsive Navigation -----------------------  */

/* Remove margins and padding from the list, and add a black background color */
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
    width: 100%;
}

/* Float the list items side by side */
ul.topnav li {
    float: left;
}

/* Style the links inside the list items */
ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 0;
    margin: 0;
    text-decoration: none;
    transition: 0.8s;
}

/* Change background color of links on hover */
ul.topnav li a:hover {
    background-color: transparent;
}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {
    display: none;
}

/* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
@media screen and (max-width: 680px) {
    ul.topnav li:not(:first-child) {
        display: none;
    }

    ul.topnav li.icon {
        float: right;
        display: inline-block;
    }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
@media screen and (max-width: 680px) {
    ul.topnav.responsive {
        position: relative;
        padding: 0;
        background-color: #1B1E23;
        height: 110%;
    }

    ul.topnav.responsive li.icon {
        position: absolute;
        right: .25em;
        top: 1em;
    }

    ul.topnav.responsive li {
        float: none;
        display: inline;
    }

    ul.topnav.responsive li a {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        padding: 0;
    }
}

