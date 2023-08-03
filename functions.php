<?php
//Bustomizer_Loader::list_hooked_functions();
// Page with the main features of the site
const SETTING_PAGE = 17;

if(!is_plugin_active('bustomizer/bustomizer.php')){
    add_action('proposal_init', function (){
    ?>
        <div class="error" style="
            color: white;
            margin: 20px auto;
            background: darkred;
            text-align: center;
            padding: 30px">
            <h1>Pls Install & Activate Bustomizer Plugin</h1>
        </div>

    <?php
    });



}

if(class_exists('Bustomizer_Woocommerce')){
    // отключение оплаты на сайте
    // Bustomizer_Woocommerce::cart_needs_payment_off();
    // отключены ненужные метоты оплаты в админке
    add_action( 'init', function (){
        add_filter( 'woocommerce_payment_gateways', ['Bustomizer_Woocommerce', 'remove_default_gateways'] );
    }, 1 );

    //TODO: Убрать в продакшене
//    add_action('proposal_init', function (){
//       echo  '<h1 style="text-align: center">Bustomizer Active</h1>';
//    });

    // Показывает задействованные хуки
    //add_action('proposal_init', ['Bustomizer_Loader', 'list_hooked_functions'], 0);
}


// Main Menu
register_nav_menus(array(
    'top'=>'Header menu',
    'bottom'=>'Footer menu',
));


// Отключить перегенерацию миниатюр
add_filter( 'woocommerce_background_image_regeneration', '__return_false' );
add_filter( 'woocommerce_resize_images', '__return_false' );


//TODO: найти событие после Ajax

// is_cart() is_checkout()
BustomizerShipping::disable_shipping();
BustomizerCheckOut::print_order_review_heading();



//remove_action('woocommerce_checkout_order_review', ['WC_Stripe_Field_Manager', 'output_checkout_fields'], 10);

/*
 *      WC_Product_Addons_Cart_Ajax
		add_action( 'wp_ajax_wc_product_addons_calculate_tax', array( $this, 'calculate_tax' ) );
		add_action( 'wp_ajax_nopriv_wc_product_addons_calculate_tax', array( $this, 'calculate_tax' ) );

*/





















#################################################
// Вывод постов в каталоге
add_action('init', 'redesign_catalog_post');
if ( ! function_exists( 'redesign_catalog_post' ) ) {
    function redesign_catalog_post()
    {
        remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
        add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    }
}

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    }
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
    //function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
    function woocommerce_get_product_thumbnail( $size = 'woocommerce_thumbnail' ): string
    {
        global $post, $woocommerce;
        $output = '';

        if ( has_post_thumbnail() ) {
            $output .= get_the_post_thumbnail( $post->ID, $size );
        } else {
            $output .= wc_placeholder_img( $size );
            // Or alternatively setting yours width and height shop_catalog dimensions.
            // $output .= '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
        }
        $output .= '';
        return $output;
    }
}




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom Shortcodes for this theme.
 */
require get_template_directory() . '/inc/shortcodes.php';
/**
 * Custom ACF Field for this theme.
 */
//require get_template_directory() . '/inc/acf_custom_field.php';



///--------------------------- create Tile settings ---------------------





add_action( 'admin_menu', 'true_top_menu_page', 25 );
 
function true_top_menu_page(){
 
	add_submenu_page(
		'options-general.php',
		'Tiles settings', // тайтл страницы
		'Tiles', // текст ссылки в меню
		'manage_options', // права пользователя, необходимые для доступа к странице
		'true_slider', // ярлык страницы
		'true_slider_page_callback' // функция, которая выводит содержимое страницы
	);
}
 
function true_slider_page_callback(){
 
	echo '
	<style>
	.propos-class th { 
  width: 400px;}
	</style>
	<div class="wrap">
	<h1>' . get_admin_page_title() . '</h1>
	<form method="post" action="options.php">';
 
		settings_fields( 'true_slider_settings' ); // название настроек
		do_settings_sections( 'true_slider' ); // ярлык страницы, не более
		submit_button(); // функция для вывода кнопки сохранения
 
	echo '</form></div>';
 
}

add_action( 'admin_init',  'true_slider_fields' );
 
function true_slider_fields(){
 

 
	// добавляем секцию без заголовка
	add_settings_section(
		'slider_settings_section_id', // ID секции, пригодится ниже
		'', // заголовок (не обязательно)
		'', // функция для вывода HTML секции (необязательно)
		'true_slider' // ярлык страницы
	);
 
	
	
$get_categories_product = get_terms('product_cat', [
		'orderby' => 'name', // Поле для сортировки
		'order' => 'ASC', // Направление сортировки
		'hide_empty' => 1, // Скрывать пустые (1 - да, 0 - нет)
	]);
		
	if(count($get_categories_product) > 0) {
			
		foreach($get_categories_product as $categories_item) {
	
		// регистрируем опцию
	register_setting(
		'true_slider_settings', // название настроек из предыдущего шага
		'number_of_slider_slides_'.$categories_item->slug, // ярлык опции
		'absint' // функция очистки
	);		
			
	
	// добавление поля
	add_settings_field(
		'number_of_slider_slides_'.$categories_item->slug,
		'Количество слайдов в блоке '.$categories_item->name.'<br>(MAX: '.$categories_item->count.')',
		'true_number_field', // название функции для вывода
		'true_slider', // ярлык страницы
		'slider_settings_section_id', // // ID секции, куда добавляем опцию
		array( 
			'label_for' => 'number_of_slider_slides_'.$categories_item->slug,
			'class' => 'propos-class', // для элемента <tr>
			'name' => 'number_of_slider_slides_'.$categories_item->slug, // любые доп параметры в колбэк функцию
		)
	);
	

		}
		
	}
	
	
	
	
 
}
 
function true_number_field( $args ){
	// получаем значение из базы данных
	$value = get_option( $args[ 'name' ] );
 
	printf(
		'<input type="number"  min="1" id="%s" name="%s" value="%d" />',
		esc_attr( $args[ 'name' ] ),
		esc_attr( $args[ 'name' ] ),
		absint( $value )
	);
 
}

// Обновление года
function update_year() {
    return date('Y');
}


