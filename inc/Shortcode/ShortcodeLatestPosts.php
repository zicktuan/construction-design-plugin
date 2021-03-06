<?php
namespace MyPlugin\Shortcode;

class ShortcodeLatestPosts extends AbstractShortcode
{
    public function __construct($self = null) {
        $this->parent = $self;
        add_shortcode($this->get_name(), array($this, 'render'));
        vc_lean_map($this->get_name(), array($this, 'map'));
    }

    /**
     * Get ShortCode name.
     *
     * @return string
     */
    public function get_name() {
        return 'awe_latest_post';
    }

    /**
     * ShortCode handler.
     *
     * @param array $atts ShortCode attributes.
     *
     * @return string ShortCode output.
     */
    public function render($atts) {
        $atts = vc_map_get_attributes($this->get_name(), $atts);
        $atts = array_map('trim', $atts);

        ob_start();
        include $this->parent->locateTemplate('shortcode-latest-posts.tpl.php');
        return ob_get_clean();
    }

    /**
     * Get shortCode settings.
     *
     * @return array
     *
     * @see vc_lean_map()
     */
    public function map() {
        $args = array(
            'posts_per_page' => -1,
            'post_type'      => 'post'
        );
        $listService = get_posts( $args );
        $argsPost = [];
        foreach ($listService as $value) {
            $tmp          = [];
            $tmp['label'] = $value->post_title;
            $tmp['value'] = $value->ID;
            $argsPost[]   = $tmp;
        }

        $params = array(
            array(
                "type" => "textfield",
                "heading" => __( "Title", "bookawesome" ),
                "param_name" => "awe_latest_post_title",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Url all articles", "bookawesome" ),
                "param_name" => "awe_latest_post_url",
                'std'   => '#'
            ),
            array(
                'type'       => 'autocomplete',
                'param_name' => 'awe_latest_post',
                'heading'    => esc_html__('Posts', 'bookawesome'),
                'settings'   => array(
                    'multiple'       => true,
                    'sortable'       => true,
                    'min_length'     => 1,
                    'no_hide'        => true,
                    'unique_values'  => true,
                    'display_inline' => true,
                    'values'         => $argsPost
                ),
                'save_always' => true,
            ),
        );

        return array(
            'name'        => esc_html__('Latest Posts', 'bookawesome'),
            'description' => esc_html__('Latest Posts', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
