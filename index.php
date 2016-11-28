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
    <header>
        <nav>
            <a href="#music"><span id="music_nav" class="fa fa-music" aria-hidden="true" style="font-size: 2em; color: #F5F5F5"></span></a>
        </nav>
    </header>
    <main>
        <section id="newsletter">
            <h2>Sign-up for Our Newsletter</h2>
        </section>
        <section id="music">
            <h2>Music</h2>
        </section>
        <section id="video">
            <h2>Videos</h2>
        </section>
        <section id="shows">
            <h2>Shows</h2>
        </section>
    </main>
    <!-- Requires use of footer file  -->
    <?php require ('footer.php');?>
    <!-- Requires use of smooth scrolling script for anchor tags   -->
    <?php require('includes/scripts/smooth_scroll.php');?>

</body>
</html>
