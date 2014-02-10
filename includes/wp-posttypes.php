<?php


namespace Theme\PostType;


class Fact {

	public function __construct() {

		register_post_type(
			'facts',
			array(
				'labels' => array(
					'name' 				=> __('Facts', 'awesome-textdomain' ),
					'singular_name' 	=> __('Facts', 'awesome-textdomain' ),
					'add_new_item'  	=> __('Add Facts', 'awesome-textdomain'),
					'edit_item'     	=> __('Edit Facts', 'awesome-textdomain'),
					'update_item'		=> __('Update Facts', 'awesome-textdomain'),
					'add_new'			=> __('Add Facts', 'awesome-textdomain'),
				),

				// Backend
				'show_ui'             	=> true,
				'show_in_menu'        	=> true,
				'rewrite' => array(
					'slug' 				=> __('/facts', 'awesome-textdomain'),
					'with_front' 		=> false
				),
				'menu_position'       	=> 50,
				'supports' => array(
					'title',
					'editor',
					'thumbnail',
					'page-attributes',
					'revisions',
				),
				'show_in_nav_menus'   	=> true,
				'capability_type'     	=> array('icelab_fact', 'icelab_facts'),

				// Capabilities
				'map_meta_cap'        	=> false,
				'capability_type'     	=> array('icelab_fact', 'icelab_facts'),

				// Fronted
				'public' => true,
				'has_archive' => true,
				'exclude_from_search' 	=> false,
			)
		);
	}
}


class Profile {

	public function __construct() {

		register_post_type(
			'profiles',
			array(
				'labels' => array(
					'name' 				=> __('Profiles', 'awesome-textdomain' ),
					'singular_name' 	=> __('Profile', 'awesome-textdomain' ),
					'add_new_item'  	=> __('Add Profile', 'awesome-textdomain'),
					'edit_item'     	=> __('Edit Profile', 'awesome-textdomain'),
					'update_item'   	=> __('Update Profile', 'awesome-textdomain'),
					'add_new'       	=> __('Add Profile', 'awesome-textdomain'),
				),

				// Backend
				'show_ui'             	=> true,
				'show_in_menu'        	=> true,
				'rewrite' => array(
					'slug' 				=> __('profiles', 'awesome-textdomain'),
					'with_front' 		=> false
				),
				'menu_position'       	=> 50,
				'supports' => array(
					'title',
					'page-attributes',
					'revisions'
				),
				'show_in_nav_menus'   	=> true,
				'capability_type'     	=> array('icelab_profile', 'icelab_profiles'),

				// Capabilities
				'map_meta_cap'        	=> false,
				'capability_type'     	=> array('icelab_profile', 'icelab_profiles'),

				// Fronted
				'public' => true,
				'has_archive' => true,
				'exclude_from_search' 	=> false,
			)
		);
	}
}
