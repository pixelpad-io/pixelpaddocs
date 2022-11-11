<?php

namespace THEME;

$function = "key_is_pressed(key: str) -> bool";
$description = "Determines whether a keyboard key is currently pressed down. Will check every loop.";
$parameters = array("key"  => "The name of a keyboard key to check, as a string. Possible values 
                            are A through Z, 0 through 9, arrowLeft/arrowRight/arrowUp/arrowDown, ' ' (space), enter, backspace,
                            escape, shift, and control."
              );
    
$return = "True if the key is currently pressed down, False otherwise.";
$example = <<<EOT
if key_is_pressed("up"):
    player.y = player.y + 1
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "key_is_pressed");

//key_was_pressed
$function = "key_was_pressed(key: str) -> bool";
$description = "Determines whether a keyboard key was pressed down. Only checks once.";
$parameters = array(
                "key"    => "The name of a keyboard key to check, as a string. Possible values 
                            are A through Z, 0 through 9, arrowLeft/arrowRight/arrowUp/arrowDown, ' ' (space), enter, backspace,
                            escape, shift, and control."
              );
    
$return = "True if the key was pressed down, only checks once. False otherwise.";
$example = <<<EOT
if key_was_pressed('space'):
    onground = False";
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "key_was_pressed");

//mouse_is_pressed
$function = "mouse_is_pressed(button: str) -> bool";
$description = "Determines whether a mouse button is currently pressed down.";
$parameters = array(
                "button" => "The name of a mouse button to check, as a string. Possible values are left,
                             right, and middle."
              );
    
$return = "True if the button is currently pressed down, False otherwise.";
$example = <<<EOT
if mouse_is_pressed('left'):
    object_new('obj_projectile');
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "mouse_is_pressed");

//mouse_was_pressed
$function = "mouse_was_pressed(button: str) -> bool";
$description = "Determines whether a mouse button was pressed down on the current frame.";
$parameters = array(
                "button"    => "The name of a mouse button to check, as a string. Possible values are left,
                                right, and middle."
              );
    
$return = "True if the button is currently pressed down, False otherwise.";
$example = <<<EOT
if mouse_was_pressed('right'):
    print('right mouse button was clicked!');
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "mouse_was_pressed");

//mouse_x
$function = "mouse_x() -> int";
$description = "Returns the current X coordinate of the mouse pointer.";
$parameters = array("None" => "No Parameters.");
    
$return = "The current X coordinate of the mouse pointer. 0 is the middle 
          of the screen, positive numbers are to the right, and negative 
          numbers are to the left.";
          
$example = "player.x = mouse_x()";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "mouse_x");

//mouse_y
$function = "mouse_y() -> int";
$description = "Returns the current Y coordinate of the mouse pointer.";
$parameters = array("None" => "No Parameters.");
    
$return = "The current Y coordinate of the mouse pointer. 0 is the middle 
          of the screen, positive numbers are to the right, and negative 
          numbers are to the left.";
$example = "player.y = mouse_y()";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "mouse_y");


//summary
$title = "Input";
$summary = "Input is anything we give to the computer for it to process, such as our keyboard and mouse.";

Docs::renderSummaryTemplate($title, $summary);




