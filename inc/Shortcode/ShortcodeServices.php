<?php
namespace MyPlugin\Shortcode;

class ShortcodeServices extends AbstractShortcode
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
        return 'awe_services';
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
        include $this->parent->locateTemplate('shortcode-services.tpl.php');
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
            'post_type'      => 'awe_services_pt'
        );
        $listProjects = get_posts( $args );
//        print_r($listProjects);
        $argsPost = [];
        foreach ($listProjects as $value) {
            $tmp          = [];
            $tmp['label'] = $value->post_title;
            $tmp['value'] = $value->ID;
            $argsPost[]   = $tmp;
        }


        $params = array(
//            array(
//                'type'       => 'attach_image',
//                'param_name' => 'las_about_image',
//                'heading'    => esc_html__('Background', 'bookawesome')
//            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_project_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_project_desc',
                'heading'    => esc_html__('Description', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_project_btn',
                'heading'    => esc_html__('Button name', 'bookawesome'),
                'value'      => 'View Services'
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_project_url',
                'heading'    => esc_html__('Url Button', 'bookawesome'),
                'value'      => '#'
            ),
            array(
                'type'       => 'autocomplete',
                'param_name' => 'featured_tour',
                'heading'    => esc_html__('Featured tours', 'bookawesome'),
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
            'name'        => esc_html__('Services', 'bookawesome'),
            'description' => esc_html__('Services', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
