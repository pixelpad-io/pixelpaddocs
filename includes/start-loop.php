<?php

namespace THEME;

$function = "start/loop";
$description = "In order to access variables in both the start and the loop of an object, 
you need to declare variables using the <b>self</b> parameter. To understand why, you must understand how Python objects are created within PixelPAD. 
Every PixelPAD object has default functions, start() and loop(). These functions are just visually represented by the start and loop tabs for convenience. 
In Python, any variable declared within any function belongs only to that function. So, if you wanted to use a variable across different functions, 
like in the case of using a variable across start() or loop(), you must declare that this variable belongs to the class by using 
the self. parameter.";
$parameters = array(
    "self.variable" => "Declares the variable belongs to the class, and can be accessed in both the start and the loop scripts.",
);

$return = "The variable used in both the start and loop";
$example = "";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "startloop");
