<?php

namespace THEME;
/*docs-pp2d : Objects*/

//new_object
$function = "new_object(name: str) -> GameObject";
$description = "Creates a new instance of the named game object in the current room. You can also instantiate the class by simply calling the class Name() where Name is the name of the class";
$parameters = array(
    "name"    => "The name of a GameObject asset to instantiate, as a string."
);

$return = "A new instance of the named GameObject asset.";
$example = <<<EOT
gary = new_object('Player')
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "new_object");


//destroy
$function = "destroy(obj: GameObject) -> GameObject";
$description = "Destroys a gameObject instance.";
$parameters = array(
    "obj"    => "The GameObject instance to destroy"
);

$return = "No Return Value.";
$example = <<<EOT
destroy(gary)
EOT;



Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "destroy");



$title = "Objects";
$summary =
    <<<EOT
  Objects (Sometimes referred to as GameObjects) are the 
	main part of any PixelPAD2D game. Each object represents
	one active "thing" in your game. Like rooms, each object
	is defined by an object script, which says what the 
	object looks like, how it should react to other objects,
	and other things like that. A room can have as many active
	objects as you want, but when you change rooms, they're 
	all destroyed. To create a new object, use the new_object
	function.
EOT;

Docs::renderSummaryTemplate($title, $summary);



$title = "Scripts";
$summary = <<<EOT
<b>Start</b> - The Object Start tab contains code that gets run right away
when an GameObject instance is created. An example is setting a ‘Sprite’
(A computer image) to an object. 
<br/><br/>

<b>Loop</b> - The Object Loop tab contains 
code that gets run many times per second while the object is active. 
An example is controlling the player’s movement.	
EOT;

Docs::renderSummaryTemplate($title, $summary);

?>

<h4 class="mt-5">Built-in Object Variables</h4>

<div class="mt-4">
    <div>
        <strong>x</strong>
    </div>
    <div class="mb-2">
        The x position of an object. Default 0. Positive values move objects to the right.
    </div>
    <div>
        <strong>y</strong>
    </div>
    <div class="mb-2">
        The y position of an object. Default 0. Positive values moves objects upwards.
    </div>
    <div>
        <strong>z</strong>
    </div>
    <div class="mb-2">
        The z position of an object. Default 0. Positive values moves objects to the upper layer.
    </div>
    <div>
        <strong>sprite</strong>
    </div>
    <div class="mb-2">
        A sprite is a computer image. Setting the sprite value on an object will change the image of that object.
    </div>
    <div>
        <strong>scaleX</strong>
    </div>
    <div class="mb-2">
        scaleX allows you to expand/shrink the object over the X axis. This affects the width of the
        current sprite as well as the collision mask. 1 is the default size, 0.5 is half, 2 is double.
    </div>
    <div>
        <strong>scaleY</strong>
    </div>
    <div class="mb-2">
        scaleY allows you to expand/shrink the object over the Y axis. This affects the height of the
        current sprite as well as the collision mask. 1 is the default size, 0.5 is half, 2 is double.
    </div>
    <div>
        <strong>skewX</strong>
    </div>
    <div class="mb-2">
        skewX rotates the object around the X axis in degrees.
    </div>
    <div>
        <strong>skewY</strong>
    </div>
    <div class="mb-2">
        skewY rotates the object around the Y axis in degrees.
    </div>
    <div>
        <strong>angle</strong>
    </div>
    <div class="mb-2">
        Angle determines the rotation the object takes in degrees.
    </div>

    <div>
        <strong>visible</strong>
    </div>
    <div class="mb-2">
        visible (boolean) determines if object is visible.
    </div>

    <div>
        <strong>alpha</strong>
    </div>
    <div class="mb-2">
        alpha (float) determines the opacity of the object. 0 is invisible, 1 is fully visible. 0.5 is half opacity.
    </div>
    <div>
        <strong>persistent</strong>
    </div>
    <div class="mb-2">
        persistent (boolean) determines if the object persists between rooms. Default is False.
        If set to False, objects will be destroyed when changing rooms. If set to True, objects will not be destroyed when changing
        rooms.
    </div>
    <div class="my-5">

    </div>
</div>