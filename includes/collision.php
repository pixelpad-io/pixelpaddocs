<?php

namespace THEME;

//get_collision
$function = "get_collision(obj: gameobject, filter: str) -> gameobject or bool";
$description = "Gets a the first object of class Filter colliding with the object obj";
$parameters = array(
                "obj" => "The game object to check collisions for.",
                "filter" => "Name of a game object asset, checks against all objects which are instances of that asset OR can check against a specific object"
              );
    
$return = "The first game object that obj is colliding with if there is a collision, False otherwise.";
$example = <<<EOT
enemy = get_collision(player, 'obj_enemy')
if enemy:
    player.health = player.health - 1
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_collision");



//get_collision_list
$function = "get_collision_list(obj: gameobject, filter: str) -> list";
$description = "Gets a list of objects of class Filter colliding with the object obj";
$parameters = array(
                "obj" => "The game object to check collisions for.",
                "filter" => "Name of a game object asset, checks against all objects which are instances of that asset."
              );
    
$return = "A list of game objects that obj is colliding with. Empty list otherwise.";
$example = <<<EOT
enemy = get_collision(player, 'obj_enemy')
if enemy:
    player.health = player.health - 1
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_collision_list");


//summary
$title = "Collisions";
$summary = "Collision is when two GameObjects touch. PixelPAD2D defines the area of which an object can collide via their sprite's width and height.";

Docs::renderSummaryTemplate($title, $summary);







