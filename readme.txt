=== Dark Mode ===
Contributors: danieltj, munyagu, travel_girl, melchoyce, afercia, hedgefield
Tags: accessibility, admin, dashboard, profile, style
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.1.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Let's your users make the WordPress admin dashboard darker.

== Description ==

= About the Plugin =

Feature plugin with the hopes that it'll make it's way into Core one day! We highly recommend you don't use this on production websites.

Using technology at night time can have a negative effect on your eyesight. Dark Mode will darken the colours of your admin dashboard making it easier for you to work at night time.

For information on the progress of this plugin, [please refer to the Trac ticket](https://core.trac.wordpress.org/ticket/41928) or you can get involved on the [GitHub repository](https://github.com/danieltj27/Dark-Mode).

= Plugin Developers =

As some plugins make use of custom stylesheets, you can use the `doing_dark_mode` action hook to include a custom stylesheet that supports Dark Mode for your plugins interface. Alternatively you can use the `dark_mode_css` filter hook to change the Dark Mode stylesheet for your own. 

== Installation ==

1. Unzip and upload the plugin package into the plugins directory.
2. Login to the dashboard and activate the plugin.
3. Go to your profile and enable the Dark Mode setting.

== Frequently Asked Questions ==

= Why is there a plugin for this? =

The goal is to have this plugin merged into the WordPress Core. For more information, please see the GitHub repository or Trac ticket.

= What does this plugin do? =

It adds an option for users to enable a 'dark mode' which will turn the admin dashboard darker so it's nicer to use at night time.

= Can I contribute to this plugin? =

Yes! You can follow the Trac ticket for updates and get involved on GitHub with suggestions, feedback and code contributions!

== Changelog ==

= 1.1.2 =

* Further updates to the colour palette used in the new design.
* More elements within the dashboard have been styled.

= 1.1.1 =

* Updated the readme.txt file information.
* Minor improvements to code documentation blocks.
* Restyled the new Try Gutenberg banner on the dashboard index.
* Updated the colour palette and swapped blue for purple!

= 1.1 =

* Redesigned (most of) the admin dashboard into a darker design.
* Added a filter hook to change the URL of the Dark Mode stylesheet.
* Minor improvements to the code.

= 1.0 =

* Initial version.
