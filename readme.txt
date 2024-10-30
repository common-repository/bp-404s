=== BP 404s ===
Contributors: zhuyi
Author URI: https://tomas.zhu.bz/
Donate link: https://tomas.zhu.bz/
Tags:buddypress, 404, BP_ENABLE_ROOT_PROFILES, template, buddyPress profiles, root, wp-config,error, profile
Requires at least: 2.0
Tested up to: 4.7.2
Stable tag: 1.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Fixed Buddypress 404 error when put buddyPress profiles in the root

== Description ==
Buddypress is great platform which have a lot of amazing features, for example, allow users put buddyPress profiles in the root, enabled this feature will  change user’s profile URL from https://mydomain.com/members/tomas/ to https://mydomain.com/tomas/, it is a great feature which make our site more user-friendly. The problem is when we enabled this feature, although in front end buddypress will manually redirect our users profile to https://mydomain.com/usersname/, but in back end we will find there are a tons of 404 errors, I traced these 404 errors and I found when users open a user's profile or activity pagea and so on, buddypress will general a lot of 404 errors in back end, the number of 404 error is decided by how many users links in the activity page. I did a research and I found other guys have this problem but did not have a solution yet -- https://buddypress.org/support/topic/bp-enable-root-profiles-produces-404-errors-2/, I am happy to share my solution in here and it is very simple(of course used my hard work days), hope this will help other webmasters who enabled root profile feature, that is a great feature, user-first, always. :)  

<h4>How To Use:</h4>
This plugin is very easy to use, just download, activated it, no any setting work needed, all 404 errors will gone away. :)

If you do not know how to put buddyPress profiles in the root, it is very easy: 
In your wp-config.php, add this line:
define ( 'BP_ENABLE_ROOT_PROFILES', true );
 
== Installation ==

1:Upload Buddypress 404s your site
2:Activate it 
3:No any setting needed in back end.

1, 2, 3: You're done!

== Frequently Asked Questions ==
Any question or feature request is welcome at https://tomas.zhu.bz/buddypress-404s/

== Screenshots ==


== Changelog ==
= Version 1.0.0 =
First version

== Download ==
https://tomas.zhu.bz/buddypress-404s/
