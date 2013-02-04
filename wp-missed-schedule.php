<?php
/*
Plugin Name: √ WP Missed Schedule
Plugin URI: http://slangji.wordpress.com/wp-missed-schedule/
Description: &#9733;&#9733;&#9733; Fix <code>Missed Schedule</code> Future Posts Cron Job: find missed schedule posts that match this problem every 1 minute and it republish them correctly fixed 5 items per session. Try also WordPress 3.5 Regression Ticket <a href="http://core.trac.wordpress.org/ticket/22944" title="WordPress 3.5 Scheduled Posts Regression Ticket #22944">#22944</a>. Work under <a href="http://www.gnu.org/licenses/gpl-2.0.html" title"GPLv2 or later License compatible">GPLv2</a> or later License. <a href="http://www.gnu.org/prep/standards/standards.html" title"GNU style indentation coding standard compatible">GNU style</a> indentation coding standard compatible. | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestions">Contact</a> | <a href="http://profiles.wordpress.org/slangji" title="sLaNGjI's Profile @ WordPress.org">My Profile</a> | <a href="http://webscripts.softpedia.com/author/sLa-1869786722.html" title="sLa Developer Page @ SoftPedia.com">My SoftPedia</a> | <a href="http://slangji.wordpress.com/themes/" title="sLaNGjI's Custom Themes">My Themes</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a> | <a href="http://wordpress.org/extend/plugins/wp-wp-memory-db-indicator/" title="Memory Load Consumption db size Usage Indicator">Memory and db Indicator?</a>
Version: 2013.0130.2222
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 2.6
Tested up to: 3.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * DEVELOPMENT Release: Version 2013 Build 0131-BUGFIX Revision 3333-DEVELOPMENTAL - Developmental Code in Becoming.
 *
 * [WP Missed Schedule](http://wordpress.org/extend/plugins/wp-missed-schedule/) WordPress PlugIn
 *
 * 64Bit Security Tag Key: bkytCi8L522P8RbgYIlkQbL6Yz4JDvIWlTlXN5q776Yvq5t7gxkCvB643C7osdFV6
 *
 * √ CONTACT
 *
 * [Contact](http://slangji.wordpress.com/contact/)
 *
 * √ DONATIONS
 *
 * [Donate](http://slangji.wordpress.com/donate/)
 *
 * √ PROJECTS
 *
 * [My Plugins](http://slangji.wordpress.com/plugins/)
 * [My Themes](http://slangji.wordpress.com/themes/)
 *
 * √ DEVELOPER
 *
 * [phpBB.com](http://phpbb.com/)
 * [SoftPedia.com](http://webscripts.softpedia.com/author/sLa-1869786722.html)
 * [WordPress.org](http://profiles.wordpress.org/slangji)
 *
 * √ REPOSITORIES
 *
 * [GitHub.com](https://github.com/slangji)
 *
 * √ WEBSITE
 *
 * [WordPress.com](http://slangji.wordpress.com/)
 *
 * √ PROFILES
 *
 * [bbPress.org](http://bbpress.org/forums/profile/slangji/)
 * [BuddyPress.org](http://buddypress.org/community/members/slangji/profile/public/)
 * [Gravatar.com](http://en.gravatar.com/slangji)
 *
 * Author URL [sLa](http://wordpress.org/extend/plugins/profile/sla) moved to [sLaNGjI](http://wordpress.org/extend/plugins/profile/slangji) update bookmark!
 *
 * √ POLLS
 *
 * [PollDaddy.com](http://slangji.polldaddy.com/)
 *
 * √ SUPPORT
 *
 * [WordPress.org](http://wordpress.org/support/profile/slangji)
 *
 * √ FOLLOW
 *
 * [LinkedIn](http://www.linkedin.com/in/slangjis)
 * [Twitter](https://twitter.com/sLanGjIs)
 * [FaceBook](https://www.facebook.com/sLaNGjI)
 * [Google+](https://plus.google.com/104369105810975562211)
 * [FeedBurner](http://feeds.feedburner.com/slangji)
 * [FriendFeed](http://friendfeed.com/slangjis)
 *
 * √ LICENSE
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * √ DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * √ GUIDELINES
 *
 * This software meet detailed [Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 *
 * √ COPYRIGHT
 *
 * Part of Copyright © 2008-2013 belongs to [sLaNGjI's](http://en.gravatar.com/slangjis) (slangji[at]gmail[dot]com) and a portion to their respective owners.
 */
/**
 * @package WP Missed Schedule
 * @subpackage WordPress PlugIn
 * @since 2.6.0
 * @version 2013.0130.2222
 * @status STABLE Release
 * @author sLa
 * @license GPLv2 or later
 * @indentation GNU style coding standard
 * @security bkytCi8L522P8RbgYIlkQbL6Yz4JDvIWlTlXN5q776Yvq5t7gxkCvB643C7osdFV6 64Bit Tag Key
 *
 * Fix Missed Scheduled Future Posts Cron Job. Try also WordPress 3.5 Regression Ticket [#22944](http://core.trac.wordpress.org/ticket/22944).
 *
 * Work under GPLv2 or later License. GNU style indentation coding standard compatible.
 */
	if (!function_exists('add_action'))
		{
			header('Status 403 Forbidden');
			header('HTTP/1.0 403 Forbidden');
			header('HTTP/1.1 403 Forbidden');
			exit();
		}
?>
<?php
	function wpms_log()
		{
			echo "\n<!--Plugin WP Missed Schedule 2013.0130.2222 Active - 64Bit Security Tag Key: bkytCi8L522P8RbgYIlkQbL6Yz4JDvIWlTlXN5q776Yvq5t7gxkCvB643C7osdFV6-->\n";
		}
	add_action('wp_head', 'wpms_log');
	add_action('wp_footer', 'wpms_log');
?>
<?php
	define('WPMS_DELAY', 1);
	define('WPMS_OPTION', 'wp_missed_schedule');
	function wpms_replace()
		{
			delete_option(WPMS_OPTION);
		}
	register_deactivation_hook(__FILE__, 'wpms_replace');
	function wpms_init()
		{
			remove_action('publish_future_post', 'check_and_publish_future_post');
			$last = get_option(WPMS_OPTION, false);
			if (($last !== false) && ($last > (time() - (WPMS_DELAY * 60))))
					return;
			update_option(WPMS_OPTION, time());
			global $wpdb;
			$scheduledIDs = $wpdb->get_col("SELECT`ID`FROM`{$wpdb->posts}`" . "WHERE(" . "((`post_date`>0)&&(`post_date`<=CURRENT_TIMESTAMP()))OR" . "((`post_date_gmt`>0)&&(`post_date_gmt`<=UTC_TIMESTAMP()))" . ")AND`post_status`='future'LIMIT 0,5");
			if (!count($scheduledIDs))
					return;
			foreach ($scheduledIDs as $scheduledID)
				{
					if (!$scheduledID)
							continue;
					wp_publish_post($scheduledID);
				}
		}
	add_action('init', 'wpms_init', 0);
?>