<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12/12/16
 * Time: 10:36 AM
 */

 header('Content-Type:text/css');
 ?>

* {
    padding: 0;
    margin: 0;
}

body {
    background-color: #1B1E23;
    font-family: SourceSansPro-Regular, Helvetica, Arial, 'sans-serif';
    font-size: 14px;
    line-height: 1.428571429;
}

ul, li {
    list-style: none;
}

.mainContainer {
    margin: 0 auto;
}

.containerPlayer, .containerSource {
    display: block;
    float: left;
    margin: 0 auto;
    width: 100%;
    background-color: #1B1E23;
    border-top: double #72809F;
    border-bottom: double #72809F;
}

.containerPlayer h2 {
    margin-top: 20px;
    font-size: 6vw;
    color: #72809F;
}

.snippet {
    width: 70%;
    border: 1px solid #ccc;
    border-radius: 5px;
    min-height: 280px;
    max-height: 280px;
    color: #fff;
    background-color: #343434;
    margin-top: 1rem;
}

.snippet:nth-child(2) {
    margin-top: 2rem;
}

.snippet pre {
    max-height: 230px;
    padding: 5px;
}

.snippet h4 {
    padding: 10px;
    color: #343434;
    background-color: #72809F;
}

/* Playlist */
#listContainer {
    width: 310px;
    background-color: transparent;
    margin: 0 auto;
}

#listContainer ul {
    margin: 20px 0;
    background-color: transparent;
    clear: both;
    cursor: pointer;
}

#listContainer li {
    padding: 0;
    text-align: start;
    margin-left: 20px;
}

#listContainer li:nth-child(even) {
    background-color: transparent;
}

#listContainer li a:hover, #listContainer li a:active, #listContainer li:nth-child(even):hover {
    background-color: transparent;
    color: #72809F;
}

#listContainer li a {
    text-decoration: none;
    color: #FFF;
}

#listContainer li a.activeAudio {
    background-color: #D5D1D9;
    color: #72809F;
}

/* Player Controls */
#playerContainer {
    margin: 0 auto 10px 0;
    height: 130px;
    background-color: #1B1E23;
    text-align: center;
}
.controls {
    margin-left: -20px;
}
.controls li:first {
    margin-right: 10px
}

.controls li {
    display: inline-block;
    width: 50px;
    text-align: center;
    margin-top: 8px;
    margin-left: 10px
}

.controls li a {
    display: inline-block;
}

.playAudio, .play {
    background: url('../images/audio/audio_icons.png') no-repeat -2px -35px;
    width: 32px;
    height: 32px;
    margin: auto;
}

.playAudio:hover {
    background: url('../images/audio/audio_icons.png') no-repeat -2px -3px;
}

.pauseAudio {
    background: url('../images/audio/audio_icons.png') no-repeat -36px -35px;
    width: 32px;
    height: 32px;
    margin: auto;
}

.pauseAudio:hover {
    background: url('../images/audio/audio_icons.png') no-repeat -36px -3px;
}

.shuffle {
    background: url('../images/audio/audio_icons.png') no-repeat -28px -96px;
    width: 32px;
    height: 32px;
    margin: auto;
}

.shuffleActive, .shuffle:hover {
    background: url('../images/audio/audio_icons.png') no-repeat -28px -71px;
    width: 32px;
    height: 32px;
    margin: auto;
}

.left {
    background: url('../images/audio/audio_icons.png') no-repeat -60px -99px;
    width: 24px;
    height: 24px;
    margin: auto;
    margin-top: 4px;
    opacity: 0.4;
}

.left:not(.disabled):hover {
    opacity: 1;
}

.left.disabled, .right.disabled {
    opacity: 0.4;
    cursor: default;
}

.right {
    background: url('../images/audio/audio_icons.png') no-repeat -88px -75px;
    width: 24px;
    height: 24px;
    margin: auto;
    margin-top: 4px;
    opacity: 0.4;
}

.right:not(.disabled):hover {
    opacity: 1;
}

.repeat {
    background: url('../images/audio/audio_icons.png') no-repeat -4px -103px;
    width: 21px;
    height: 21px;
    margin: auto;
    margin-top: 7px;
}

.repeat:hover, .repeat.loopActive {
    background: url('../images/audio/audio_icons.png') no-repeat -4px -79px;
}

.volume {
    width: 20px;
    height: 20px;
    margin-left: 75px;
    margin-right: 5px;
    float: left;
    background: url('../images/audio/audio_icons.png') no-repeat;
}

.volume1 {
    background-position: -5px -150px;

}

.volume2 {
    background-position: -5px -198px;
}

.volume3 {
    background-position: -5px -246px;
}

.mute {
    background-position: -34px -127px;
}

.progress {
    clear: both;
    height: 4px;
    background-color: #D5D1D9;
    width: 100%;
    cursor: pointer;
    position: relative;
}

.progress .updateProgress {
    width: 0;
    background-color: #72809F;
    height: 100%;
    float: left;
    position: relative;
}

.volumeControl {
    position: relative;
    margin: 8px auto;
}

.volumeControl .updateProgress {
    display: inline-block;
    vertical-align: middle;
    margin-top: 2px;
}

input[type="range"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: #72809F;
    height: 2px;
    margin-left: -40px;
}

.audioDetails {
    clear: both;
    color: #72809F;
    font-size: 12px;
    padding: 5px;
}

.audioTime {
    display: inline-block;
    text-align: center;
    float: right;
    font-size: 1.75em;
}

.songPlay {
    display: inline-block;
    font-size: 1.75em;
}

.seekableTrack {
    width: 0;
    background-color: #fff;
    height: 4px;
    position: absolute;
    z-index: 0;
    display: block;
}

.seekableTrack, .progress .updateProgress {
    -webkit-transition: width 0.6s ease;
    -moz-transition: width 0.6s ease;
    -o-transition: width 0.6s ease;
    transition: width 0.6s ease;
}

@media only screen and (min-width: 518px) {

    .containerPlayer h2 {
        font-size: 35px;
    }
}
@media only screen and (min-width: 769px) {
/*    */
/*    .mainContainer {*/
/*        width: 50vw;*/
/*    }*/
    #playerContainer {
        width: 30vw;
        margin: 0 auto;
    }
    .containerPlayer h2 {
        margin-top: 20px;
        color: #72809F;
    }
    .volumeControl {
        width: 50vw;
        margin 0 auto;
    }
    .seekableTrack {
        width: 50%;
        margin 0 auto;
    }
    input[type="range"] {
        margin-left: -220px;
    }
    .volume {
        margin-left: 20px;
    }
}

