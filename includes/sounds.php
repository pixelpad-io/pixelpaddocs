<?php

namespace THEME;

//new_sound
$function = "sound(name: str) -> sound";
$description = "Loads a sound asset.";
$parameters = array(
                "name" => "The name of the sound asset to load as a string. Also accepts URI",
              );
    
$return = "A sound which can be played.";
$example = <<<EOT
jump = new_sound("jump")
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "new_sound");

//play_sound
$function = "play_sound(snd: sound) -> None";
$description = "Plays a sound.";
$parameters = array(
                "snd" => "The sound to play",
              );
    
$return = "No return value.";
$example = <<<EOT
jump = new_sound("jump")
play_sound(jump)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "play_sound");


//loop_sound
$function = "loop_sound(snd: sound) -> None";
$description = "Toggle whether a sound will loop when it finishes playing.";
$parameters = array(
                "snd" => "The sound to loop.",
              );
    
$return = "No return value.";
$example = <<<EOT
music = new_sound("song")
loop_sound(music)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "loop_sound");


//stop_sound
$function = "stop_sound(snd: sound) -> None";
$description = "Stops a currently playing sound. If the sound is started again, it will replay from the beginning.";
$parameters = array(
                "snd" => "The sound to stop playing.",
              );
    
$return = "No return value.";
$example = <<<EOT
music = new_sound("song")
loop_sound(music)
stop_sound(music)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "stop_sound");


//set_volume
$function = "set_volume(snd: sound, volume: float) -> None";
$description = "Change the volume of the sound mixer.";
$parameters = array(
                "volume" => "The volume to set the mixer to. Muted is 0, maximum is 1.",
              );
    
$return = "No return value.";
$example = <<<EOT
set_volume(0.5)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "set_volume");

//summary
$title = "Sounds";
$summary = <<<EOT
PixelPAD2D supports the usage of sound! Using sound is similar
to setting up sprites however is slightly different. The way 
PixelPAD2D sound works is you load an audio file from assets 
into a variable, then play it. You can also set it to loop or
end it early.
EOT;

Docs::renderSummaryTemplate($title, $summary);



  
  
  
  
  
  
  
  
  
  