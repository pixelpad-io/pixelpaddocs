<?php 

namespace THEME;
/*docs-pp2d : The Game Script*/ 

//access global objects

$function = "game.variable";
$description = "variables created in the game script are globally accessible in all other objects.";
$parameters = array(
                "game.variable" => "Accesses the variable of the game room.",
              );
    
$return = "The variable in the game script";
$example = "";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "game_script");

//summary
$title = "game";
$summary = <<<EOT
The Game Script is a special type of room that always persists, and is always running, even if you switch to a different room in your game.
EOT;

Docs::renderSummaryTemplate($title, $summary);






