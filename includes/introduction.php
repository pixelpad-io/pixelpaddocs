<div class="mb-5">
    <div class="mb-5">
        <h4>Python</h4>
        <div>
            PixelPAD 2D uses Python to program games, and applications.
        </div>
    </div>
    <div class="mb-5">
        <h4>Engine</h4>
        <div>
            In order to make video games a lot of work must be completed first,
            so instead of having to make everything from the ground up each time
            Computer Scientists use something called a “game engine” or just engine.
            The engine handles how what you made appears for the user, and dictates
            what you can do. PixelPAD2D is one of our major engines on PixelPAD.
        </div>
    </div>
    <div class="mb-5">
        <h4>Assets</h4>
        <div>
            Every PixelPad2D game editor has a panel titled Assets.
            An Asset is any piece of information you put in your game,
            examples are Classes, Rooms, Sprites, Sounds or functions.
        </div>
    </div>
    <div class="mb-5">
        <h4>Classes</h4>
        <div>
            Classes are scripts in your game that are attached to an Object.
            However this also includes a class called “Game”. Every script
            inside of classes contains a Start & Loop. Start runs when the
            script “starts” while loop runs many times per second while the
            object is active. To make a class that isn’t attached to an Object,
            simply create it in the functions section of the assets. For more
            information check out the Game section and the Objects section in
            the documentation.
        </div>
    </div>
    <div class="mb-5">
        <h4>Rooms</h4>
        <div>
            In PixelPAD, rooms are where your game takes place. A room is defined
            by a room script, which is a Python program whose main purpose is to
            create and connect objects. You can think of a room as a "scene": a
            collection of game objects working together to present a specific scenario
            to the player. There can only be one room active at a time. See the
            Rooms section in the documentation for more.
        </div>
    </div>
    <div class="mb-5">
        <h4>Sprites</h4>
        <div>
            A sprite is a two-dimensional bitmap or image most often in a 2D video games
        </div>
    </div>
    <div class="mb-5">
        <h4>Sounds</h4>
        <div>
            Sound assets for your game. Can use mp3, midi, and wav files.
        </div>
    </div>
    <div class="mb-5">
        <h4>Functions</h4>
        <div>
            A function is code that we need to use often, and since we need to use it often
            we can put it in here and use it from any other script in our game. Functions created here are created
            outside the game loop, and are instantiated before any other code. You can even create Python classes here.
        </div>
    </div>
    <div class="mb-5">
        <h4>Asset Library</h4>
        <div class="mb-5">
            The asset library is accessed by clicking on the plus (+) button within the assets panel for sprites and sounds. The asset library has
            free to use sprites you can use for your application. You can also upload your own assets by clicking the upload icon within the library.
        </div>
        <img class="w-100" src="<?= get_template_directory_uri() . "/pixelpaddocs/includes/media/assetmenus.png" ?>">
    </div>
</div>