<?php

namespace MyPlugin\ThemeSettings\AdminSettings;

use MyPlugin\ThemeSettings\SettingFactory;

/**
 * @author lookawesome team
 * @version 1.0
 * @package AdminSettings
 *
 * Setting General theme setting for theme bookawesome
 */

class General extends SettingFactory
{

    public function section(){
        return array(
            'id'          => 'general_setting',
            'title' => __('General Settings', 'bookawesome'),
            'icon'  => '<div class="dashicons dashicons-admin-generic"></div>'
        );
    }

    public function settings(){
        $this->general();
        $this->header();
        $this->footer();
        $this->blog();
        return $this->fieldsSettings;
    }

    public function general() {
        $settings = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_gar_open_time',
                'label'   => __('Opening time', 'bookawesome'),
                'type'    => 'text',
                'std'     => 'Mon-Fri 08:00 - 18:00',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_gar_email',
                'label'   => __('Email', 'bookawesome'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_gar_phone',
                'label'   => __('Phone', 'bookawesome'),
                'type'    => 'text',
                'std'     => '+1 (378) 400-1234',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }

    public function header() {
        $settings = [
            [
                'label'       => __( 'Header', 'bookawesome' ),
                'id'          => 'header_st',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_head_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'       => 'awe_list_bg',
                'label'    => __( 'Background', 'bookawesome' ),
                'type'     => 'list-item',
                'section'  => 'general_setting',
                'settings' => [
                    [
                        'id'    => 'item_bg',
                        'label' => __( 'Background', 'bookawesome' ),
                        'type'  => 'upload'
                    ],
                    [
                        'id'    => 'item_btn_view',
                        'label' => __( 'Button view name', 'bookawesome' ),
                        'type'  => 'text',
                        'desc'  => ' ',
                        'std'   => 'View Service',
                    ],
                    [
                        'id'    => 'item_btn_view_url',
                        'label' => __( 'View Url', 'bookawesome' ),
                        'type'  => 'text',
                        'desc'  => ' ',
                        'std'   => '#',
                    ],
                    [
                        'id'    => 'item_btn_contact',
                        'label' => __( 'Contact', 'bookawesome' ),
                        'type'  => 'text',
                        'desc'  => ' ',
                        'std'   => 'Contact us',
                    ],
                    [
                        'id'    => 'item_btn_contact_url',
                        'label' => __( 'Contact Url', 'bookawesome' ),
                        'type'  => 'text',
                        'desc'  => ' ',
                        'std'   => '#',
                    ],
                ]
            ],
        ];
        $this->setListSettings($settings);
    }

    public function footer() {
        $settings = [
            [
                'label'       => __( 'Footer', 'bookawesome' ),
                'id'          => 'footer_st',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_copyright',
                'label'   => __('Footer copyright', 'bookawesome'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }

    public function blog() {
        $settings = [
            [
                'label'       => __( 'Blog', 'bookawesome' ),
                'id'          => 'blog_st',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_blog_bg',
                'label'   => __('Background', 'bookawesome'),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'blog_title_bg',
                'label'   => __( 'Header Title Background', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'blog_sub_title_bg',
                'label'   => __( 'Sub Title Background', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}