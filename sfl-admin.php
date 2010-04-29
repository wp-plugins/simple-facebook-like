<?php
$sfb_like_options = get_option('sfb_like_options');

if ( isset($_POST['submit']) ) {
	if ( function_exists('current_user_can') && !current_user_can('manage_options') )
		die(__('Cheatin&#8217; uh?'));

	$sfb_like_options['position'] = htmlspecialchars($_POST['position']);		
	$sfb_like_options['width'] = htmlspecialchars($_POST['width']);
	$sfb_like_options['height'] = htmlspecialchars($_POST['height']);
	$sfb_like_options['show_faces'] = htmlspecialchars($_POST['show_faces']);
	$sfb_like_options['colorscheme'] = htmlspecialchars($_POST['colorscheme']);
	$sfb_like_options['layout'] = htmlspecialchars($_POST['layout']);
	$sfb_like_options['font'] = htmlspecialchars($_POST['font']);
	$sfb_like_options['action'] = htmlspecialchars($_POST['action']);

	update_option('sfb_like_options', $sfb_like_options);
}
$selected = 'selected="1"';
?>
<?php if ( !empty($_POST ) ) : ?>
<div id="message" class="updated fade"><p><strong><?php _e('Options saved.') ?></strong></p></div>
<?php endif; ?>
<div class="wrap">
<?php screen_icon(); ?>
<h2><?php _e('Simple Facebook Like Configuration', 'simple-fb-like'); ?></h2>

<div class="metabox-holder" id="poststuff">
<div class="meta-box-sortables">
<script>
jQuery(document).ready(function($) { $('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});});
</script>
<div class="postbox">
    <div title="<?php _e("Click to open/close", "simple-fb-like"); ?>" class="handlediv">
      <br>
    </div>
    <h3 class="hndle"><span><?php _e("Do you use it ?", "simple-fb-like"); ?></span></h3>
    <div class="inside" style="display: block;">
        <img src="../wp-content/plugins/simple-facebook-like/img/icon_coffee.png" alt="buy me a coffee" style=" margin: 5px; float:left;" />
        <p>Hi! I'm <a href="http://nxsn.com?f=sfb_like" target="_blank" title="Huseyin Berberoglu">Huseyin Berberoglu</a>, developer of this plugin.</p>
        <p>I've been spending many hours to develop this plugin. <br />If you like and use this plugin, you can <strong>buy me a cup of coffee</strong>.</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHRwYJKoZIhvcNAQcEoIIHODCCBzQCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYBSHdcQViaHAHOiGx4KaECVC2hhPshwur7gVh4TrpTo69W9YlVKiRaLOqhvTBQoU7Hulrkj5BYPcjfMfUkf6SVZQJUQg3WudCxscMmD1Yu0Kf2wvnS7zfICmFgBNuJDvJnyZr3RUeIuxyOdELlljaSNxZh+BXkW3WhOlz6xdwMfSTELMAkGBSsOAwIaBQAwgcQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI9MyqRaXCZk+AgaDYnP1ixyLNgN9gkp//StP670kML2c3iYKWxi5NtUJwjCVbRM/+xjHB0oEcJn0muKxdKyAodaSJCBmCMGrYvdLB2mycp4997/dCixkDxYujKNdeYDijAD4v2gqp0gOGk/AbTcKbUhieAKijSYxlVBKvQkcDBZ9t3sO912zo74wI8SqTh7TGBtmIBDoVPr54eQbS/UBJElBrdO+YIRyWKkueoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMDkwMjIzMTQwOTU0WjAjBgkqhkiG9w0BCQQxFgQUq9PPaw3TVyLjcfei097XMhV6qWcwDQYJKoZIhvcNAQEBBQAEgYAvssotUVP3jyMFgYt1zF4muThMzlLAMFSZCTjeLpqLRWL/eFaSMEd0NYa5maKfqu5M79gucNS9o0/eBgXuCXSgI2wwIakaym6A31YqeuaRBq0Z4n9tPInj8O8vSknNskFbDrgsbgWr864Gp/jlXDwSc80siR2uV2GVuJpAH732PA==-----END PKCS7-----
            ">
            <input type="image" src="../wp-content/plugins/simple-facebook-like/img/donate.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
        </form>
        <div style="clear:both;"></div>
    </div>
</div>
<form action="" method="post">

<div class="postbox">
    <div title="" class="handlediv">
      <br>
    </div>
    <h3 class="hndle"><span><?php _e("Settings", "simple-fb-like") ?></span></h3>
    <div class="inside" style="display: block;">
        <table class="form-table">
            <tr>
                <th><?php _e("Position", "simple-fb-like") ?></th>
                <td>
                    <select name="position">
                        <option <?php if ($sfb_like_options['position'] == 'after') echo $selected; ?> value="after">After Content</option>
                        <option <?php if ($sfb_like_options['position'] == 'before') echo $selected; ?> value="before">Before Content</option>
                        <option <?php if ($sfb_like_options['position'] == 'none') echo $selected; ?> value="none">Don't show</option>
                    </select></td>
            </tr>        
            <tr>
                <th><?php _e("Layout Style", "simple-fb-like") ?></th>
                <td>
                    <select name="layout" id="param_layout">
                        <option <?php if ($sfb_like_options['layout'] == 'standard') echo $selected; ?> value="standard">standard</option>
                        <option <?php if ($sfb_like_options['layout'] == 'button_count') echo $selected; ?> value="button_count">button_count</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><?php _e("Width", "simple-fb-like") ?></th><td><input type="text" name="width" size="3" value="<?php echo stripslashes($sfb_like_options['width']); ?>" />px</td>
            </tr> 
            <tr>
                <th><?php _e("Height", "simple-fb-like") ?></th><td><input type="text" name="height" size="3" value="<?php echo stripslashes($sfb_like_options['height']); ?>" />px</td>
            </tr>
            <tr>
                <th><?php _e("Verb to display", "simple-fb-like") ?></th>
                <td>
                    <select name="action" id="param_action">
                    <option <?php if ($sfb_like_options['action'] == 'like') echo $selected; ?> value="like">like</option>
                    <option <?php if ($sfb_like_options['action'] == 'recommend') echo $selected; ?> value="recommend">recommend</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><?php _e("Color Scheme", "simple-fb-like") ?></th>
                <td>
                    <select name="colorscheme" id="param_colorscheme">
                        <option <?php if ($sfb_like_options['colorscheme'] == 'light') echo $selected; ?> value="light">light</option>
                        <option <?php if ($sfb_like_options['colorscheme'] == 'dark') echo $selected; ?> value="dark">dark</option>
                        <option <?php if ($sfb_like_options['colorscheme'] == 'evil') echo $selected; ?> value="evil">evil</option>
                    </select>
                </td>
            </tr>                                    
            <tr>
                <th><?php _e("Show faces", "simple-fb-like") ?></th><td><input type="checkbox"  <?php if ($sfb_like_options['show_faces']) echo "checked='cheked'"; ?> name="show_faces" value="1" />
                (If you check this you should increase the height. e.g. to 60px)
                </td>
            </tr>
            <tr>
                <th><?php _e("Font", "simple-fb-like") ?></th>
                <td>
                    <select name="font"><option></option>
                        <option <?php if ($sfb_like_options['font'] == 'arial') echo $selected; ?> value="arial">arial</option>
                        <option <?php if ($sfb_like_options['font'] == 'lucida+grande') echo $selected; ?> value="lucida+grande">lucida grande</option>
                        <option <?php if ($sfb_like_options['font'] == 'segoe+ui') echo $selected; ?> value="segoe+ui">segoe ui</option>
                        <option <?php if ($sfb_like_options['font'] == 'tahoma') echo $selected; ?> value="tahoma">tahoma</option>
                        <option <?php if ($sfb_like_options['font'] == 'trebuchet+ms') echo $selected; ?> value="trebuchet+ms">trebuchet ms</option>
                        <option <?php if ($sfb_like_options['font'] == 'verdana') echo $selected; ?> value="verdana">verdana</option>
                    </select>
                </td>
            </tr>                             
            <tr>
                <th></th>
                <td>
                    <input type="submit" name="submit" class="button" value="<?php _e('Update options &raquo;'); ?>" />
                </td>
            </tr>

        </table>
    </div>
</div>


<div class="postbox">
    <div title="<?php _e('Click to open/close', 'wphp'); ?>" class="handlediv">
      <br>
    </div>
    <h3 class="hndle"><span><?php _e("There is more...", "wphp"); ?></span></h3>
    <div class="inside" style="display: block;">
        <p>Check out my other Wordpress Plugins like 
        <a href="http://nxsn.com/projects/wp-favorite-posts-plugin/?ref=<?php echo basename(__FILE__, '.php'); ?>" title="WP Favorite Posts">WP Favorite Posts</a>, 
        <a href="http://nxsn.com/projects/mediarss-with-post-thumbnail-plugin-for-wordpress/?ref=<?php echo basename(__FILE__, '.php'); ?>" title="MediaRSS with Post Thumbnail">MediaRSS with Post Thumbnails</a>, 
        <a href="http://nxsn.com/projects/bp-posts-on-profile/?ref=<?php echo basename(__FILE__, '.php'); ?>" title="BP Posts on Profile">BP Posts on Profile</a>,
        <a href="http://nxsn.com/projects/wp-hide-pages/?ref=<?php echo basename(__FILE__, '.php'); ?>" title="WP Hide Pages">WP Hide Pages</a>
        ...
    </div>
</div>
</form>
</div>
</div>
