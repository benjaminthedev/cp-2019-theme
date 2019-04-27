<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );


// Show the attruibutes in single page template
function cw_woo_attribute(){
    global $product;
    $attributes = $product->get_attributes();
    if ( ! $attributes ) {
        return;
    }

    $display_result = '';

    foreach ( $attributes as $attribute ) {


        if ( $attribute->get_variation() ) {
            continue;
        }
        $name = $attribute->get_name();
        if ( $attribute->is_taxonomy() ) {

            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );

            $cwtax = $terms[0]->taxonomy;

            $cw_object_taxonomy = get_taxonomy($cwtax);

            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                $tax_label = $cw_object_taxonomy->labels->singular_name;
            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                $tax_label = $cw_object_taxonomy->label;
                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    $tax_label = substr( $tax_label, 8 );
                }
            }
            $display_result .= $tax_label . ': ';
            $tax_terms = array();
            foreach ( $terms as $term ) {
                $single_term = esc_html( $term->name );
                array_push( $tax_terms, $single_term );
            }
            $display_result .= implode(', ', $tax_terms) .  '<br />';

        } else {
            $display_result .= $name . ': ';
            $display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) . '<br />';
        }
    }
    echo $display_result;
}

add_action('woocommerce_single_product_summary', 'cw_woo_attribute', 25);

/*-- Adding a class for non logged in users --*/
function wpd_logged_out_body_class( $classes ) {
    if( ! is_user_logged_in() ){
        $classes[] = 'loggedout';
    }
    return $classes;
}
add_filter( 'body_class', 'wpd_logged_out_body_class' );

/**
 * Proper way to enqueue scripts and styles.
 */
function get_scripts() {
    wp_enqueue_script( 'ben', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'get_scripts' );


//Get SKU next to product price on category pages
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_after_shop_loop_item_sku_in_cart', 20, 1);
function woocommerce_after_shop_loop_item_sku_in_cart( $template )  {
	global $product;
	$sku = $product->get_sku();
	echo $sku;
}

add_filter( 'woocommerce_loop_add_to_cart_link', 'add_product_link' );
function add_product_link( $link ) {
global $product;
    echo '<a href="' . esc_url( $product->get_permalink( $product->id ) ) . '" class="viewMoreBtn">View Product</a>';
}