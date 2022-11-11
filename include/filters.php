<?php

namespace THEME;

//summary
$title = "Filters";
$summary = "Filters, sometimes called shaders allows us to use our Graphics Cards to create special visual effects.
			PixelPAD2D gives us access to a collection of filters that we can use. To use them you just need to add them
			to a GameObject, or the Game object itself.";

Docs::renderSummaryTemplate($title, $summary);

//new_filter
$function = "add_filter(obj: GameObject, filter : Filter) -> filter id";
$description = "Adds a filter to a game object, or globally if set to the Game object.";
$parameters = array(
                "obj" => "The game object to apply the filter on. You may also use the game object, which applies the filter globally",
                "filter" => "The filter to use. For example, you can create a new glow filter by calling new_glow_filter()"
              );
    
$return = "Filter id. Use this filter id to remove filters";
$example = "add_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//remove_filter
$function = "remove_filter(obj: GameObject, filterid : number) -> Filter";
$description = "Remove the filter from a specific game object.";
$parameters = array(
                "obj" => "The game object to remove the filter from.",
                "filter id" => "The filter id, returned from add_filter()"
              );
    
$return = "None";
$example = "remove_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_adjustment///
$function = "new_adjustment_filter(filterSettings : dictionary) -> Filter";
$description = "This filter allows you to change the overall color/brightness/saturation of the GameObject's sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.<br>Default: 2",
                "filterSettings[\"gamma\"]" => "How much to adjust the object's gamma.<br>Default: 2",
                "filterSettings[\"saturation\"]" => "How much to adjust the object's saturation.<br>Default: 2",
                "filterSettings[\"contrast\"]" => "How much to adjust the object's constrast.<br>Default: 1",
                "filterSettings[\"brightness\"]" => "How much to adjust the object's brightness.<br>Default: 1",
                "filterSettings[\"red\"]" => "How much to adjust the object's red.<br>Default: 1",
                "filterSettings[\"green\"]" => "How much to adjust the object's green.<br>Default: 1",
                "filterSettings[\"blue\"]" => "How much to adjust the object's blue.<br>Default: 1",
                "filterSettings[\"alpha\"]" => "How much to adjust the object's alpha.<br>Default: 1",
              );
    
$return = "Filter";
$example = "new_adjustment_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_adv_bloom///
$function = "new_adv_bloom_filter(filterSettings : dictionary) -> Filter";
$description = "This filter allows you to add bloom to the GameObject's sprite. Bloom is an effect to make the sprite
				look more like it would if taken by a real world camera.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"threshold\"]" => "The threshold of brightness at which bloom will start appearing.<br>Default: 0.5",
                "filterSettings[\"bloomScale\"]" => "The intensity of the effect.<br>Default: 1.0",
                "filterSettings[\"brightness\"]" => "How bright the bloom effect will be.<br>Default: 1.0",
                "filterSettings[\"blur\"]" => "The amount to blur the bloom.<br>Default: 8",
                "filterSettings[\"quality\"]" => "quality of the blur<br>Default: 4",
                "filterSettings[\"kernels\"]" => "the kernels of the blur<br>Default: null",
                "filterSettings[\"pixelSize\"]" => "The pixel size of the Blur<br>Default: 1",
                "filterSettings[\"resolution\"]" => "The resolution of the Blur.<br>Default: Resolution of canvas",
                );
    
$return = "Filter";
$example = "new_adv_bloom_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_ascii//
$function = "new_ascii_filter(filterSettings : dictionary) -> Filter";
$description = "Makes the object's sprite appear as if it was ascii art.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"size\"]" => "The font size of the ascii text.<br>Default: 8",
				);
    
$return = "Filter";
$example = "new_ascii_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_bevel_filter///
$function = "new_bevel_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a bevel effect to the object.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"rotation\"]" => "The angle of the light in degrees.<br>Default: 45",
                "filterSettings[\"thickness\"]" => "The tickness of the bevel.<br>Default: 2",
                "filterSettings[\"lightColor\"]" => "Color of the light.<br>Default: 0xffffff",
                "filterSettings[\"lightAlpha\"]" => "Alpha of the light.<br>Default: 0.7",
                "filterSettings[\"shadowColor\"]" => "Color of the shadow.<br>Default: 0x000000",
                "filterSettings[\"shadowAlpha\"]" => "Alpha of the shadow.<br>Default: 0.7",
              );
$return = "Filter";
$example = "new_bevel_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_bulge_pinch_filter///
$function = "new_bulge_pinch_filter(filterSettings : dictionary) -> Filter";
$description = "Makes the object's sprite appear as if it was stretched out from one point.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"center\"]" => "Coordinates to set the bulge or pinch<br>Default: [0.5,0.5]",
                "filterSettings[\"radius\"]" => "The radius of the stretch.<br>Default: 100",
                "filterSettings[\"strength\"]" => "The strength of the stretch.<br>Default: 1",
              );
$return = "Filter";
$example = "new_bulge_pinch_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_color_map_filter//
$function = "new_color_map_filter(filterSettings : dictionary) -> Filter";
$description = "Adjust a sprite's overall colors by mapping another sprite to it.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"colorMap\"]" => "The sprite to map the colors to.<br>Default: new_sprite('nosprite.png')",
                "filterSettings[\"nearest\"]" => "If it should use the nearest color to the original (True/False) <br>Default: False",
                "filterSettings[\"mix\"]" => "How much the colors mix.<br>Default: 1"
            );
$return = "Filter";
$example = "new_color_map_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_color_replace_filter///
$function = "new_color_replace_filter(filterSettings : dictionary) -> Filter";
$description = "Replace one color with another color";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"originalColor\"]" => "The RGB that will be changed.<br>Default: [1,0,0]",
                "filterSettings[\"newColor\"]" => "The color to change to in RGB<br>Default: [0,0,1]",
                "filterSettings[\"epsilon\"]" => "Tolerance or sensitivity.<br>Default: 0.8"
              );
$return = "Filter";
$example = "new_color_replace_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_convolution///
$function = "new_convolution_filter(filterSettings : dictionary) -> Filter";
$description = "The convolution filter applies a matrix convolution effect by combining pixels in the GameObject's sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"matrix\"]" => "A 9 point array that holds the values for the matrix calculations. <br>Default: [0.5,0.5,0.5,0.5,0,0,0,0,0]",
                "filterSettings[\"width\"]" => "The width of sprite you are using. <br>Default: 200",
                "filterSettings[\"height\"]" => "The height of the sprite you are using.<br>Default: 200"
				);
    
$return = "Filter";
$example = "new_convolution_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_cross_hatch///
$function = "new_cross_hatch_filter() -> Filter";
$description = "The cross hatch filter overlays the sprite with a white and black cross hatch pattern.";
$parameters = array("None" => "None");
$return = "Filter";
$example = "new_cross_hatch_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_crt///
$function = "new_crt_filter(filterSettings : dictionary) -> Filter";
$description = "The CRT Filter makes the sprite look as if it is being projected through a CRT Television.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"curvature\"]" => "How curved the CRT display appears. <br>Default: 1.0",
                "filterSettings[\"lineWidth\"]" => "The width of the CRT lines. <br>Default: 1.0",
                "filterSettings[\"lineConstrast\"]" => "The contrast of the lines on the rest of the sprite. <br>Default: 0.25",
                "filterSettings[\"verticalLine\"]" => "If it is a horizonal or vertical line (True/False) <br>Default: False",
                "filterSettings[\"noise\"]" => "The amount of noise to add to the filter. <br>Default: 0.3",
                "filterSettings[\"noiseSize\"]" => "The seed the noise filter should use. <br>Default: 1.0",
                "filterSettings[\"seed\"]" => "The seed for the CRT filter. <br>Default: 0",
                "filterSettings[\"vignetting\"]" => "How much vignetting to do, darkening the pixels closest to the sprite's corners. <br>Default: 0.3",
                "filterSettings[\"vignettingAlpha\"]" => "The alpha the vignetting should take on. <br>Default: 1.0",
                "filterSettings[\"vignettingBlur\"]" => "How blurry the vignetting should be. <br>Default: 0.3",
                "filterSettings[\"time\"]" => "Used to animate the filter, increase it over time to have the CRT animate. <br>Default: 0",
              );
$return = "Filter";
$example = "new_crt_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_dot///
$function = "new_dot_filter(filterSettings : dictionary) -> Filter";
$description = "Puts the sprite through a black and white pointillism filter.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"scale\"]" => "The scale at which the dots should be drawn. <br>Default: 1",
                "filterSettings[\"angle\"]" => "The angle a which the dot pattern should be. <br>Default: 5",
                );
    
$return = "Filter";
$example = "new_dot_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_drop_shadow///
$function = "new_drop_shadow_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a drop shadow to the GameObject's sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"rotation\"]" => "The angle a which the shadow should appear.<br>Default:45",
                "filterSettings[\"distance\"]" => "How far the shadow should go from the GameObject.<br>Default:5",
                "filterSettings[\"color\"]" => "The color of the shadow.<br>Default:0x000000",
                "filterSettings[\"alpha\"]" => "The alpha of the blur.<br>Default:0.5",
                "filterSettings[\"shadowOnly\"]" => "If it should only draw the shadow and not the sprite. (True/False)<br>Default:False",
                "filterSettings[\"blur\"]" => "How blurry the drop shadow should be.<br>Default:2",
                "filterSettings[\"quality\"]" => "The quality of the blur.<br>Default:3",
                "filterSettings[\"kernels\"]" => "The kernels of the blur<br>Default:null",
                "filterSettings[\"pixelSize\"]" => "the pixelSize of the blur<br>Default:1",
                "filterSettings[\"resolution\"]" => "The resolution of the blur<br>Default:Resolution of the Canvas",
                );
$return = "Filter";
$example = "new_drop_shadow_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_emboss///
$function = "new_emboss_filter(filterSettings : dictionary) -> Filter";
$description = "Embossing is a computer graphics technique. Each pixel of the GameObject's sprite is exchanged with a shadow or highlight.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"strength\"]" => "The strength of the filter.<br>Default: 5",
                );
    
$return = "Filter";
$example = "new_emboss_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_glitch_filter///
$function = "new_glitch_filter(filterSettings : dictionary) -> Filter";
$description = "Embossing is a computer graphics technique. Each pixel of the GameObject's sprite is exchanged with a shadow or highlight.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"slices\"]" => "The maximum number of slices.<br>Default: 5",
                "filterSettings[\"offset\"]" => "The maximum offset amount of slices.<br>Default: 100",
                "filterSettings[\"direction\"]" => "The angle in degree of the offset of slices.<br>Default: 0",
                "filterSettings[\"fillMode\"]" => "The fill mode of the space after the offset. Acceptable values: 1,2,3,4,5<br>Default: 0",
                "filterSettings[\"seed\"]" => "A seed value for randomizing glitch effect.<br>Default: 0",
                "filterSettings[\"average\"]" => "true will divide the bands roughly based on equal amounts where as setting to false will vary the band sizes dramatically (more random looking).<br>Default: False",
                "filterSettings[\"minSize\"]" => "Minimum size of individual slice. Segment of total sampleSize<br>Default: 8",
                "filterSettings[\"sampleSize\"]" => "The resolution of the displacement map texture.<br>Default: 512",
                "filterSettings[\"red\"]" => "Red offset<br>Default: [0,0]",
                "filterSettings[\"green\"]" => "Green offset<br>Default: [0,0]",
                "filterSettings[\"blue\"]" => "Blue offset<br>Default: [0,0]",
                );
$return = "Filter";
$example = "new_glitch_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_glow//
$function = "new_glow_filter(filterSettings : dictionary) -> Filter";
$description = "This filter allows you to create a glowing effect around a certain object outlining it's sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"distance\"]" => "How far out it goes. This cannot be changed after filter creation.<br>Default:10",
                "filterSettings[\"outerStrength\"]" => "The strength of the glow at the farthest point.<br>Default:4",
                "filterSettings[\"innerStrength\"]" => "The strength of the glow at the closest point.<br>Default:0",
                "filterSettings[\"color\"]" => "The HEX color code of the glow.<br>Default:0xffffff",
                "filterSettings[\"quality\"]" => "The HEX color code of the glow.<br>Default:0.1",
                "filterSettings[\"knockout\"]" => "Hide the texture, and only show glow.<br>Default:False",
              );
$return = "Filter";
$example = "new_glow_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);



//new_godray///
$function = "new_godray_filter(filterSettings : dictionary) -> Filter";
$description = "Generates godrays on the GameObject's sprite. They can be animated.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"angle\"]" => "The angle at which the godrays appear.<br>Default:30",
                "filterSettings[\"gain\"]" => "Changes the godray's sensitivity.<br>Default:0.5",
                "filterSettings[\"lacunarity\"]" => "The intensity of the gaps in the godrays.<br>Default:2.5",
                "filterSettings[\"parallel\"]" => "If all the godrays should be parallel.<br>Default:True",
                "filterSettings[\"time\"]" => "The time the filter is at. Increase it over time to animate the godrays.<br>Default:0",
                "filterSettings[\"center\"]" => "Where the rays originate. Parallel must be set to false.<br>Default:[0,0]"
                );
$return = "Filter";
$example = "new_godray_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_kawase_blur///
$function = "new_kawase_blur_filter(filterSettings : dictionary) -> Filter";
$description = "Blurs the GameObject's sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"blur\"]" => "The intensity of the blur.<br>Default:4",
                "filterSettings[\"quality\"]" => "The blur's quality.<br>Default:3",
                "filterSettings[\"clamp\"]" => "Clamps the edges of the GameObject's sprite (True/False)<br>Default:False",
                );
    
$return = "Filter";
$example = "new_kawase_blur_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_motion_blur///
$function = "new_motion_blur_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a motion blur filter to the object.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"velocity\"]" => "The strength of the blur x and y<br>Default:[0,0]",
                "filterSettings[\"kernelSize\"]" => "The kernelSize of the blur filter. Must be odd number >= 5<br>Default:5",
                "filterSettings[\"offset\"]" => "The offset of the blur filter.<br>Default:0"
                );
    
$return = "Filter";
$example = "new_motion_blur_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_multicolor_replace_filter///
$function = "new_multicolor_replace_filter(filterSettings : dictionary) -> Filter";
$description = "Multicolor replace";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"replacements\"]" => "<br>Default:[[ [1,0,0], [0,0,1] ],[ [0,1,0], [1,1,1] ]]",
                "filterSettings[\"epsilon\"]" => "<br>Default:0.05",
                "filterSettings[\"maxColors\"]" => "<br>Default:2"
                );
    
$return = "Filter";
$example = "new_multicolor_replace_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_old_film_filter///
$function = "new_old_film_filter(filterSettings : dictionary) -> Filter";
$description = "Adds old film effect to an object.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"sepia\"]" => "The amount of saturation of sepia effect, a value of 1 is more saturation and closer to 0 is less, and a value of 0 produces no sepia effect<br>Default:0.3",
                "filterSettings[\"noise\"]" => "Opacity/intensity of the noise effect between 0 and 1<br>Default:0.3",
                "filterSettings[\"noiseSize\"]" => "The size of the noise particles<br>Default:1.0",
                "filterSettings[\"scratch\"]" => "How often scratches appear<br>Default:0.5",
                "filterSettings[\"scratchDensity\"]" => "The density of the number of scratches<br>Default:0.3",
                "filterSettings[\"scratchWidth\"]" => "The width of the scratches<br>Default:1.0",
                "filterSettings[\"vignetting\"]" => "The radius of the vignette effect, smaller values produces a smaller vignette<br>Default:0.3",
                "filterSettings[\"vignettingAlpha\"]" => "Amount of opacity of vignette<br>Default:1.0",
                "filterSettings[\"vignettingBlur\"]" => "Blur intensity of the vignette<br>Default:0.3",
              );
    
$return = "Filter";
$example = "new_old_film_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_outline_filter///
$function = "new_outline_filter(filterSettings : dictionary) -> Filter";
$description = "Outlines an object.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"thickness\"]" => "The tickness of the outline. <br>Default:1",
                "filterSettings[\"color\"]" => "The color of the outline.<br>Default:0x000000",
                "filterSettings[\"quality\"]" => "The quality of the outline from 0 to 1, using a higher quality setting will result in slower performance and more accuracy.<br>Default:0.1",
                );
    
$return = "Filter";
$example = "new_outline_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_pixelate///
$function = "new_pixelate_filter(filterSettings : dictionary) -> Filter";
$description = "Allows you to pixelate the GameObject's sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"size\"]" => "A two element array that holds the width/height of each pixel.<br>Default:[10,10]",
                );
$return = "Filter";
$example = "new_pixelate_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_radial_blur_filter///
$function = "new_radial_blur_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a radial blur to the object.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.<br>Default:",
                "filterSettings[\"angle\"]" => "Sets the angle of the motion for blur effect.<br>Default:0",
                "filterSettings[\"center\"]" => "The center of the radial.<br>Default:[0,0]",
                "filterSettings[\"kernelSize\"]" => "The kernelSize of the blur filter. But be odd number >= 3<br>Default:5",
                "filterSettings[\"radius\"]" => "The maximum size of the blur radius, -1 is infinite<br>Default:-1",
                );
    
$return = "Filter";
$example = "new_radial_blur_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_reflection///
$function = "new_reflection_filter(filterSettings : dictionary) -> Filter";
$description = "Allows you to create reflections of sprites. Can be animated.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"mirror\"]" => "If the reflection should be mirrored.<br>Default:true",
                "filterSettings[\"boundary\"]" => "The vertical position where the reflection should occur.<br>Default:0.5",
                "filterSettings[\"amplitude\"]" => "The strength of the starting/ending positions of the waves.<br>Default:[0,20]",
                "filterSettings[\"waveLength\"]" => "The length of the starting/ending positions of the waves.<br>Default:[30,100]",
                "filterSettings[\"alpha\"]" => "The alpha values of the starting/ending positions of the waves.<br>Default:[1,1]",
                "filterSettings[\"time\"]" => "The time the filter is at. Increase over time to animate.<br>Default:0",
                );
$return = "Filter";
$example = "new_reflection_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);

//new_rgb_split_filter///
$function = "new_rgb_split_filter(filterSettings : dictionary) -> Filter";
$description = "Splits the RGB from an object, adding an offset to each RGB Value";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"red\"]" => "Red offset<br>Default: [-10,0]",
                "filterSettings[\"green\"]" => "Green offset<br>Default: [0, 10]",
                "filterSettings[\"blue\"]" => "Blue offset<br>Default: [0, 0]",
                );
$return = "Filter";
$example = "new_rgb_split_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_shockwave///
$function = "new_shockwave_filter(filterInfo : dictionary) -> Filter";
$description = "Create an animated shockwave effect that goes out from one point.";
$parameters = array(
                "filterInfo" => "A dictionary that holds the filter's data.",
                "filterInfo[\"center\"]" => "Where to center the shockwave. Center is relative to the Sprite's top left corner.<br>Default:[0.5,0.5]",
                "filterInfo[\"amplitude\"]" => "The strength of the shockwave<br>Default:.30",
                "filterInfo[\"wavelength\"]" => "The wave length of the shockwave.<br>Default:160",
                "filterInfo[\"speed\"]" => "The speed at which the shockwave moves out if animated using time.<br>Default:500",
                "filterInfo[\"brightness\"]" => "The brightness of the shockwave.<br>Default:1.0",
                "filterInfo[\"radius\"]" => "The radius of the shockwave when starting.<br>Default:-1",
                "filterInfo[\"time\"]" => "The time at which the filter is at. Increase overtime to animate.<br>Default:0",
                );
$return = "Filter";
$example = "new_shockwave_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_simple_lightmap//
$function = "new_simple_lightmap_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a lightmap to the object using a sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.<br>Default:",
                "filterSettings[\"texture\"]" => "The sprite to use as a lightmap<br>Default: new_sprite('nosprite.png')",
                "filterSettings[\"color\"]" => "An RGBA array of the ambient color<br>Default: [1, 0, 0, 1]",
                "filterSettings[\"alpha\"]" => "Default alpha set independent of color<br>Default: 1",
                );
$return = "Filter";
$example = "new_simple_lightmap_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_tilt_shift///
$function = "new_tilt_shift_filter(filterSettings : dictionary) -> Filter";
$description = "Add a tilt shift filter effect";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"blur\"]" => "How much to blur the effect.<br>Default:100",
                "filterSettings[\"gradientBlur\"]" => "The gradient of the blur's effects.<br>Default:600",
                );
$return = "Filter";
$example = "new_tilt_shift_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_twist_filter///
$function = "new_twist_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a twist filter to the object.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"radius\"]" => "How wide to twist.<br>Default:200",
                "filterSettings[\"angle\"]" => "The angle of the twist<br>Default:4",
                "filterSettings[\"padding\"]" => "Padding for filter area.<br>Default:20",
                );
$return = "Filter";
$example = "new_twist_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);


//new_zoom_blur///
$function = "new_zoom_blur_filter(filterSettings : dictionary) -> Filter";
$description = "Adds a zoom blur filter to the sprite.";
$parameters = array(
                "filterSettings" => "A dictionary that holds the filter's configuration.",
                "filterSettings[\"strength\"]" => "The strength of the zoom.<br>Default:0.1",
                "filterSettings[\"center\"]" => "Where to center to zoom. [0,0] is the top left corner of the sprite.<br>Default:[0.5,0.5]",
                "filterSettings[\"innerRadius\"]" => "The radius of the inner unzoomed area.<br>Default:0",
                "filterSettings[\"radius\"]" => "The outer radius of the filter. -1 for infinite.<br>Default:-1",
                );
    
$return = "Filter";
$example = "new_zoom_blur_filter";

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, $example);










