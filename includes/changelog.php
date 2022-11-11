<?php
//changelog pp2d

?>
<div class="col-12">
  <h5>December 4, 2020</h5>
  <ul>
    <li>
    Added file folders for all asset types
    </li>
    <li>
    Added for various asset types.
    </li>
    <li>
    Improved accuracy of error checking.
    </li>
    <li>
      UI changes to improve UX
    </li>
  </ul>
</div>

<div class="col-12">
  <h5>November 25, 2020</h5>
  <ul>
    <li>
    Fixed issue where text objects were interfering with collisions
    </li>
  </ul>
</div>

<div class="col-12">
  <h5>November 22, 2020</h5>
  <ul>
    <li>
    Added a new function sprite(), equivalent of new_sprite()
    </li>
    <li>
    Object instantiation now takes a sprite as the first parameter. So you can instantiate an object like this: Alien(sprite(alien.png))
    </li>
  </ul>
</div>


<div class="col-12">
  <h5>November 20, 2020</h5>
  <ul>
    <li>
    text objects no longer persist room to room unless persistent flag is set to True
    </li>
    <li>
    text objects can be destroyed by calling destroy([text Object])
    </li>
  </ul>
</div>

<div class="col-12">
  <h5>September 7, 2020</h5>
  <ul>
    <li>
    Updated Old Film filter to include seed parameter.
    </li>
    <li>
    Updated function new_simple_light() to new_simple_light_filter()
    </li>
    <li>
    Updated radial blur filter to include correct parameters "angle","center","kernelSize","radius"
    </li>
  </ul>
</div>


<div class="col-12">
  <h5>September 6, 2020</h5>
  <ul>
    <li>
    Updated lacunarity misspelling in filters and documentation.
    </li>
    <li>
    Updated the camera position to account the screen scaling.
    </li>
    <li>
    Mouse positions, mouse_x(), mouse_y() updated to consider screen scaling.
    </li>
    <li>
    Added get_camera_x() and get camera_y() functions
    </li>
    <li>
    Updated screen / viewport to be: 1280/720px.
    </li>
  </ul>
</div>


<div class="col-12">
  <h5>September 4, 2020</h5>
  <ul>
    <li>
    Updated the way filters are removed to ensure accurate removal of filter.
    </li>
    <li>
    Capped FPS to 60fps regardless of screens' framespeed
    </li>
  </ul>
</div>


<div class="col-12">
  <h5>September 3, 2020</h5>
  <ul>
    <li>
    Updated the way taps were converted to mouse events.
    </li>
    <li>
    Fixed issue where tap positions were not updated the mouse_x() and mouse_y() positions.
    </li>
  </ul>
</div>

<div class="col-12">
  <h5>September 2, 2020</h5>
  <ul>
    <li>
    Updated new_drop_shadow function to new_drop_shadow_filter.
    </li>
    <li>
    Updated Text SkewX and SkewY to degrees.
    </li>
  </ul>
</div>

<div class="col-12">
  <h5>August 28, 2020</h5>
  <ul>
    <li>
    Updated text functions to include fontSize, angle, and skew.
    </li>
  </ul>
</div>

<div class="col-12">
  <h5>August 27, 2020</h5>
  <ul>
    <li>
    Fixed eventlisteners on assets so only one event listener was added per sprite.
    </li>
    <li>
    Fixed caching issue with sprites so trashing an sprite allows you to add another one of the same name.
    </li>
    <li>
    Updated the height and width of the canvas so it doesn't push the toolbar off screen when pressing play.
    </li>
    <li>
    Updated focus to canvas on play.
    </li>
    <li>
    Updated the filters documentation page to point to the correct posts.
    </li>
    <li>
    Updated the documentation for filters.
    </li>
  </ul>
</div>


































