<?php 


add_action( 'wp_enqueue_scripts', function () {
    //стили
	wp_enqueue_style( 'norrmalize-css', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css' );
    // <script src="../js/main.js" defer></script> -->
    
    //скрипты
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', false );
	//wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true ); array после пути - это зависимость подключаемого скрипта, то есть мы указываем что наш скрипт должен загрузиться после какого-то, 1.0.0 - версия, можно не писать, в конце true - это то, что загружаться он должен из футера, то есть после загрузки дом
	// wp_enqueue_script( 'jquery' ); 
    
});

?>

<?php
add_theme_support('post-thumbnails');//вставляет картинки
// add_theme_support('title-tag');//чтобы тайтл управлялся ворпрессом
// add_theme_support('custom-logo');//чтобы лого управлялся вордпрессом
// template post type: post, page, product

?>