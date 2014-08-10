gmod-basicloader
==================

A Loading Page For Garrysmod

## demo

**[see it in action here](http://server2.ozooma.net/gmod-basicloader/?steamid=76561198076326992&mapname=rp_city_1)**

## features

- Image slideshow with random pictures
- Random music with autoplay in background
- welcome message with steam-player name
- show on which map the player will join
- show current music title

**additional**
- rules.php for showing rules after server join for the `motd` (ULX has to be installed)


## how to use

* put 3 music files in `.ogg`-format in the music folder. They must be named `1.ogg`, `2.ogg` and `3.ogg`!
* edit config.php and fill in the values
 * you don't have a webserver with PHP support? look [here](http://www.000webhost.com/) or [here](http://www.square7.ch/)!
* set the url of the loading screen in your `server.cfg` like that `sv_loadingurl "http://example.com/gmod-loadingscreen/?steamid=%s&mapname=%m"`
* restart server.
* enjoy.

The server name and the content of the page can be easily edited with basic knowledge of HTML. in the next version there will be a easy config file so its easier to customize :bowtie:
