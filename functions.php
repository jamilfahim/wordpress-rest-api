<?php
/**
 * WordPress rest api
 *
 */
add_action('rest_api_init', function(){

	register_rest_route('softtechit/v1', '/posts/(?P<id>\d+)', array( 
		'methods' => 'GET',
		'callback' => function( WP_REST_Request $request){
	
			$id =$request->get_param('id');
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'p' => $id,   // id of the post you want to query
		  );
			$query = new WP_Query( $args );

			return $query;
	
		}
	));


});
