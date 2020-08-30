<?php
namespace MyPlugin\PostType;

//use MyPlugin\PostType\MetaBox\Post\PostMetaBox;
use MyPlugin\PostType\ProjectsPostType;
use MyPlugin\PostType\ServicesPostType;

/**
 * @author lookawesome team
 * @version 1.0
 * @package PostType
 * 
 * Register post type for theme designer
 */
class PostTypeInit {

	public function __construct(){
	    new ProjectsPostType();
	    new ServicesPostType    ();
//        add_action( 'add_meta_boxes', array(new PostMetaBox($this), 'register') );
	}

    public function register(){

    }
}