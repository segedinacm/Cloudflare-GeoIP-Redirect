=== Cloudflare GeoIP Redirect ===
Contributors: webinvaders
Donate link: https://webinvade.rs/donate/
Tags: redirect, geoip, geolocation, cloudflare,
Requires at least: 4.6
Tested up to: 5.3.2
Stable tag: 1.0
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Easily setup redirect for visitors/users from selected countries to specific URL utilizing Cloudflare IP Geolocation.

== Description ==

Cloudflare GeoIP Redirect plugin enables you to setup redirect for users from selected countries to specific URL.

Geolocation is done using Cloudflare IP Geolocation data.

Redirection is done using the php header() function and you can choose Temporary Redirect (307) or Moved Permanently (301).

In order to use this plugin you need to setup Cloudflare for your website and enable Cloudflare IP Geolocation service. More info in FAQ.


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wi-cloudflare-geoip-redirect` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the CF Redirect>Options screen to configure the plugin



== Frequently Asked Questions ==

= Do I need a Cloudflare account to use the plugin? =

No, but you do need to have Cloudflare service active on your domain in order for plugin to get Geolocation user data and enabled *Cloudflare IP Geolocation*.

= How to enable Cloudflare IP Geolocation =

For info on how to configure Cloudflare IP Geolocation follow the link: https://support.cloudflare.com/hc/en-us/articles/200168236-Configuring-Cloudflare-IP-Geolocation



== Screenshots ==

1. Basic setup for one country redirect
2. Setup for redirecting users from multiple countries to same URL

== Changelog ==

= 1.0 =
* First release

== Upgrade Notice ==

= 1.0 =
Enjoy using Cloudflare GeoIP Redirect