<?php 
/**
* Plugin Name: Sedoo - uuid page plugin
* Plugin URI : https://github.com/sedoo/sedoo-wppl-uuid-parameter-page
* Description: Plugin pour appeler les fiches projets
* Author: Pierre VERT
* Version: 0.1.0
* GitHub Plugin URI: sedoo/sedoo-wppl-uuid-parameter-page
* GitHub Branch:     master
*/

// include 'inc/config.php';


function sedoo_uuidparameterpage_plugin_init(){

if ($_SERVER['QUERY_STRING']) {


	echo "TOTO";
	var_dump($_SERVER['QUERY_STRING']);
	/*
	* REGISTER TPL SINGLE
	*/
	// add_filter ( 'single_template', 'sedoo_uuid_page_single' );
	// function sedoo_uuid_page_single($single_template) {
	// 	global $post;
		
	// 	// if ($post->post_type == 'uuid-page') {
	// 		// $single_template = plugin_dir_path ( __FILE__ ) . 'single-uuid-page.php';
	// 		$single_template = plugin_dir_path ( __FILE__ ) . 'page-projectuuid.php';
	// 	// }
	// 	return $single_template;
	// }

	function sedoo_uuid_page_single( $single_template )
	{
		$object = get_queried_object();
		var_dump($object);
		$single_postName_template = locate_template("tpl-projectuuid.php");
		if( file_exists( $single_postName_template ) )
		{
			return $singlepostName_template;
		} else {
			echo "<h1>BAD</h1>";
			return $single_template;
		}
	}
	add_filter( 'single_template', 'sedoo_uuid_page_single');

}


}
add_action('plugins_loaded', 'sedoo_uuidparameterpage_plugin_init');


/*

<script type="text/javascript" component="aeris-data/aeris-commons-components-vjs@latest" src="https://rawgit.com/aeris-data/aeris-component-loader/master/aerisComponentLoader.js" ></script>
<script type="text/javascript" component="aeris-data/aeris-metadata-components-vjs@latest" src="https://rawgit.com/aeris-data/aeris-component-loader/master/aerisComponentLoader.js" ></script>

	<aeris-metadata-synthesis identifier="8d872e51-7a12-40fb-884b-db86ea6fa063" lang="fr"/>

*/