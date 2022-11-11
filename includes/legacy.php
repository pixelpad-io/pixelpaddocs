<style>
    .doc-code {
        color: white;
        background: #0a0a0a;
        font-family: monospace;
        padding: 2rem;
    }

    .doc-section {
        margin: 4rem 0rem;
    }
</style>
<div class="col-12 doc-section">

    <div style="margin:2rem 0rem;">
        <h2>Objects</h2>
        Objects are the main part of any PixelPAD game. Each object represents one active "thing" in your game.

        Like rooms, each object is defined by an <strong>object script,</strong> which says what the object looks like, how it should react to other objects, and other things like that.

        A room can have as many active objects as you want, but when you change rooms, they're all destroyed. To create a new object, use the object_new function.
    </div>
    <div style="margin:2rem 0rem;">
        <h2 class="docs-h2">Rooms</h2>

        In PixelPAD, rooms are where your game takes place.

        A room is defined by a <strong>room script,</strong> which is a Python program whose main purpose is to <strong>create and connect objects.</strong> You can think of a room as a "scene": a collection of game objects working together to present a specific scenario to the player.

        There can only be one room active at a time. To change which room is active, use the room_set function.
    </div>

    <div style="margin:2rem 0rem;">
        <h2 class="docs-h2">Sprites</h2>
        Sprites are pictures. In PixelPAD, every object has a sprite assigned to it that says how the object looks in the game.

        A sprite is ultimately just an <strong>image file</strong> uploaded from your computer. You can add one by using the <strong>green plus sign (+)</strong> on the <strong>ASSETS</strong> sidebar.

        To load a sprite from within a script, use the sprite_new function.
    </div>
    <div style="margin:2rem 0rem;">
        <h2 class="docs-h2">Functions</h2>
        PixelPAD has a number of Python <strong>functions,</strong> or commands, which affect your game. This is a full list of all functions currently in PixelPAD.
    </div>
</div>
<hr>

<div class="col-12 doc-section">
    <h3 class="docs-h3">animation_new(sprite: sprite, fps: int, start: int, end: int) -&gt; animation</h3>
    <b>Description</b>
    <div class="description">Create a new animation object from the provided sprite sheet.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>sprite</b>
        <div>The sprite sheet to create the animation from.</div>
    </div>
    <div class="parameters">
        <b>fps</b>
        <div>The frame rate of the animation.</div>
    </div>
    <div class="parameters">
        <b>start</b>
        <div>The frame number of the sprite sheet to start the animation from. 0 is the top left corner, with numbers increasing to the right and downwards.</div>
    </div>
    <div class="parameters">
        <b>end</b>
        <div>The frame number of the sprite sheet to end the animation on. 0 is the top left corner, with numbers increasing to the right and downwards.</div>
    </div>
    <b>Returns</b>
    <div class="returns">A new animation object that plays frames from start to end at a rate of fps.</div>
    <b>Example</b>
    <pre class="doc-code">
  walk_right_sheet = sprite_new('spr_walk_right_sheet', 1, 4)
  walk_right_anim = animation_new(walk_right_sheet, 4, 0, 3)
  </pre>
</div>


<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">animation_set(obj: gameobject, anim: animation) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Set the current animation of the game object obj to the animation anim. Does nothing if the animation is already set on the object.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>obj</b>
        <div>The game object instance to set the animation for.</div>
    </div>
    <div class="parameters">
        <b>anim</b>
        <div>The animation object to set.</div>
    </div>
    <b>Returns</b>
    <div class="returns">
        No return value.
    </div>
    <pre class="doc-code">animation_set(player, walk_right_anim)
  </pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">camera_move(dx: int, dy: int) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Move the camera by the specified distances.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>dx</b>
        <div>The distance along the X axis to move the camera.</div>
    </div>
    <div class="parameters">
        <b>dy</b>
        <div>The distance along the Y axis to move the camera.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">if player.x &lt; -200:
    camera_move(-200, 0)
  </pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">camera_set(x: int, y: int) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Move the camera directly to the specified coordinates.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>x</b>
        <div>The X coordinate to move the camera to.</div>
    </div>
    <div class="parameters">
        <b>y</b>
        <div>The Y coordinate to move the camera to.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">camera_set(player.x, player.y)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">collision_check(obj: gameobject, filter: str or gameobject) -&gt; gameobject or bool</h3>
    <b>Description</b>
    <div class="description">Checks whether the game object obj is colliding with any of the objects matched by filter.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>obj</b>
        <div>The game object to check collisions for.</div>
    </div>
    <div class="parameters">
        <b>filter</b>
        <div>Objects to check for collision with. If a single game object is passed, checks only that game object. If the name of a game object asset is passed, checks against all objects which are instances of that asset.</div>
    </div>
    <b>Returns</b>
    <div class="returns">The first game object that obj is colliding with if there is a collision, False otherwise.</div>
    <b>Example</b>
    <pre class="doc-code">enemy = collision_check(player, 'obj_enemy')
if enemy:
  player.health = player.health - 1
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">collision_check_all(obj: gameobject, filter: str or gameobject) -&gt; list or bool</h3>
    <b>Description</b>
    <div class="description">Checks whether the game object obj is colliding with any of the objects matched by filter.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>obj</b>
        <div>The game object to check collisions for.</div>
    </div>
    <div class="parameters">
        <b>filter</b>
        <div>Objects to check for collision with. If a single game object is passed, checks only that game object. If the name of a game object asset is passed, checks against all objects which are instances of that asset.</div>
    </div>
    <b>Returns</b>
    <div class="returns">A list of all game objects that are colliding with obj if there are any collisions, False otherwise.</div>
    <b>Example</b>
    <pre class="doc-code">enemies = collision_check_all(player, 'obj_enemy')
for enemy in enemies:
  player.health = player.health - 1
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">data_clear() -&gt; None</h3>
    <b>Description</b>
    <div class="description">Clears all save data for the current player.</div>
    <b>Parameters</b>
    <div class="parameters">No parameters.</div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">data_clear()
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">data_load(key: str, default: str or int or bool) -&gt; str or int or bool</h3>
    <b>Description</b>
    <div class="description">Loads a piece of data from the player's persistent save file. Data can be a string, a number, or a boolean.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>key</b>
        <div>A unique name for the piece of data to load. Can be any string.</div>
    </div>
    <div class="parameters">
        <b>default</b>
        <div>The data to return if there is no data saved under the provided key.</div>
    </div>
    <b>Returns</b>
    <div class="returns">The data stored under key, or default if there is no data stored under key.</div>
    <b>Example</b>
    <pre class="doc-code">current_room = data_load('current_room', 'rm_start')
room_set(current_room)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">data_save(key: str, val: str or int or bool) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Saves a piece of data into the player's persistent save file. Data can be a string, a number, or a boolean.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>key</b>
        <div>A unique name for the piece of data to save.</div>
    </div>
    <div class="parameters">
        <b>val</b>
        <div>The data to save.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">data_save('current_lives', player.lives)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">editor_open(name: str, section: str, line: int) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Opens the named script asset in the code editor. Automatically opens the specified section and scrolls to the specified line number.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>name</b>
        <div>The name of the script asset to open in the code editor.</div>
    </div>
    <div class="parameters">
        <b>section</b>
        <div>The section of the script to open. Can be either start or loop.</div>
    </div>
    <div class="parameters">
        <b>line</b>
        <div>The line number of the script to scroll to once the script is open.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">editor_open('obj_player', 'loop', 7)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">key_is_pressed(key: str) -&gt; bool</h3>
    <b>Description</b>
    <div class="description">Determines whether a keyboard key is <i>currently</i> pressed down.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>key</b>
        <div>The name of a keyboard key to check, as a string. Possible values are A through Z, 0 through 9, left/right/up/down, space, enter, backspace, escape, shift, and ctrl.</div>
    </div>
    <b>Returns</b>
    <div class="returns">True if the key is currently pressed down, False otherwise.</div>
    <b>Example</b>
    <pre class="doc-code">if key_is_pressed('up'):
  player.y = player.y + 1
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">key_was_pressed(key: str) -&gt; bool</h3>
    <b>Description</b>
    <div class="description">Determines whether a keyboard key was pressed down <i>on the current frame</i>.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>key</b>
        <div>The name of a keyboard key to check, as a string. Possible values are A through Z, 0 through 9, left/right/up/down, space, enter, backspace, escape, shift, and ctrl.</div>
    </div>
    <b>Returns</b>
    <div class="returns">True if the key was pressed down on the current frame, False otherwise.</div>
    <b>Example</b>
    <pre class="doc-code">if key_was_pressed('space'):
  onground = False
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">mouse_is_pressed(button: str) -&gt; bool</h3>
    <b>Description</b>
    <div class="description">Determines whether a mouse button is <i>currently</i> pressed down.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>button</b>
        <div>The name of a mouse button to check, as a string. Possible values are left, right, and middle.</div>
    </div>
    <b>Returns</b>
    <div class="returns">True if the button is currently pressed down, False otherwise.</div>
    <b>Example</b>
    <pre class="doc-code">if mouse_is_pressed('left'):
  object_new('obj_projectile')
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">mouse_was_pressed(button: str) -&gt; bool</h3>
    <b>Description</b>
    <div class="description">Determines whether a mouse button was pressed down <i>on the current frame</i>.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>button</b>
        <div>The name of a mouse button to check, as a string. Possible values are left, right, and middle.</div>
    </div>
    <b>Returns</b>
    <div class="returns">True if the button was pressed down on the current frame, False otherwise.</div>
    <b>Example</b>
    <pre class="doc-code">if mouse_was_pressed('right'):
  print('right mouse button was clicked!')
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">mouse_x() -&gt; int</h3>
    <b>Description</b>
    <div class="description">Returns the current X coordinate of the mouse pointer.</div>
    <b>Parameters</b>
    <div class="parameters">No parameters.</div>
    <b>Returns</b>
    <div class="returns">The current X coordinate of the mouse pointer. 0 is the middle of the screen, positive numbers are to the right, and negative numbers are to the left.</div>
    <b>Example</b>
    <pre class="doc-code">player.x = mouse_x()
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">mouse_y() -&gt; int</h3>
    <b>Description</b>
    <div class="description">Returns the current Y coordinate of the mouse pointer.</div>
    <b>Parameters</b>
    <div class="parameters">No parameters.</div>
    <b>Returns</b>
    <div class="returns">The current Y coordinate of the mouse pointer. 0 is the middle of the screen, positive numbers are towards the top, and negative numbers are towards the bottom.</div>
    <b>Example</b>
    <pre class="doc-code">player.y = mouse_y()
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">object_new(name: str) -&gt; gameobject</h3>
    <b>Description</b>
    <div class="description">Creates a new instance of the named game object in the current room.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>name</b>
        <div>The name of a game object asset to instantiate, as a string.</div>
    </div>
    <b>Returns</b>
    <div class="returns">A new instance of the named game object asset.</div>
    <b>Example</b>
    <pre class="doc-code">player = object_new('obj_player')
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">object_destroy(obj: gameobject) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Destroys a game object instance.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>obj</b>
        <div>The game object instance to destroy.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">if player.is_dead:
  object_destroy(player)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">room_get() -&gt; str</h3>
    <b>Description</b>
    <div class="description">Returns the name of the active room.</div>
    <b>Parameters</b>
    <div class="parameters">No parameters.</div>
    <b>Returns</b>
    <div class="returns">The name of the active room, as a string.</div>
    <b>Example</b>
    <pre class="doc-code">if room_get() == 'rm_gameover':
  print('You lost!')
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">room_set(name: str) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Changes the active room to name.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>name</b>
        <div>The name of a room asset to set as the active room, as a string.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">room_set('rm_gameover')
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">sound_new(name: str) -&gt; sound</h3>
    <b>Description</b>
    <div class="description">Loads a sound asset.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>name</b>
        <div>The name of the sound asset to load.</div>
    </div>
    <b>Returns</b>
    <div class="returns">A sound which can be played.</div>
    <b>Example</b>
    <pre class="doc-code">jump_sfx = sound_new('snd_jump')
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">sound_play(snd: sound) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Plays a sound.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>snd</b>
        <div>The sound to play.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <pre class="doc-code">sound_play(footstep_sfx)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">sound_loop(snd: sound) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Toggle whether a sound will loop when it finishes playing.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>snd</b>
        <div>The sound to toggle looping for.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">sound_loop(background_music)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">sound_stop(snd: sound) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Stops a currently playing sound. If the sound is started again, it will replay from the beginning.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>snd</b>
        <div>The sound to stop playing.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">if not player.moving:
  sound_stop(footsteps_sfx)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">sound_volume(volume: int) -&gt; None</h3>
    <b>Description</b>
    <div class="description">Change the volume of the sound mixer.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>volume</b>
        <div>The volume to set the mixer to. Muted is 0, maximum is 100.</div>
    </div>
    <b>Returns</b>
    <div class="returns">No return value.</div>
    <b>Example</b>
    <pre class="doc-code">sound_volume(50)
</pre>

</div>
<hr>
<div class="col-12 doc-section">

    <h3 class="docs-h3">sprite_new(name: str[, rows: int, cols: int]) -&gt; sprite</h3>
    <b>Description</b>
    <div class="description">Loads a sprite asset.</div>
    <b>Parameters</b>
    <div class="parameters">
        <b>name</b>
        <div>The name of a sprite to load, as a string.</div>
    </div>
    <div class="parameters">
        <b>rows</b> (<i>optional</i>)
        <div>If the sprite asset is a sprite sheet, the number of rows in the sprite sheet.</div>
    </div>
    <div class="parameters">
        <b>cols</b> (<i>optional</i>)
        <div>If the sprite asset is a sprite sheet, the number of columns in the sprite sheet.</div>
    </div>
    <b>Returns</b>
    <div class="returns">A sprite which can be assigned to an object.</div>
    <b>Example</b>
    <pre class="doc-code">player.sprite = sprite_new('spr_player')
  </pre>
</div>