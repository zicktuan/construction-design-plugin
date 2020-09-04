<?php
namespace MyPlugin\Shortcode;

class ShortcodeAbout extends AbstractShortcode
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
        return 'awe_about';
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

        $listItems = vc_param_group_parse_atts( $atts['items'] );

        ob_start();
        include $this->parent->locateTemplate('shortcode-about.tpl.php');
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
        $params = array(
//            array(
//                'type'       => 'attach_images',
//                'param_name' => 'awe_process_bg',
//                'heading'    => esc_html__('Background', 'bookawesome')
//            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_about_sub_title',
                'heading'    => esc_html__('Sub Title', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_about_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'List Item', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'       => 'attach_images',
                        'param_name' => 'bg',
                        'heading'    => esc_html__('Avatar', 'bookawesome')
                    ),
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'name',
                        'heading'    => esc_html__('Name', 'bookawesome')
                    ),
                    array(
                         'type'       => 'textfield',
                         'param_name' => 'specialized',
                         'heading'    => esc_html__('Specialized', 'bookawesome')
                    ),
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'phone',
                        'heading'    => esc_html__('Phone', 'bookawesome')
                    ),
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'email',
                        'heading'    => esc_html__('Email', 'bookawesome')
                    ),
                    array(
                        'type'       => 'param_group',
                        'param_name' => 'items_social',
                        'heading'    => esc_html__( 'Social', 'bookawesome' ),
                        'params'     => array(
                            array(
                                'type'        => 'dropdown',
                                'heading'     => __('Social'),
                                'param_name'  => 'icon',
                                'admin_label' => true,
                                'value'       => array(
                                    'Facebook'       => 'facebook',
                                    'Linkedin'       => 'linkedin',
                                    'Instagram'      => 'instagram',
                                    'Youtube-play'   => 'youtube-play',
                                    'Youtube'        => 'youtube',
                                    'Google-plus'    => 'google-plus',
                                ),
                            ),
                            array(
                                'type'       => 'textfield',
                                'param_name' => 'url',
                                'heading'    => esc_html__('Url', 'bookawesome')
                            ),
                        )
                    )
                )
            )
        );

        return array(
            'name'        => esc_html__('About', 'bookawesome'),
            'description' => esc_html__('About', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
