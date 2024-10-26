<?php
/**
 * Clear Theme
 */

/* Check if Wordpress */
if (!defined('ABSPATH')) exit;

define("F_INC", 10);


/**
 * Настройка темы
 * https://wp-kama.ru/function/add_theme_support
 */
add_action('after_setup_theme', function(){
	
	/**
	 * Позволяет устанавливать миниатюру посту.
	 * https://wp-kama.ru/function/add_theme_support#post-thumbnails
	 */
	add_theme_support('post-thumbnails');
	
	
	/**
	 * Включает поддержку html5 разметки для списка комментариев,
	 * формы комментариев, формы поиска, галереи и т.д
	 */
	add_theme_support(
		'html5',
		[
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]
	);
	
	
	/**
	 * Позволяет указывать формат посту
	 */
	add_theme_support(
		'post-formats',
		[
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		]
	);
	
	
	/**
	 * Добавляет возможность изменять фон из админки
	 */
	add_theme_support('custom-background');
	
	
	/**
	 * Enable Menus
	 */
	add_theme_support('menus');
});


/**
 * Widgets init
 */
add_action('widgets_init', function(){
	/*
	register_sidebar(
		array(
			'name'          => 'Blog Sidebar',
			'id'            => 'sidebar-1',
			'description'   => 'Add widgets here to appear in your sidebar on blog posts and archive pages.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	*/
});


/**
 * Site origin fix
 */
add_action('admin_head', function(){
	echo '<style>
	.so-panels-live-editor .so-preview {
		background-color: white !important;
	} 
	</style>';
});