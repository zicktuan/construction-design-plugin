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

class Footer extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'footer_setting',
	        'title' => __('Footer', 'bookawesome'),
            'icon'  => '<div class="dashicons dashicons-admin-generic"></div>'
	    );
	}

	public function settings(){
        $this->general();
        return $this->fieldsSettings;
	}

	public function general() {
	    $setting = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'footer_setting',
            ],
            [
                'id'      => 'awe_footer_logo',
                'label'   => __( 'Footer logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'footer_setting',
            ],
            [
                'id'      => 'awe_footer_copyright',
                'label'   => __('Footer copyright', 'bookawesome'),
                'type'    => 'text',
                'section' => 'footer_setting',
            ],
        ];
	    $this->setListSettings($setting);
    }
}