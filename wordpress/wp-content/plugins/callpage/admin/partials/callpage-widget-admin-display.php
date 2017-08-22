<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://lostwebdesigns.com
 * @since      1.0.0
 *
 * @package    Wp_Cbf
 * @subpackage Wp_Cbf/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

	

	<p style="
		color: #31708f; 
		background-color: #d9edf7; 
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid #bce8f1;
		border-radius: 4px;"> 
			<?php _e( 'Find CallPage code in dashboard on ', $this->plugin_name ); ?> <a href="https://app.callpage.io/widgets" target="_blank">CallPage.io</a>.
	</p>

	<form method="post" name="cleanup_options" action="options.php">

		<?php
			// Default values
			$defaults = array (
				'active_callpage' => true,
				'show_callpage_logged_users' => true,
				'code_callpage' => ''
			);

			// Ref: http://wordpress.stackexchange.com/questions/28954/how-to-set-the-default-value-of-a-option-in-a-theme
			$options = get_option($this->plugin_name, $defaults);
			$options = wp_parse_args( $options, $defaults );

			// Cleanup
			$active_callpage = $options['active_callpage'];
			$show_callpage_logged_users = $options['show_callpage_logged_users'];
			$code_callpage = $options['code_callpage'];
		?>

		<?php
			settings_fields( $this->plugin_name );
			do_settings_sections( $this->plugin_name );
		?>

		<h2><?php _e( 'Settings:', $this->plugin_name ); ?></h2>
		<div style="margin-top: 1em;">
	        <label for="<?php echo $this->plugin_name; ?>-active_callpage">
	            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-active_callpage" name="<?php echo $this->plugin_name; ?>[active_callpage]" value="1" <?php checked($active_callpage, 1); ?> />
	            <span><?php _e('Enable CallPage on website', $this->plugin_name); ?></span>
        	</label>
        </div>

        <div style="margin-top: 1em;">
	        <label for="<?php echo $this->plugin_name; ?>-show_callpage_logged_users">
	            <input type="checkbox" id="<?php echo $this->plugin_name; ?>-show_callpage_logged_users" name="<?php echo $this->plugin_name; ?>[show_callpage_logged_users]" value="1" <?php checked($show_callpage_logged_users, 1); ?> />
	            <span><?php _e('Show to logged users (administrators, authors, editors, etc.)', $this->plugin_name); ?></span>
        	</label>
        </div>

		<div>
			<h2><?php _e( 'Insert code:', $this->plugin_name ); ?></h2>
			<textarea name="<?php echo $this->plugin_name;?>[code_callpage]" id="<?php echo $this->plugin_name;?>-code_callpage" cols="50" rows="12" placeholder="<?php _e( 'A place for CallPage code ', $this->plugin_name ); ?>"><?php if(!empty($code_callpage)) echo $code_callpage;?></textarea>
		</div>

		<?php submit_button(__('Save', $this->plugin_name), 'primary','submit', TRUE); ?>

    </form>

</div>