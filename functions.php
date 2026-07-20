<?php

	// Register taxonomy
	add_action( 'init', 'create_taxonomy' );
	function create_taxonomy() {

		// Таксономия - категория продуктов (товаров)
		register_taxonomy( 'cat-portfolio', [ 'portfolio' ], [
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => [
				'name'              => 'Категория наших работ',
				'singular_name'     => 'Категория нашей работы',
				'search_items'      => 'Искать нашу работу',
				'all_items'         => 'Все категории наших работ',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Edit Genre',
				'update_item'       => 'Update Genre',
				'add_new_item'      => 'Add New Genre',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категории наших работ',
				'back_to_items'     => '← Back to Genre',
			],
			'description'           => '', // описание таксономии
			'public'                => true,
			// 'publicly_queryable'    => null, // равен аргументу public
			// 'show_in_nav_menus'     => true, // равен аргументу public
			// 'show_ui'               => true, // равен аргументу public
			// 'show_in_menu'          => true, // равен аргументу show_ui
			// 'show_tagcloud'         => true, // равен аргументу show_ui
			// 'show_in_quick_edit'    => null, // равен аргументу show_ui
			'hierarchical'          => false,

			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
			'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			// '_builtin'              => false,
			//'update_count_callback' => '_update_post_term_count',
		] );
		
	} // End create_taxonomy
	
	
	// Register post type
	add_action( 'init', 'register_post_types' );
	function register_post_types() {
		
		// Add thumbnails
		add_theme_support('post-thumbnails');

		// Portfolio
		register_post_type( 'portfolio', [
			'label'  => null,
			'labels' => [
				'name'               => 'Наши работы', // основное название для типа записи
				'singular_name'      => 'Наши работы', // название для одной записи этого типа
				'add_new'            => 'Добавить нашу работу', // для добавления новой записи
				'add_new_item'       => 'Добавление нашей работы', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование нашей работы', // для редактирования типа записи
				'new_item'           => 'Новая наша работа', // текст новой записи
				'view_item'          => 'Смотреть нашу работу', // для просмотра записи этого типа.
				'search_items'       => 'Искать нашу работу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Наши работы', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','trackbacks','comments', 'thumbnail', 'custom-fields','revisions','page-attributes','post-formats', 'excerpt'
			'taxonomies'          => [ 'cat-portfolio' ],
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		] );
		
	} // End register_post_types
	
	
	// Подключаем функцию активации мета блока (my_extra_fields)
	add_action('add_meta_boxes', 'my_extra_fields', 1);
	
	function my_extra_fields() {
		add_meta_box( 'extra_fields', 'Наши работы', 'extra_fields_box_func', 'portfolio', 'side', 'high' );
	}
	
	/* Код блока галереи */
	function extra_fields_box_func( $post ){
		for ($i=1; $i<=9; $i++) { ?>
			<label>URL&#160;изображения <?php echo $i; ?>:</label>
			<input type="text" name="extra[img-<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, '_img-'.$i, 1); ?>" style="width: 100%;">
			<div style="clear: both;"></div>
		<? } ?>
			<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?php
	}
	
	// включаем обновление полей при сохранении
	add_action( 'save_post', 'my_extra_fields_update', 0 );
	
	## Сохраняем данные, при сохранении поста
	function my_extra_fields_update( $post_id ){
		// базовая проверка
		if (
			   empty( $_POST['extra'] )
			|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
			|| wp_is_post_autosave( $post_id )
			|| wp_is_post_revision( $post_id )
		)
			return false;

		// Все ОК! Теперь, нужно сохранить/удалить данные
		//$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
		foreach( $_POST['extra'] as $key => $value ){
			if( empty($value) ){
				delete_post_meta( $post_id, '_'.$key ); // удаляем поле если значение пустое
				continue;
			}
			update_post_meta( $post_id, '_'.$key, $value ); // add_post_meta() работает автоматически
		}
		return $post_id;
	}
	
	
	/*** WOOCOMMERCE SUPPORT ***/
	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
	/*** END WOOCOMMERCE SUPPORT ***/
	
	
	/*** Отключаем ненужные блоки в Woocommerce ***/
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	/*** Закончили отключать ненужные блоки в Woocommerce ***/
	
	
	/* Отключаем ненужные опции вывода настраницу */
	/* Отключаем название товара *
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	/* Отключаем вывод ненужных данных на страницу продукта */
	


/*** Вывод товаров на странице ***/

//add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 50;' ), 20 );


	// Убрираем шильдик в single_poduct "Распродажа"
	add_filter( 'woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3 );
	function my_custom_sale_flash($text, $post, $_product) {
		return '<span class="onsale d-none">Распродажа!</span>';
	}


	/* Wijet область в сайдбаре */
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Виджет в сайдбаре', //название виджета в админ-панели
				'id'            => 'wsidebar-1', //идентификатор виджета
				'description'   => 'виден во всех разделах сайта', //описание виджета в админ-панели
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', //открывающий тег виджета с динамичным идентификатором
				'after_widget'  => '<div class="clear"></div></aside>', //закрывающий тег виджета с очищающим блоком
				'before_title'  => '<span class="widget-title">', //открывающий тег заголовка виджета
				'after_title'   => '</span>',//закрывающий тег заголовка виджета
			)
		);
	}




/*** ВКЛЮЧАЕМ EXCERPT FOR PAGES (ОПИСАНИЕ ДЛЯ СТРАНИЦ) ***/
add_action('init', 'add_excerpt_to_pages');
function add_excerpt_to_pages() {
	add_post_type_support('page', 'excerpt');
}

//     // КЛАССЫ В BODY_CLASS
// add_filter('body_class', 'custom_body_classes');

// function custom_body_classes($classes) {
// 	// Добавить класс для всех страниц
// 	$classes[] = 'b-new-year';
// 	return $classes;
// }



/*** ДЕЛАЕМ ФАЙЛ ROBOTS.TXT ***/
add_filter('robots_txt', 'custom_robots_txt');
function custom_robots_txt($output)
{
    $output = "User-agent: *\n";
    $output .= "Disallow: *?add-to-cart=*\n";
	$output .= "Disallow: *?filter_*\n";
	$output .= "Host: https://xn----7sbabmjsi2adq8pnb.xn--p1ai\n";
	$output .= "Sitemap: https://xn----7sbabmjsi2adq8pnb.xn--p1ai/sitemap.xml\n";
    return $output;
}
/*** END ДЕЛАЕМ ФАЙЛ ROBOTS.TXT ***/
?>