<?php

namespace THEME;

//new_animation
$function = "animation(sprite: sprite, fps: int, start: int, end: int) -> animation";
$description = "Create a new animation object from the provided sprite sheet.";
$parameters = array(
                "sprite" => "The sprite object to create the animation from. A sprite object is created from new_sprite(uri)",
                "fps"    => "The frame rate of the animation.",
                "start"  => "The frame number of the sprite sheet to start the animation from. 0 is the top 
                            left corner, with numbers increasing to the right and downwards.",
                "end"    => "The frame number of the sprite sheet to end the animation on. 0 is the top left
                             corner, with numbers increasing to the right and downwards."
              );
    
$return = "A new animation object that plays frames from start to end at a rate of fps.";
$example = <<<EOT
walk_right_sheet = new_sprite('spr_walk_right_sheet', 1, 4)
walk_right_anim = new_animation(walk_right_sheet, 4, 0, 3)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "new_animation"); //196572


//set_animation
$function = "set_animation(obj: gameobject, anim: animation) -> None";
$description = "Set the current animation of the game object obj to the animation anim. Animation will start from initial frame set in anim";
$parameters = array(
                "obj"    => "The GameObject instance to set the animation for. Can use <b>self</b>",
                "anim"    => "The animation object to set."
              );
    
$return = "No return value";
$example = "set_animation(self, walk_right_anim)";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "set_animation"); //196573


//animation summary
$title = "Animation"; 
$summary = <<<EOT
Animations are what lets us make our sprites move. To make animations you use something called a <b>“sprite sheet”</b>. 
Sprite sheets are when you take multiple sprites, put them inside of one sprite and then get the game, in this case 
PixelPAD2D to break the images up for us turning them into <b>frame(s)</b>. Then once you do that you can tell the 
engine to animate our objects for us by looping quickly through <b>specific frames</b>. Check out the methods and 
examples below for more.
EOT;
$img = "https://s3.us-west-1.amazonaws.com/media.pixelpad.io/__PIXELPAD_ASSET__.1.191536.ninjafrogrun.gif";
  
Docs::renderSummaryTemplate($title, $summary, $img);








