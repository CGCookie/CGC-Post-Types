<?php
/*
 * Plugin Name: CGC Post Types and Taxonomies
 */


function cgc_register_post_types() {

	$announcement_labels = array(
		'name' => _x( 'Announce', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Announcement', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Announcement' ),
		'add_new_item' => __( 'Add New Announcement' ),
		'edit_item' => __( 'Edit Announcement' ),
		'new_item' => __( 'New Announcement' ),
		'view_item' => __( 'View Announcement' ),
		'search_items' => __( 'Search Announcements' ),
		'not_found' =>  __( 'No Announcements found' ),
		'not_found_in_trash' => __( 'No Announcements found in Trash' ),
		'parent_item_colon' => ''
	);

 	$annoucement_args = array(
     	'labels' => $announcement_labels,
     	'singular_label' => __('Announcement'),
     	'public' => true,
     	'show_ui' => true,
	  	'capability_type' => 'post',
     	'hierarchical' => false,
		'exclude_from_search' => true,
     	'rewrite' => array('slug' => 'announcements'),
     	'supports' => array('title', 'editor'),
     );
 	register_post_type('notices',$annoucement_args);

	$note_labels = array(
		'name' => _x( 'Notes', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Note', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Note' ),
		'add_new_item' => __( 'Add New Note' ),
		'edit_item' => __( 'Edit Note' ),
		'new_item' => __( 'New Note' ),
		'view_item' => __( 'View Note' ),
		'search_items' => __( 'Search Notes' ),
		'not_found' =>  __( 'No Notes found' ),
		'not_found_in_trash' => __( 'No Notes found in Trash' ),
		'parent_item_colon' => ''
	);

 	$note_args = array(
     	'labels' => $note_labels,
     	'singular_label' => __('Note'),
     	'public' => true,
     	'show_ui' => true,
	  	'capability_type' => 'post',
		'exclude_from_search' => true,
     	'hierarchical' => false,
     	'rewrite' => array('slug' => 'notes'),
     	'supports' => array('title', 'editor'),
     );
 	register_post_type('notes',$note_args);

	$quote_labels = array(
		'name' => _x( 'Quotes', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Quote', 'post type singular name' ),
		'add_new' => _x( 'Add New Quote', 'Quote' ),
		'add_new_item' => __( 'Add New Quote' ),
		'edit_item' => __( 'Edit Quote' ),
		'new_item' => __( 'New Quote' ),
		'view_item' => __( 'View Quote' ),
		'search_items' => __( 'Search Quotes' ),
		'not_found' =>  __( 'No Quotes found' ),
		'not_found_in_trash' => __( 'No Quotes found in Trash' ),
		'parent_item_colon' => ''
	);

 	$quote_args = array(
     	'labels' =>$quote_labels,
     	'singular_label' => __('Quote'),
     	'public' => true,
     	'show_ui' => true,
	  	'capability_type' => 'post',
		'exclude_from_search' => true,
     	'hierarchical' => false,
     	'rewrite' => array('slug' => 'quotes'),
     	'supports' => array('title', 'editor'),
     );
 	register_post_type('quotes',$quote_args);

	/* setup post types for main CGC hub only */

	if(is_main_site()) {

		$team_labels = array(
			'name' 				=> _x( 'Team', 'post type general name' ),
			'singular_name'		=> _x( 'Team Member', 'post type singular name' ),
			'add_new' 			=> _x( 'Add New', 'Team Member'),
			'add_new_item' 		=> __( 'Add New Team Member '),
			'edit_item' 		=> __( 'Edit Team Member '),
			'new_item' 			=> __( 'New Team Member '),
			'view_item' 		=> __( 'View Team Member '),
			'search_items' 		=> __( 'Search Team '),
			'not_found' 		=>  __( 'No Team Member found' ),
			'not_found_in_trash'=> __( 'No Team found in Trash' ),
			'parent_item_colon' => ''
		);

		$team_args = array(
			'labels' 			=> $team_labels,
			'singular_label' 	=> __('Team Member'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'team-members', 'with_front' => true ),
			'supports' 			=> array('title','thumbnail','revisions'),
			'menu_position' 	=> 5
		 );
		 register_post_type('team',$team_args);


		$testimonial_labels = array(
			'name' 				=> _x( 'Testimonials', 'post type general name' ),
			'singular_name'		=> _x( 'Testimonial', 'post type singular name' ),
			'add_new' 			=> _x( 'Add New', 'Testimonial'),
			'add_new_item' 		=> __( 'Add New Testimonial '),
			'edit_item' 		=> __( 'Edit Testimonial '),
			'new_item' 			=> __( 'New Testimonial'),
			'view_item' 		=> __( 'View Testimonial'),
			'search_items' 		=> __( 'Search Testimonials '),
			'not_found' 		=>  __( 'No Testimonial found' ),
			'not_found_in_trash'=> __( 'No Testimonials found in Trash' ),
			'parent_item_colon' => ''
		);

		$testimonial_args = array(
			'labels' 			=> $testimonial_labels,
			'singular_label' 	=> __('Testimonial'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> false,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'testimonials', 'with_front' => true ),
			'supports' 			=> array('title','editor','revisions'),
			'menu_position' 	=> 5
		 );
		register_post_type('testimonials', $testimonial_args);

	} else {
		// non hub site post types


		//TO DO: remove series post type when ready

		$series_labels = array(
			'name' 				=> _x( 'Series', 'post type general name' ),
			'singular_name'		=> _x( 'Series', 'post type singular name' ),
			'add_new' 			=> _x( 'Add New', 'Series'),
			'add_new_item' 		=> __( 'Add New Series '),
			'edit_item' 		=> __( 'Edit Series '),
			'new_item' 			=> __( 'New Series '),
			'view_item' 		=> __( 'View Series '),
			'search_items' 		=> __( 'Search Series '),
			'not_found' 		=>  __( 'No Series found' ),
			'not_found_in_trash'=> __( 'No Series found in Trash' ),
			'parent_item_colon' => ''
		);

		$series_args = array(
			'labels' 			=> $series_labels,
			'singular_label' 	=> __('Series'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'cgc-series'),
			'supports' 			=> array('title','editor','revisions', 'thumbnail', 'comments', 'author'),
			'taxonomies'		=> array('post_tag'),
			'menu_position' 	=> 5
		);
		register_post_type('cgc_series', $series_args);

		$type_labels = array(
			'name' => _x( 'Type', 'taxonomy general name', 'edd' ),
			'singular_name' => _x( 'Type', 'taxonomy singular name', 'edd' ),
			'search_items' =>  __( 'Search Type' ),
			'all_items' => __( 'All Type' ),
			'parent_item' => __( 'Parent Type' ),
			'parent_item_colon' => __( 'Parent Type:' ),
			'edit_item' => __( 'Edit Type' ),
			'update_item' => __( 'Update Type' ),
			'add_new_item' => __( 'Add New Type' ),
			'new_item_name' => __( 'New Type Name' ),
			'menu_name' => __( 'Type' ),
		);

		register_taxonomy('series_type', array('cgc_series'), array(
			'hierarchical' => true,
			'labels' => $type_labels,
			'show_ui' => true,
			'query_var' => 'series-type',
			'rewrite' => array( 'slug' => 'series-type' )
		));

	}


	$courses_labels = array(
		'name' 				=> _x( 'Courses', 'post type general name' ),
		'singular_name'		=> _x( 'Course', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Courses'),
		'add_new_item' 		=> __( 'Add New Course'),
		'edit_item' 		=> __( 'Edit Course'),
		'new_item' 			=> __( 'New Course'),
		'view_item' 		=> __( 'View Course'),
		'search_items' 		=> __( 'Search Courses '),
		'not_found' 		=>  __( 'No Courses found' ),
		'not_found_in_trash'=> __( 'No Courses found in Trash' ),
		'parent_item_colon' => ''
	);

	$courses_args = array(
		'labels' 			=> $courses_labels,
		'singular_label' 	=> __('Course'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> true,
		'hierarchical' 		=> false,
		'rewrite' 			=> array('slug' => 'cgc-courses', 'with_front' => false ),
		'supports' 			=> array('title','editor','revisions', 'thumbnail', 'comments', 'author'),
		'taxonomies'		=> array('category', 'post_tag'),
		'menu_position' 	=> 5
	);
	register_post_type('cgc_courses', $courses_args);

	$type_labels = array(
		'name' => _x( 'Difficulty', 'taxonomy general name', 'edd' ),
		'singular_name' => _x( 'Difficultity', 'taxonomy singular name', 'edd' ),
		'search_items' =>  __( 'Search Type' ),
		'all_items' => __( 'All Difficulties' ),
		'parent_item' => __( 'Parent Difficulty' ),
		'parent_item_colon' => __( 'Parent Difficulty:' ),
		'edit_item' => __( 'Edit Difficulty' ),
		'update_item' => __( 'Update Difficulty' ),
		'add_new_item' => __( 'Add New Difficulty' ),
		'new_item_name' => __( 'New Difficulty Name' ),
		'menu_name' => __( 'Difficulty' ),
	);


	register_taxonomy('difficulty', array('post','cgc_courses', 'cgc_lessons'), array(
		'hierarchical' => true,
		'labels' => $type_labels,
		'show_ui' => true,
		'query_var' => 'difficulty',
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'difficulty' )
	));

	$type_labels = array(
		'name' => _x( 'Software Version', 'taxonomy general name', 'edd' ),
		'singular_name' => _x( 'Difficultity', 'taxonomy singular name', 'edd' ),
		'search_items' =>  __( 'Search Type' ),
		'all_items' => __( 'All Versions' ),
		'parent_item' => __( 'Parent Version' ),
		'parent_item_colon' => __( 'Parent Version:' ),
		'edit_item' => __( 'Edit Version' ),
		'update_item' => __( 'Update Version' ),
		'add_new_item' => __( 'Add New Version' ),
		'new_item_name' => __( 'New Version Name' ),
		'menu_name' => __( 'Software Version' ),
	);

	register_taxonomy('software_version', array('post','cgc_courses', 'cgc_lessons'), array(
		'hierarchical' => true,
		'labels' => $type_labels,
		'show_ui' => true,
		'query_var' => 'software-version',
		'rewrite' => array( 'slug' => 'software-version' )
	));

	$lessons_labels = array(
		'name' 				=> _x( 'Lessons', 'post type general name' ),
		'singular_name'		=> _x( 'Lesson', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Lessons'),
		'add_new_item' 		=> __( 'Add New Lessons'),
		'edit_item' 		=> __( 'Edit Lesson'),
		'new_item' 			=> __( 'New Lesson'),
		'view_item' 		=> __( 'View Lesson'),
		'search_items' 		=> __( 'Search Lessons'),
		'not_found' 		=>  __( 'No Lessons found' ),
		'not_found_in_trash'=> __( 'No Lessons found in Trash' ),
		'parent_item_colon' => ''
	);


	$lessons_args = array(
		'labels' 			=> $lessons_labels,
		'singular_label' 	=> __('Lesson'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> true,
		'hierarchical' 		=> false,
		'rewrite' 			=> array('slug' => 'lessons'),
		'supports' 			=> array('title','editor','revisions', 'thumbnail', 'comments', 'author'),
		'taxonomies'		=> array('category', 'post_tag'),
		'menu_position' 	=> 5
	);
	register_post_type('cgc_lessons', $lessons_args);

	$type_labels = array(
		'name' => _x( 'Type', 'taxonomy general name', 'edd' ),
		'singular_name' => _x( 'Type', 'taxonomy singular name', 'edd' ),
		'search_items' =>  __( 'Search Type' ),
		'all_items' => __( 'All Type' ),
		'parent_item' => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item' => __( 'Edit Type' ),
		'update_item' => __( 'Update Type' ),
		'add_new_item' => __( 'Add New Type' ),
		'new_item_name' => __( 'New Type Name' ),
		'menu_name' => __( 'Type' ),
	);

	register_taxonomy('lessons_type', array('cgc_lessons'), array(
		'hierarchical' => true,
		'labels' => $type_labels,
		'show_ui' => true,
		'query_var' => 'lessons-type',
		'rewrite' => array( 'slug' => 'lessons-type' )
	));

	$resource_labels = array(
		'name' 				=> _x( 'Resources', 'post type general name' ),
		'singular_name'		=> _x( 'Resource', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Resources'),
		'add_new_item' 		=> __( 'Add New Resource'),
		'edit_item' 		=> __( 'Edit Resource'),
		'new_item' 			=> __( 'New Resource'),
		'view_item' 		=> __( 'View Resource'),
		'search_items' 		=> __( 'Search Resources '),
		'not_found' 		=>  __( 'No Resources found' ),
		'not_found_in_trash'=> __( 'No Resources found in Trash' ),
		'parent_item_colon' => ''
	);

	$resources_args = array(
		'labels' 			=> $resource_labels,
		'singular_label' 	=> __('Resource'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> true,
		'hierarchical' 		=> false,
		'rewrite' 			=> array('slug' => 'resource'),
		'supports' 			=> array('title','editor','revisions', 'thumbnail', 'author')
	);
	register_post_type('cgc_resource', $resources_args);

	$resource_folder_labels = array(
		'name' 				=> _x( 'Resource Folders', 'post type general name' ),
		'singular_name'		=> _x( 'Resource Folder', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Resource Folders'),
		'add_new_item' 		=> __( 'Add New Resource'),
		'edit_item' 		=> __( 'Edit Resource'),
		'new_item' 			=> __( 'New Resource'),
		'view_item' 		=> __( 'View Resource'),
		'search_items' 		=> __( 'Search Resources '),
		'not_found' 		=>  __( 'No Resources found' ),
		'not_found_in_trash'=> __( 'No Resources found in Trash' ),
		'parent_item_colon' => ''
	);

	$resource_folders_args = array(
		'labels' 			=> $resource_folder_labels,
		'singular_label' 	=> __('Resource Folder'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> true,
		'hierarchical' 		=> false,
		'rewrite' 			=> array('slug' => 'resource-folder'),
		'supports' 			=> array('title','editor','revisions', 'thumbnail', 'author')
	);
	register_post_type('cgc_resource_folder', $resource_folders_args);


}
add_action('init', 'cgc_register_post_types');

function cgc_set_default_difficulty( $post_id, $post ) {
    if ( 'publish' === $post->post_status && ( $post->post_type === 'cgc_courses' || $post->post_type === 'cgc_lessons' || $post->post_type === 'post' ) ) {
        $defaults = array(
            'difficulty' => array( 'intermediate' )
            //'your_taxonomy_id' => array( 'your_term_slug', 'your_term_slug' )
            );
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( (array) $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy );
            if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
                wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
            }
        }
    }
}
/*add_action( 'save_post', 'cgc_set_default_difficulty', 100, 2 );
*/
function cgc_post_type_relations() {

	if( ! function_exists( 'p2p_register_connection_type' ) )
		return;

	p2p_register_connection_type( array(
		'name' => 'lessons_to_courses',
		'from' => 'cgc_lessons',
		'to' => 'cgc_courses',
		'sortable' => 'any'
	) );

	p2p_register_connection_type( array(
		'name' => 'resources_to_folders',
		'from' => 'cgc_resource',
		'to' => 'cgc_resource_folder',
		'sortable' => 'any'
	) );
}

add_action( 'p2p_init', 'cgc_post_type_relations' );
