<?php

namespace THEME;

//move_camera
$function = "move_camera(dx: int, dy: int) -> None";
$description = "Move the camera by the specified distances.";
$parameters = array(
                "dx" => "The distance along the X axis to move the camera.",
                "dy" => "The distance along the Y axis to move the camera."
              );
    
$return = "No return value.";
$example = <<<EOT
if player.x < -200:
    move_camera(-200, 0)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "move_camera");


//set_camera
$function = "set_camera(x: int, y: int) -> None";
$description = "Move the camera directly to the specified coordinates.";
$parameters = array(
                "x" => "The X coordinate to move the camera to.",
                "y" => "The Y coordinate to move the camera to."
              );
    
$return = "No return value.";
$example = <<<EOT
if player.x < -200:
    set_camera(player.x, player.y)
EOT;


Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "set_camera");

//get_camera_x()
$function = "camera_x() -> int";
$description = "Get the camera's current x coordinate";
$parameters = array("None" => "None");
$return = "Camera's current X position";
Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_camera_x");

//get_camera_y()
$function = "camera_y() -> int";
$description = "Get the camera's current y coordinate";
$parameters = array("None" => "None");
$return = "Camera's current Y position";
Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_camera_y");


//summary
$title = "Camera";
$summary = <<<EOT
The camera is what is being rendered to the screen. It is set to origin (0,0) 
of the canvas. It can be moved around by using set_camera, and move_camera
EOT;


Docs::renderSummaryTemplate($title, $summary);


