<?php

namespace THEME;

//new_sprite
$function = "sprite(name: str[, rows: int, cols: int]) -> sprite
<br>
new_sprite(name: str[, rows: int, cols: int]) -> sprite";
$description = "Loads a sprite asset.";
$parameters = array(
    "name" => "The name of a sprite to load, as a string.",
    "rows" => "If the sprite asset is a sprite sheet, the number of rows in the sprite sheet. Default: 1",
    "cols" => "If the sprite asset is a sprite sheet, the number of columns in the sprite sheet. Default: 1"
);

$return = "A sprite, which can be assigned to an object.";
$example = <<<EOT
self.sprite = new_sprite('spr_player.png')
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "new_sprite");

//get_bounds
$function = "get_bounds(obj: gameobject) -> dict";
$description = "Get the bounds of an object. Bounds uses the sprite assigned to the object and considers the angle, scale, x and y position of the object";
$parameters = array(
    "obj" => "The game object to check the bounds for",
);

$return = "Returns a dictionary with keys: topLeft, topRight, bottomLeft, bottomRight with its corresponding values.";
$example = <<<EOT
get_bounds(greg)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_bounds");

//get_width and get_height
$function = "get_width(obj: gameobject) -> int ||  get_height(obj: gameobject) -> int";
$description = "gets the width or height of an object with a sprite assigned. This will consider scaleX and scaleY but does not consider the angle of the object.";
$parameters = array(
    "obj" => "The game object to check the bounds for",
);

$return = "get_width() returns the width of the object in pixels. get_height() returns the height of the object in pixels.";
$example = <<<EOT
get_width(greg)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_width");

//summary
$title = "Sprites";
$summary = <<<EOT
Sprites are pictures. In PixelPAD, every object has a sprite assigned 
to it that says how the object looks in the game. A sprite is ultimately
just an <b>image file</b> uploaded from your computer. You can add one by using
the <b>green plus sign (+)</b> on the <b>ASSETS</b> sidebar. To load a sprite from within 
a script, use the <b>new_sprite</b> function.
<br><br>
Every GameObject class contains a variable called “sprite”. All we have to
do is set the variable to the image you want and the PixelPAD2D game engine
handles it from there. Check out the method <b>new_sprite</b> as it gives essential
examples.
EOT;

Docs::renderSummaryTemplate($title, $summary);
