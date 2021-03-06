# [Aion API](http://www.blakeharley.com/project/aionapi)

This project has been forked by Yumi Nanako / Yumi (Mythical) of Israphel

Original Description:

I originally wrote this API for my signuture generator, and I was
planning on using it heavily and expanding on it down the road.
However, I quit Aion and have little interest it continuing to work
on an API for a game I no longer play.

Instead, I figure I should release it to the public. I'm sure
someone can make use of this and possibly expand on it later
(include clan stats, etc).

Since I won't be updating this API anymore, as soon as NCSoft
changes the wrong thing on their website, this API may no longer
work. But as for now, it should work just fine.

## Usage

Here is an example (albeit simple):

    <?php

    require("aionAPI.php");
    $user = new aionProfile( "Yumi", "Israphel" ); // or aionProfile( "Yumi", "Israphel", "na" )
    $data = $user->userData();

    echo $data['name'] . " has " . $data['total_kills'] . " kills and " . $data['abyss_points'] . " Abyss Points.";

    ?>

That example file would output:

Nig has 560 kills and 32382 Abyss Points.

Here's another example file that lists every piece of information
the API can pull from the Aion website:

    <?php

    require("aionAPI.php");

    /* aionProfile( charname, servername, na - default / eu ) */
    $user = new aionProfile( "Yumi", "Israphel" ); 
    $data = $user->userData();

    echo $data['name'] . "<br />";            // Player's name
    echo $data['level'] . "<br />";           // Player's level
    echo $data['title'] . "<br />";           // Player's title
    echo $data['class'] . "<br />";           // Player's class
    echo $data['race'] . "<br />";            // Elyos or Asmodian 
    echo $data['server'] . "<br />";          // Player's server
    echo $data['image'] . "<br />";           // Player's avatar
    echo $data['abyss_rank'] . "<br />";      // Player's current abyss rank
    echo $data['abyss_points'] . "<br />";    // Player's current abyss points
    echo $data['rank'] . "<br />";            // ???
    echo $data['total_rank'] . "<br />";      // Player's highest abyss rank
    echo $data['total_kills'] . "<br />";     // Player's kill count
    echo $data['clan'] . "<br />";            // Player's clan
    echo $data['clan_url'] . "<br />";        // Link to player's clan
    echo $data['hp'] . "<br />";              // Player's HP
    echo $data['mp'] . "<br />";              // Player's MP
    ?>


© 2010 Blake Harley and Yumi Nanako — all rights reserved. 
