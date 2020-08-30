<?php

namespace MyPlugin\PostType;

class ProjectsPostType extends AbstractPostType {

    protected $posType = 'awe_projects_pt';

    public function __construct() {
        parent::__construct();
    }

    /**
     * Handle add metabox for post type.
     * @return void
     */
    public function metaBox() {
//        add_action('add_meta_boxes', array(new TourMetaBox($this), 'register'));
//        add_action('add_meta_boxes', array(new TourGalleryMetaBox($this), 'register'));
    }

    public function labels() {
        return array(
            'name'                   => _x('Awe Projects', 'Projects General Name', 'bookawesome'),
            'singular_name'          => _x('Awe Project', 'Awe Projects Singular Name', 'bookawesome'),
            'menu_name'              => __('Awe Projects', 'bookawesome'),
            'name_admin_bar'         => __('Awe Projects', 'bookawesome'),
            'archives'               => __('Awe Projects Archives', 'bookawesome'),
            'attributes'             => __('Awe Projects Attributes', 'bookawesome'),
            'parent_item_colon'      => __('Parent Awe Projects:', 'bookawesome'),
            'all_items'              => __('All Projects', 'bookawesome'),
            'add_new_item'           => __('Add New Awe Projects', 'bookawesome'),
            'add_new'                => __('Add New', 'bookawesome'),
            'new_item'               => __('New Awe Projects', 'bookawesome'),
            'edit_item'              => __('Edit Awe Projects', 'bookawesome'),
            'update_item'            => __('Update Awe Projects', 'bookawesome'),
            'search_items'           => __('Search Awe Projects', 'bookawesome'),
            'not_found'              => __('Not found', 'bookawesome'),
            'not_found_in_trash'     => __('Not found in Trash', 'bookawesome'),
            'featured_image'         => __('Featured Image', 'bookawesome'),
            'set_featured_image'     => __('Set featured image', 'bookawesome'),
            'remove_featured_image'  => __('Remove featured image', 'bookawesome'),
            'use_featured_image'     => __('Use as featured image', 'bookawesome'),
            'insert_into_item'       => __('Insert into projects', 'bookawesome'),
            'uploaded_to_this_item'  => __('Uploaded to this awe projects', 'bookawesome'),
            'items_list'             => __('Awe Projects list', 'bookawesome'),
            'items_list_navigation'  => __('Awe Projects list navigation', 'bookawesome'),
            'filter_items_list'      => __('Filter awe projects list', 'bookawesome'),
        );
    }

    public function argsRegister() {

        return array(
            'label'                  => __('Awe Projects', 'bookawesome'),
            'description'            => __('Awe Projects Description', 'bookawesome'),
            'rewrite'                => array('slug' => "projects"),
            'labels'                 => $this->labels(),
            'supports'               => [ 'title', 'editor', 'thumbnail' ],
            'hierarchical'           => false,
            'public'                 => true,
            'show_ui'                => true,
            'show_in_admin_bar'      => true,
            'show_in_nav_menus'      => true,
            'can_export'             => true,
            'has_archive'            => true,
            'exclude_from_search'    => false,
            'publicly_queryable'     => true,
            'capability_type'        => 'page',
        );
    }

    public function postTypeName() {
        return $this->posType;
    }

}
