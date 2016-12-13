<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12/6/16
 * Time: 4:08 PM
 */
require_once('includes/utilities/head_files.php');

?>
<div class="mainContainer">
    <table style="width:100%">
        <tr>
            <td valign="top">
                <div class="containerPlayer">
                    <div id="listContainer" class="playlistContainer">
                        <h2>With Josh</h2>
                        <ul id="playListContainer">
                            <li data-src="includes/audio/reptile.mp3">
                                <a href="#">Reptile</a>
                            </li>
                            <li data-src="includes/audio/shellshock.mp3">
                                <a href="#">Shell Shock</a>
                            </li>
                            <li data-src="includes/audio/strapon.mp3">
                                <a href="#">Strap On</a>
                            </li>
                            <li data-src="includes/audio/the_people.mp3">
                                <a href="#">The People</a>
                            </li>
                            <li data-src="includes/audio/fink.mp3">
                                <a href="#">Fink</a>
                            </li>
                            <h2>Satanic Panic Trilogy</h2>
                            <li data-src="includes/audio/satanic_panic_1.mp3">
                                <a href="#">Satanic Panic 1</a>
                            </li>
                            <li data-src="includes/audio/satanic_panic_2.mp3">
                                <a href="#">Satanic Panic 2</a>
                            </li>
                            <li data-src="includes/audio/satanic_panic_3.mp3">
                                <a href="#">Satanic Panic 3</a>
                            </li>
                            <li data-src="includes/audio/the_people.mp3">
                                <a href="#">&nbsp;</a>
                            </li>
                            <li data-src="includes/audio/fink.mp3">
                                <a href="#">&nbsp;</a>
                            </li>
                        </ul>
                    </div>
                    <div id="playerContainer">
                        <div id="controlContainer">
                            <ul class="controls">
                                <li>
                                    <a href="#audio" class="left" data-attr="prevAudio"></a>
                                </li>
                                <li>
                                    <a href="#audio" class="play" data-attr="playPauseAudio"></a>
                                </li>
                                <li>
                                    <a href="#audio" class="right" data-attr="nextAudio"></a>
                                </li>
                            </ul>
                            <div class="audioDetails">
                                <span class="songPlay"></span>
                                <span data-attr="timer" class="audioTime"></span>
                            </div>
                            <div class="progress">
                                <div data-attr="seekableTrack" class="seekableTrack"></div>
                                <div class="updateProgress"></div>
                            </div>
                        </div>
                        <div class="volumeControl">
                            <div class="volume volume1"></div>
                            <input class="bar " data-attr="rangeVolume" type="range" min="0" max="1" step="0.1"
                                   value="0.7"/>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>

