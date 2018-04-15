<?php
/**
 * Class for creating a tabbed site options page
 * Extends the cmb2-metatabs-options library
 */

namespace Theme;

class SiteOptions {

	public function __construct(){

		add_action('cmb2_admin_init', [$this, 'options_metaboxes']);

	}

	public function options_metaboxes(){

		/**
		 * Main Options
		 */

		$main_options = new_cmb2_box([
			'id' => 'options_page',
			'title' => 'Site Options',
			'object_types' => ['options-page'],
			'option_key' => 'options_page',
			'icon_url' => 'dashicons-palmtree'
		]);

		/**
		 * Social Media
		 */

		$social_media = new_cmb2_box([
			'id' => 'social_media',
			'title' => 'Social Media, etc.',
			'object_types' => ['options-page'],
			'option_key' => 'social_media',
			'parent_slug' => 'options_page'
		]);

		$social_media->add_field([
			'id' => 'email',
			'name' => 'Email Address',
			'type' => 'text_email'
		]);

		$social_media->add_field([
			'id' => 'facebook',
			'name' => 'Facebook Profile URL',
			'type' => 'text_url'
		]);

		$social_media->add_field([
			'id' => 'twitter',
			'name' => 'Twitter Profile URL',
			'type' => 'text_url'
		]);

		$social_media->add_field([
			'id' => 'instagram',
			'name' => 'Instagram Profile URL',
			'type' => 'text_url'
		]);

		$social_media->add_field([
			'id' => 'youtube',
			'name' => 'YouTube Channel URL',
			'type' => 'text_url'
		]);

		$social_media->add_field([
			'id' => 'linkedin',
			'name' => 'LinkedIn Profile URL',
			'type' => 'text_url'
		]);

	}

}
