<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/

//require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/index-pagination.php';
require get_template_directory() . '/functions/single-split-pagination.php';
// Register Custom Post Type
function generales() {

	$labels = array(
		'name'                  => _x( 'generales', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'general', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'generales', 'text_domain' ),
		'name_admin_bar'        => __( 'generales', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'general', 'text_domain' ),
		'description'           => __( 'mision, vision y objetivo de la empresa', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'generales', $args );

}
add_action( 'init', 'generales', 0 );

// Register Custom Post Type
function publiaciones_post_type() {

	$labels = array(
		'name'                  => _x( 'Publicaciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Publicacion', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Publicaciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Añadir nuevo', 'text_domain' ),
		'archives'              => __( 'Archivo de elementos', 'text_domain' ),
		'attributes'            => __( 'Atributos de Elemento', 'text_domain' ),
		'parent_item_colon'     => __( 'Elemento Padre', 'text_domain' ),
		'all_items'             => __( 'Todos los Elementos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo Elemento', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Elemento', 'text_domain' ),
		'edit_item'             => __( 'Editar elemento', 'text_domain' ),
		'update_item'           => __( 'Actualizar elemento', 'text_domain' ),
		'view_item'             => __( 'Ver elemento', 'text_domain' ),
		'view_items'            => __( 'Ver elementos', 'text_domain' ),
		'search_items'          => __( 'Buscar elementos', 'text_domain' ),
		'not_found'             => __( 'No encontradp', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Colocar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar Como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar En Elemento', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Añadido a este elemento', 'text_domain' ),
		'items_list'            => __( 'Lista de Elementos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de Navegacion de Elementos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar Lista de Elementos', 'text_domain' ),

	);
	$args = array(
		'label'                 => __( 'Publicacion', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag', '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'publicaciones', $args );

}
add_action( 'init', 'publiaciones_post_type', 0 );
// Register Custom Taxonomy
function libros_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Libros', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Libro', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Libro', 'text_domain' ),
		'all_items'                  => __( 'Todos los Libros', 'text_domain' ),
		'parent_item'                => __( 'Libro Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'Libro Padre:', 'text_domain' ),
		'new_item_name'              => __( 'Nombre Del Nuevo Libro', 'text_domain' ),
		'add_new_item'               => __( 'Añadir Nuevo Libro', 'text_domain' ),
		'edit_item'                  => __( 'Editar Libro', 'text_domain' ),
		'update_item'                => __( 'Actualizar Libro', 'text_domain' ),
		'view_item'                  => __( 'Ver Libro', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar con commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Añadir o remover Libros', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escoger De Los Mas Usados', 'text_domain' ),
		'popular_items'              => __( 'Libros Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar Libros', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No Libro', 'text_domain' ),
		'items_list'                 => __( 'Lista de Libros', 'text_domain' ),
		'items_list_navigation'      => __( 'Lista De Navegacion De Libros', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'libros', array( 'publicaciones', '' ), $args );

}
add_action( 'init', 'libros_taxonomy', 0 );