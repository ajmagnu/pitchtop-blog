<?php
/**
 * Add an slogan input for the site in settings -> general
 *
 */



// --------------------------------------------------------------------------------------------------------------
// options form for the admin pages
// --------------------------------------------------------------------------------------------------------------
if (is_admin()) {

				// add page to theme options

				$args = array();
				$args['id'] = ktt_var_name('general-page');
				$args['page_title'] = 'General';
				$args['page_description'] = '';
				$args['menu_title'] = 'General';
				$args['menu_order'] = 1;
				$args['parent'] = 'theme-options';

				$new_admin_submenu = new KTT_admin_submenu($args);




				// add option to admin panel

				$args                           = array();
				$args['option_id']              = ktt_var_name('website_slogan');
				$args['option_name']            = __('Website Slogan', THEME_TEXTDOMAIN);
				$args['option_label']           = __('', THEME_TEXTDOMAIN);
				$args['option_description']     = __('This text appear next to the website logo/name.', THEME_TEXTDOMAIN);
				$args['option_type']            = 'wp_editor';
				$args['option_order']			= 3;
				$args['option_default'] 		= __('This is the website slogan, can be edited in Theme options / General.',THEME_TEXTDOMAIN);
				$args['option_type_vars'] 		= array(
												    	'wpautop' => false,
												    	'media_buttons' => false,
												    	'textarea_name' => ktt_var_name('website_slogan'),
												    	'textarea_rows' => 2,
												    	//'teeny' 	=> true,
												    	'quicktags' => false,
												    	'tinymce' => array(
												        				'toolbar1'=> 'bold,italic,underline,link,unlink,forecolor'
												      	)
												      	);
				$args['option_page']            = ktt_var_name('general-page');

				$KTT_new_setting = new KTT_new_setting($args);





				

}

?>