<?php

namespace THEME;

$function = "text(text :string, x :number, y :number) -> sprite";
$description = "Loads a sprite asset.";
$parameters = array(
                "text" => "The text you want to display.",
                "x" => "The x position of the text object",
                "y" => "The y position of the text object"
              );
    
$return = "A text object";
$example = "";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "new_text");

//summary
$title = "text properties";
$summary = <<<EOT
After creating the text object, you can set a number of built-in properties to have various affects. The following built-in text-properties can be used.
<table class="table table-striped table-dark table-hover">
<tr><td>text.text = "hello world"</td><td> sets the text to hello world</td></tr>
<tr><td>text.scaleX = 2</td><td> sets the width to 200%</td></tr>
<tr><td>text.scaleY = 2</td><td> sets the height to 200%</td></tr>
<tr><td>text.skewX = 45</td><td> sets the skewX by 45 degrees</td></tr>
<tr><td>text.skewY = 45</td><td> sets the skewY by 45 degrees</td></tr>
<tr><td>text.x = 100</td><td> sets the x position to 100</td></tr>
<tr><td>text.y = 100</td><td> sets the y position to 100</td></tr>
<tr><td>text.z = 10</td><td> sets the z position to 10</td></tr>
<tr><td>text.visible = False</td><td> sets the visibility to False </td></tr>
<tr><td>text.angle = 45</td><td> sets the angle to 45 degrees</td></tr>
<tr><td>text.fontSize = 16</td><td> sets the font size to 16</td></tr>
<tr><td>text.fontFamily = "roboto"</td><td> sets the font type to roboto</td></tr>
<tr><td>text.color = "#fff"</td><td> sets the hex value color (white)</td></tr>
<tr><td>text.persistent = True</td><td> sets the persistence to True</td></tr>
<tr><td>text.halign = "center"</td><td>Sets alignment of the text horizontally. Use "right", "left", or "center" alignment</td></tr>
<tr><td>text.valign = "top"</td><td>Sets alignment of the text vertically. Use "top", "middle", or "bottom" alignment</td></tr>
</table>
EOT;

Docs::renderSummaryTemplate($title, $summary);




  
  
  
  
  
  

