<?php
namespace MyPlugin\Shortcode;

class ShortcodeClients extends AbstractShortcode
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
        return 'awe_with_clients';
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
        include $this->parent->locateTemplate('shortcode-with-clients.tpl.php');
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
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_client_sub_title',
                'heading'    => esc_html__('Sub Title', 'bookawesome')
            ),
            array(
                'type'       => 'textfield',
                'param_name' => 'awe_client_title',
                'heading'    => esc_html__('Title', 'bookawesome')
            ),
            array(
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'Logos', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'title1',
                        'heading'    => esc_html__('Title1', 'bookawesome')
                    ),
                    array(
                        'type'       => 'attach_image',
                        'param_name' => 'logo1',
                        'heading'    => esc_html__('Logo1', 'bookawesome')
                    ),
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'title2',
                        'heading'    => esc_html__('Title2', 'bookawesome')
                    ),
                    array(
                        'type'       => 'attach_image',
                        'param_name' => 'logo2',
                        'heading'    => esc_html__('Logo2', 'bookawesome')
                    ),
                )
            )
        );

        return array(
            'name'        => esc_html__('With Clients', 'bookawesome'),
            'description' => esc_html__('With Clients', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
