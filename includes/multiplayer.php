<?php

namespace THEME;

//init_multiplayer
$function = "init_multiplayer() -> None";
$description = "Must be called in order to have a multiplayer game. Note that this does NOT connect you to a server, only initializes the other multiplayer functionality.";
$parameters = array(
    "None" => "No parameters."
);

$return = "No return value.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "init_multiplayer");

//create_server
$function = "create_server(size: int) -> None";
$description = "Creates a multiplayer server. If no one has joined the server within 5 seconds it will be deleted.";
$parameters = array(
    "size" => "The maximum number of players that can be connected to the server at any given time. Must be between 2 and 20 inclusive."
);

$return = "No return value. Because of delay the result of the function can be found with <code>get_server_event()</code>, where the event type will be <code>\"type\": \"server_created\"</code>.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "create_server");


//join_server
$function = "join_server(server_id: str) -> None";
$description = "Attempts to connect to the server with the specified server id. If the user is already connected to a server they will be disconnected as you can only be connected to one server at a time.";
$parameters = array(
    "server_id" => "The ID of the server the user should attempt to join."
);

$return = "No return value. Because of delay the result of the function can be found with <code>get_server_event()</code>, where the event type will be <code>\"type\": \"self_joined\"</code>.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "join_server");

//inspect_server
$function = "inspect_server(server_id: str) -> None";
$description = "Gets information about a specific server without joining it";
$parameters = array(
    "server_id" => "The ID of the server to get information about."
);

$return = "No return value. Because of delay the result of the function can be found with <code>get_server_event()</code>, where the event type will be <code>\"type\": \"server_info\"</code>.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "inspect_server");


//get_server_event
$function = "get_server_event() -> dict";
$description = "Checks for asynchronous (delayed) responses from create_server(), join_server(), and inspect_server() on the current frame.";
$parameters = array(
    "None" => "No parameters."
);

$return = "A dictionary with the type of event that was received on the frame, or None if there is no event. If the event type is not None, the dict will also contain the boolean field <code>\"status\"</code>, detailing whether the request was successful or not, as well as the field <code>\"message\"</code>, containing a string with the event message, such as a server id from a <code>\"server_created\"</code> event.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_server_event");


//send_message
$function = "send_message(data: str) -> None";
$description = "Sends data to all other users connected to the same server.";
$parameters = array(
    "data" => "The string to send. Must be of length less than or equal to 256 characters."
);

$return = "No return value.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "send_message");


//get_messages
$function = "get_messages() -> list";
$description = "Get all the messages that have been received from the current server since get_messages() was last called.";
$parameters = array(
    "None" => "No parameters."
);

$return = "A list of string messages that have been received, in order from oldest to most recently received. Returns an empty list if no messages have been received.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_messages");


//get_player_count()
$function = "get_player_count() -> int";
$description = "Checks how many people are in the currently connected server.";
$parameters = array(
    "None" => "No parameters."
);

$return = "The number of people connected to the current server, 0 if there is no connection.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_player_count");


//leave_server
$function = "leave_server() -> None";
$description = "Disconnects the current user from any servers they are in.";
$parameters = array(
    "None" => "No parameters."
);

$return = "No return value.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "leave_server");

//get_servers
$function = "get_servers() -> list";
$description = "Gets a list of existing servers for the current game";
$parameters = array(
    "None" => "No parameters."
);

$return = "A list with all active server IDs for the same game, or an empty list if there are none.";
$example = <<<EOT
# no multiplayer examples yet :)
EOT;

Docs::renderSyntaxTemplate($function, $description, $parameters, $return, "get_servers");



//summary
$title = "Multiplayer and Servers";
$summary = <<<EOT
Multiplayer games are games you can play together with other people. Sometimes this is done by having multiple people 
use the same keyboard, but in can also be done over the internet, so people can use their own computers and play games 
together even when they are in different places. Pixelpad allows you to create such games by using <b>servers</b>. <br><br>

A server is a computer designed to process and respond to requests from other computers, often known as <b>clients</b>. Servers
are used for a huge variety of purposes, including this website, but they are also used for making multiplayer games. 
Pixelpad has functions to create and join servers, to inspect and see all servers for a game, and to send and receive
messages in the servers.
EOT;

Docs::renderSummaryTemplate($title, $summary);
