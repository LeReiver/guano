<?php
/**
 * Programmer: Michael Le-Reiver
 * Date: 12/12/16
 * Time: 10:36 AM
 * File: audio_container.php
 * Description: Script for audioControls
 * Developed by: Arun Kumar Sekar  Modified by Michael Le-Reiver
 * www.9lessons.info
 */
?>
<script>
    $(document).ready(function()
    {
        $('#playListContainer').audioControls(
            {
                autoPlay: false,
                timer: 'decrement',
                shuffled: false,
                onAudioChange : function(response){
                    $('.songPlay').text(response.title + ''); //Song title information
                },
                onVolumeChange : function(vol){
                    var obj = $('.volume');
                    if(vol <= 0){
                        obj.attr('class','volume mute');
                    }
                    else if(vol <= 33)
                    {
                        obj.attr('class','volume volume1');
                    }
                    else if(vol > 33 && vol <= 66)
                    {
                        obj.attr('class','volume volume2');
                    }
                    else if(vol > 66)
                    {
                        obj.attr('class','volume volume3');
                    }
                    else
                    {
                        obj.attr('class','volume volume1');
                    }
                }
            });
    });
</script>
