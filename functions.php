<?php
/**
 * Clear Theme
 */

/* Check if Wordpress */
if (!defined('ABSPATH')) exit;

define("F_INC", 10);


/* Включаем блоки */
//include "blocks/Container.php";


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
	 * Добавить возможность редактировать блоки
	 */
	add_theme_support('block-template');
	add_theme_support('block-template-parts');
	
	
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
 * Регистрация css
 */
add_action('wp_enqueue_scripts', function(){
	wp_register_style(
		'main-style-css',
		get_template_directory_uri() . '/style.css',
		array(),
		F_INC
	);
	wp_enqueue_style('main-style-css');
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
 * Disable editor title
 */
add_action('admin_head', function(){
	echo '<style>
	.editor-post-title__input {
		display: none;
	}
	.editor-visual-editor__post-title-wrapper{
		margin-top: 0px !important;
	}
	</style>';
});