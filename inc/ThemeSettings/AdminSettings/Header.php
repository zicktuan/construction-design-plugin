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

class Header extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'header_setting',
			'title' => __('Header', 'bookawesome'),
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
                'section'     => 'header_setting',
            ],
            [
                'id'      => 'awe_header_logo',
                'label'   => __( 'Header logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'header_setting',
            ],
            [
                'id'      => 'awe_header_bg',
                'label'   => __( 'Header Background', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'header_setting',
            ],
            [
                'id'      => 'awe_header_title_bg',
                'label'   => __( 'Header Title Background', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'header_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}