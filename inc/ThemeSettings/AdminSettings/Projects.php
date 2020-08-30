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

class Projects extends SettingFactory
{

    public function section(){
        return array(
            'id'          => 'projects_setting',
            'title' => __('Projects', 'bookawesome'),
            'icon'  => '<div class="dashicons dashicons-admin-generic"></div>'
        );
    }

    public function settings(){
        $this->general();
        return $this->fieldsSettings;
    }

    public function general() {
        $settings = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'projects_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}