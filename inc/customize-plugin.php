<?php
/*
Plugin Name: TJN Typography Control Demo
Author: Tom J Nowell
Version: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'customize_register', 'tjn_customize_register' );
function tjn_customize_register( $wp_customize ) {
    if ( ! isset( $wp_customize ) ) {
        return;
    }
    if ( class_exists( 'WP_Customize_Control' ) ) {

        class Toms_Control_Builder extends WP_Customize_Control {

            public $html = array();

            public function build_field_html( $key, $setting ) {
                $value = '';
                if ( isset( $this->settings[ $key ] ) )
                    $value = $this->settings[ $key ]->value();
                $this->html[] = '<div><input type="text" value="'.$value.'" '.$this->get_link( $key ).' /></div>';
            }

            public function render_content() {
                $output =  '<label>' . $this->label .'</label>';
                echo $output;
                foreach( $this->settings as $key => $value ) {
                    $this->build_field_html( $key, $value );
                }
                echo implode( '', $this->html );
            }

        }

        $settings = array(
                        array(
                            'default'           => '',
                            'type'              => 'theme_mod',
                            'capability'        => 'edit_theme_options'
                        ),array(
                            'default'           => '',
                            'type'              => 'theme_mod',
                            'capability'        => 'edit_theme_options'
                        ),array(
                            'default'           => '',
                            'type'              => 'theme_mod',
                            'capability'        => 'edit_theme_options'
                        )
                    );

//        $settings_id = array(
//            $this->1,
//            $this->2,
//            $this->3,
//        );

        $section = new TJN_Customizer_Section( $wp_customize, 'test', 'Test', 11 );
        $field = new TJN_Customizer_Field( 'testfield','','Test Control' );
        $field->add_to_section( $wp_customize, $section, $settings);
    }
}


class TJN_Customizer_Section {
    public $name='';
    public $pretty_name='';
    public function __construct( WP_Customize_Manager $wp_customize, $name, $pretty_name, $priority=25 ) {
        $this->name = $name;
        $this->pretty_name = $pretty_name;

        $wp_customize->add_section( $this->getName(), array(
            'title'          => $pretty_name,
            'priority'       => $priority,
            'transport'      => 'refresh'
        ) );
    }

    public function getName() {
        return $this->name;
    }
    public function getPrettyName() {
        return $this->pretty_name;
    }
}

class TJN_Customizer_Field {

    private $name;
    private $default;
    private $pretty_name;

    public function __construct( $name, $default, $pretty_name ) {
        $this->name = $name;
        $this->default = $default;
        $this->pretty_name = $pretty_name;
    }

    public function add_to_section( WP_Customize_Manager $wp_customize, TJN_Customizer_Section $section, $settings ) {

        foreach ($settings as $setting) {
            // adding settings to theme customize section
            $wp_customize->add_setting(
                $this->name,
                $setting
                /*
                    add_setting() options - accepts an associative array
                    for example:
                    ----------------------------------------------------
                    'default'        => $this->default,
                    'type'           => 'theme_mod',
                    'capability'     => 'edit_theme_options'
                */
            );
        }
//        $wp_customize->add_setting( $this->name, array(
//            'default'        => $this->default,
//            'type'           => 'theme_mod',
//            'capability'     => 'edit_theme_options'
//        ) );
//        $wp_customize->add_setting( 'moomins', array(
//            'default'        => $this->default,
//            'type'           => 'theme_mod',
//            'capability'     => 'edit_theme_options'
//        ) );
//        $wp_customize->add_setting( 'papa', array(
//            'default'        => $this->default,
//            'type'           => 'theme_mod',
//            'capability'     => 'edit_theme_options'
//        ) );
        $control = new Toms_Control_Builder(
            $wp_customize,
            $this->name, array(
                'label'    => $this->pretty_name,
                'section'  => $section->getName(),
                'settings'   => array (
                    $this->name
                )
            )
        );
        $wp_customize->add_control( $control );
    }
}