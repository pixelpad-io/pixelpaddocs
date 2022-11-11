<?php


namespace THEME;

//set_room
$function = "set_room(name: str) -> object";
$description = "Changes the active room to name.";
$parameters = array(
    "name" => "The name of a room asset to set as the active room, as a string.",
);

$return = "A room object";
$example = <<<EOT
set_room('Level_2')
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "set_room");

//get_room
$function = "get_room() -> object";
$description = "Returns the active room object.";
$parameters = array(
    "None" => "No parameters.",
);

$return = "The currently active room object.";
$example = <<<EOT
rm = get_room()
print(rm.__name__)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_room");

//summary
$title = "Rooms";
$summary = <<<EOT
	In PixelPAD, rooms are where your game takes place. 
	A room is defined by a <b>room script</b>, which is a Python 
	program whose main purpose is to <b>create and connect objects</b>.
	You can think of a room as a "scene": a collection of game
	objects working together to present a specific scenario to
	the player. There can only be one room active at a time. To
	change which room is active, use the <b>set_room</b> function. 
  Changing the active room will destroy all objects created in that room.
  To ensure objects are NOT destroyed, you must set the persistent property in that
  object to True. <b>object.persistent = True</b>
EOT;


Docs::renderSummaryTemplate($title, $summary);
