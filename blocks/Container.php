<?php

namespace App;


/* Check if Wordpress */
if (!defined('ABSPATH')) exit;


class Container
{
	/**
	 * Returns block name
	 */
	static function getBlockName()
	{
		return 'main/container';
	}
	
	
	/**
	 * Register block
	 */
	static function register()
	{
		register_block_type(
			static::getBlockName(),
			[
				'title' => 'Container',
				'category' => 'text',
				'render_callback' => [static::class, 'render'],
				'attributes' => [
					'text' => [
						'type' => 'string',
						'default' => 'example',
					],
				],
			]
		);
	}
	
	
	/**
	 * Register scripts
	 */
	static function scripts()
	{
		wp_register_script(
			static::getBlockName(),
			get_template_directory_uri() . '/blocks/Container.js',
			['wp-blocks'], F_INC
		);
		wp_enqueue_script(static::getBlockName());
	}
	
	
	/**
	 * Render block
	 */
	static function render($attributes, $content)
	{
		return $content;
	}
}


add_action('init', [Container::class, 'register']);
add_action('enqueue_block_editor_assets', [Container::class, 'scripts']);
