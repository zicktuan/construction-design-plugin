<?php
namespace MyPlugin\Shortcode;

class ShortcodeProcess extends AbstractShortcode
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
        return 'awe_process';
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
            include $this->parent->locateTemplate('shortcode-process.tpl.php');
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
                'type'       => 'param_group',
                'param_name' => 'items',
                'heading'    => esc_html__( 'Tabs', 'bookawesome' ),
                'params'     => array(
                    array(
                        'type'       => 'textfield',
                        'param_name' => 'title',
                        'heading'    => esc_html__('Title', 'bookawesome')
                    ),
                    array(
                        'type'       => 'attach_images',
                        'param_name' => 'awe_projects_item_bg',
                        'heading'    => esc_html__('Background', 'bookawesome')
                    )
                )
            )
        );

        return array(
            'name'        => esc_html__('Process', 'bookawesome'),
            'description' => esc_html__('Process', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
