=== Dark Mode ===
Contributors: danieltj, munyagu, travel_girl, melchoyce, afercia, hedgefield, megane9988, presskopp, willrad
Tags: dark, style, admin, dashboard, profile
Requires at least: 4.0
Tested up to: 4.9
Stable tag: 1.8
Requires PHP: 5.4
License: GNU GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Lets your users make the WordPress admin dashboard darker.

== Description ==

This is a beta plugin that might one day be part of the WordPress core. Please don't use this on production websites unless you're happy with the stability as some things may still be experimental.

Using technology at night time can have a negative effect on your eyesight. Dark Mode will darken the colors of your admin dashboard making it easier for you to work at night.

For information on the progress of this plugin, please refer to the [Trac ticket](https://core.trac.wordpress.org/ticket/41928) or you can get involved on the [GitHub repository](https://github.com/danieltj27/Dark-Mode).

= Developers =

As some plugins make use of custom stylesheets, you can use the `doing_dark_mode` action hook to include a custom stylesheet that supports Dark Mode for your own plugin interfaces when it's enabled. Alternatively you can use the `dark_mode_css` filter hook to change the Dark Mode stylesheet for your own version if you'd prefer.

= Translators =

Whilst Dark Mode has been translated into a few different languages already, we need your help! If you have just five minutes to spare, please consider [translating Dark Mode](https://translate.wordpress.org/projects/wp-plugins/dark-mode) into your language today.

== Installation ==

1. Upload the plugin package to the plugins directory.
2. Login to the dashboard and activate the plugin.
3. Go to your profile and enable Dark Mode.

== Frequently Asked Questions ==

= What does this plugin do? =

By default, WordPress has a very bright color scheme which means working at night time can be difficult. Dark Mode allows you to change the overall design to a much darker and subtle design making it more visually pleasing when working late.

= When does Dark Mode start working? =

You can set Dark Mode to come on automatically between two set times, or have it enabled all the time. Go to your profile page and edit your settings accordingly.

= Can I contribute to this plugin? =

Yes, you can follow the Trac ticket for updates and get involved on GitHub with suggestions, feedback and code contributions.

== Screenshots ==

1. The dashboard with Dark Mode turned off.
2. The dashboard with Dark Mode turned on.
3. Dark Mode with an admin color scheme in use.
4. The Dark Mode settings on a user's profile page.

== Changelog ==

= 1.8 =

* Improvements made to coding standards and documentation.
* Added placeholder text to the start and end input boxes for accessibility.
* Changed the default plugin language from en_GB to en_US.
* Removed the links in the toolbar for the profile & feedback pages.
* Added profile and feedback link to the plugin table.
* Style improvements made to the progress spinner element.

= 1.7 =

* Fixed a XSS vulnerability with the automatic start & end times. [Credit](https://github.com/d4wner/Vulnerabilities-Report/blob/master/dark-mode.md)
* Fixed a bug with the start and end inputs sharing a label element.

= 1.6 =

* Fixed a problem with automatic Dark Mode not activating correctly.
* Fixed issue with PHP 5.4 installs not supporting empty if statements.
* Added the requires PHP header and set it to 5.4 for compatibility.
* Improved the CSS for many widget related styling bugs.
* Fixed issue with UI notices having an incorrect background color.
* Added styling to the media attachment modal popup.
* Fixed CSS conflicts causing the customiser to not be styled.
* Fixed a variety of smaller UI elements that had incorrect styles.

= 1.5 =

* Added support for Code Mirror editor styles.
* Fixed a bug where automatic Dark Mode was set incorrectly.
* Improvements to how some core functions worked.
* Improvements to translation strings.

= 1.4 =

* Updated the stylesheet to now include new Customiser styles.
* Further updates to the readme.txt file to address typos and updates.
* Moved the toolbar links to the right and added feedback to a drop down.
* Fixed an issue with Dark Mode being automatically turned on or off.

= 1.3 =

* Added link to GitHub repository for people to provide feedback.
* Added the ability to schedule Dark Mode to come on between certain times.
* Improved the implementation of certain core functions for better control.
* Updated the styles to include more areas that were previously unstyled.

= 1.2 =

* Added CSS source maps to files making it easier to develop the stylesheet further.
* Updated a translation string for better clarity.
* Updated the documentation comments for a few functions.
* Fixed more issues with elements that are not styled. Thanks to all those who spotted them!
* Minor optimisations made to the stylesheet to help reduce the file size.

= 1.1.2 =

* Further updates to the color palette used in the new design.
* More elements within the dashboard have been styled.

= 1.1.1 =

* Updated the readme.txt file information.
* Minor improvements to code documentation blocks.
* Restyled the new Try Gutenberg banner on the dashboard index.
* Updated the color palette and swapped blue for purple!

= 1.1 =

* Redesigned (most of) the admin dashboard into a darker design.
* Added a filter hook to change the URL of the Dark Mode stylesheet.
* Minor improvements to the code.

= 1.0 =

* Initial version.
