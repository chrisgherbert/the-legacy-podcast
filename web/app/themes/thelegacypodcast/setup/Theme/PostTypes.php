<?php
/**
 * This class creates our post types
 */

namespace Theme;

class PostTypes {

	protected $types = array(
		'episode'
	);

	public function __construct(){
		if ($this->types && !empty($this->types)){
			foreach ($this->types as $type) {
				$this->$type();
			}
		}
	}

	/**
	 * Podcast episodes
	 */
	public function episode(){

		register_via_cpt_core(
			array(
				'Episode',
				'Episodes',
				'episode'
			),
			array(
				'menu_icon' => 'dashicons-controls-volumeon',
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
				'has_archive' => true
			)
		);

	}

}