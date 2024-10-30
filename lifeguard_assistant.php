<?php 
/*
Plugin Name: LifeGuard Assistant
Plugin URI: http://wplifeguard.com/lifeguard-plugin/
Description: The LifeGuard+ Assistant plugin puts WordPress tutorial videos right into the WordPress Dashboard.
Author: Bold Perspective
Version: 1.0
Author URI: http://boldperspective.com/
License: GPL2
	Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('admin_menu', 'wplgap_add_pages');
function wplgap_add_pages() {
	add_options_page(__('WPA Help Settings','menu-test'), __('WPA Help Settings','menu-test'), 'manage_options', 'wplgap-settings-page', 'wplgap_settings_page');
	add_menu_page(__('Help','menu-test'), __('Help','menu-test'), 'read', 'lifeguard-assistant-plugin', 'wplgap_main_page' );
	
	add_action( 'admin_init', 'wplgap_register_mysettings' );
}

function wplgap_register_mysettings() {
	//register our settings
	register_setting( 'wplgap-settings-group', 'wplgap_aff_id' );
}

function wplgap_settings_page() {
?>
<div class="wrap">
	<h2>LifeGuard Assistant Settings</h2>
	
	<form method="post" action="options.php">
	<?php settings_fields( 'wplgap-settings-group' ); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="wplgap_aff_id">wpLifeGuard Affiliate ID</label></th>
				<td><input type="text" name="wplgap_aff_id" value="<?php echo get_option('wplgap_aff_id'); ?>" /> Example: <u>?ref=administrator-63</u></td>
			</tr>
		</table>
		<p><a href="http://wplifeguard.com/faq/what-is-my-affiliate-link/">What is my Affiliate ID?</a></p>
		<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
	</form>
	
	<div class="metabox-holder" style="width: 320px;">
		<div class="postbox">
			<h3 class="hndle">Follow wpLifeGuard Socially</h3>
			<div class="inside">
				<a href="https://twitter.com/wpLifeGuard" rel="nofollow" class="twitter-follow-button" data-show-count="false">Follow @wpLifeGuard</a>
				<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
				
				<div id="fb-root"></div>
				<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) {return;}js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#appId=151051664987939&xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="http://www.facebook.com/pages/WpLifeGuard/194636357276103" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
			
				<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
				<g:plus href="https://plus.google.com/102084107306680338668">

			</div><!--.inside-->
		</div><!--.postbox-->
	</div><!--.metabox-holder-->

</div>
<?php }



function wplgap_main_page() {
	echo "<h2>" . __( 'Help', 'menu-test' ) . "</h2>";
	$wplgap_aff = "affiliate-id";
	
	{ ?>
	<style type="text/css">
		#wplg { font-family: "Varela",Helvetica,Trebuchet MS,Verdana,"DejaVu Sans",sans-serif; }
		#wplg a:link,#wplg a:visited { color: #21759b; text-decoration: none; }
		#wplg a:hover { color: #d54e21; }
		.wplg-video { background: #f6f6f6; border: 1px solid #dadada; padding: 12px; margin: 0 12px 12px 0; float: left; }
		.wplg-clear { clear: both; }
		.wplg-green-button { box-shadow:inset 0 0 3px rgba(0,0,0,.1); font-size: 20px; line-height: 32px; height: 32px; width: 434px; margin: 0 12px 12px 0; text-align: center; display: block; border: 2px solid #9abf89; background: #7da742; color: #f1ffeb !important; text-shadow: 0 0 3px rgba(125,167,66,.75); }
		.wplg-green-button:hover { border: 2px solid #c0e1aa; background: #8ac636; }
		.wplg-green-button:active { border: 2px solid #88a65e; background: #5d822a; }
		
	</style>
	<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" type="text/css">
	
	<div id="wplg">
		<p>Need help with WordPress? Here is a collection of free WordPress video tutorials from <a href="http://wplifeguard.com/<?php echo get_option('wplgap_aff_id'); ?>">wpLifeGuard</a> to help you get going. <a href="http://wplifeguard.com/get-access/<?php echo get_option('wplgap_aff_id'); ?>">Get access to more videos.</a></p>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32852753?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32856785?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32857648?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32860297?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32872861?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32878118?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32881530?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32864178?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32863614?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32862744?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-video"><iframe src="http://player.vimeo.com/video/32857481?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		
		<div class="wplg-clear"></div>
		
		<a class="wplg-green-button" href="http://wplifeguard.com/get-access/<?php echo get_option('wplgap_aff_id'); ?>">Get Full Access Now</a>
	</div>
		
	<?php }


} ?>