<?php

// Register Custom Taxonomy
function event_taxonomy() { $labels=array( 
    'name'=> 'events',
    'singular_name' => 'event',
    'menu_name' => 'Event',
    'all_items' => 'All Items',
    'parent_item' => 'Parent Item',
    'parent_item_colon' => 'Parent Item:',
    'new_item_name' => 'New Item Name',
    'add_new_item' => 'Add New Item',
    'edit_item' => 'Edit Item',
    'update_item' => 'Update Item',
    'view_item' => 'View Item',
    'separate_items_with_commas' => 'Separate items with commas',
    'add_or_remove_items' => 'Add or remove items',
    'choose_from_most_used' => 'Choose from the most used',
    'popular_items' => 'Popular Items',
    'search_items' => 'Search Items',
    'not_found' => 'Not Found',
    'no_terms' => 'No items',
    'items_list' => 'Items list',
    'items_list_navigation' => 'Items list navigation',
);
$args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
);
register_taxonomy( 'event', array( 'attachment' ), $args );

}
add_action( 'init', 'event_taxonomy', 0 );




function artist_taxonomy() { $labels=array( 
    'name'=> 'artists',
    'singular_name' => 'artist',
    'menu_name' => 'Artist',
    'all_items' => 'All Items',
    'parent_item' => 'Parent Item',
    'parent_item_colon' => 'Parent Item:',
    'new_item_name' => 'New Item Name',
    'add_new_item' => 'Add New Item',
    'edit_item' => 'Edit Item',
    'update_item' => 'Update Item',
    'view_item' => 'View Item',
    'separate_items_with_commas' => 'Separate items with commas',
    'add_or_remove_items' => 'Add or remove items',
    'choose_from_most_used' => 'Choose from the most used',
    'popular_items' => 'Popular Items',
    'search_items' => 'Search Items',
    'not_found' => 'Not Found',
    'no_terms' => 'No items',
    'items_list' => 'Items list',
    'items_list_navigation' => 'Items list navigation',
);
$args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
);
register_taxonomy( 'artist', array( 'attachment' ), $args );

}
add_action( 'init', 'artist_taxonomy', 0 );

?>