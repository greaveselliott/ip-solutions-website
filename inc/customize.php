<?php
/**
 * Configuring Theme Options Menu
 */
remove_action( 'customize_register', 'twentyfifteen_customize_register', 11 );
//remove_action( $tag, $function_to_remove, $priority );

function eemjii_customize_register( $wp_customize ) {

    // Define Textarea control Class
    class Eemjii_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textfield';
        // Defines how the new control will display as a text area.
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>

        <?php
        }
    }

    // Define Textarea control Class
    class Eemjii_Customize_Input_Text_Control extends WP_Customize_Control {
        public $type = 'textfield';
        // Defines how the new control will display as a text area.
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <input type="text" style="width:100%;" <?php $this->link(); echo esc_attr( $this->value() ); ?>/>
            </label>

        <?php
        }
    }

    // Company Telephone Number
    // -----
    // Adds a setting of default to define the content to be customized.
    $wp_customize->add_setting('company_telephone', array(
        'default' => '0000 000 0000',
    ));
    // Defines the the setting, label, section and content of the custom control.
    $wp_customize->add_control(new Eemjii_Customize_Input_Text_Control($wp_customize, 'company_telephone', array(
        'label' => 'Telephone Number',
        'section' => 'company_info',
        'settings' => 'company_telephone',
        'priority'  => 2
    )));

    // Company Fax Number
    // -----
    // Adds a setting of default to define the content to be customized.
    $wp_customize->add_setting('company_fax', array(
        'default' => '0000 000 0000',
    ));
    // Defines the the setting, label, section and content of the custom control.
    $wp_customize->add_control(new Eemjii_Customize_Input_Text_Control($wp_customize, 'company_fax', array(
        'label'     => 'Fax Number',
        'section'   => 'company_info',
        'settings'  => 'company_fax',
        'priority'  => 2
    )));

    // Company Address
    // -----
    // Adds a setting of default to define the content to be customized.
    $wp_customize->add_setting('company_address', array(
        'default' => 'Enter IP Solution address, separate each line by a comma (,)',
    ));
    // Defines the the setting, label, section and content of the custom control.
    $wp_customize->add_control(new Eemjii_Customize_Textarea_Control($wp_customize, 'company_address', array(
        'label' => 'Address',
        'section' => 'company_info',
        'settings' => 'company_address',
        'priority'  => 3
    )));

    // Company VAT Registration Number
    // -----
    // Adds a setting of default to define the content to be customized.
    $wp_customize->add_setting('company_vat_number', array(
        'default' => '0000 000 0000',
    ));
    // Defines the the setting, label, section and content of the custom control.
    $wp_customize->add_control(new Eemjii_Customize_Input_Text_Control($wp_customize, 'company_vat_number', array(
        'label' => 'Company VAT Number',
        'section' => 'company_info',
        'settings' => 'company_vat_number',
        'priority'  => 5
    )));


    // Company Registration Number
    // -----
    // Adds a setting of default to define the content to be customized.
    $wp_customize->add_setting('company_registration_number', array(
        'default' => '0000 000 0000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    // Defines the the setting, label, section and content of the custom control.
    $wp_customize->add_control(new Eemjii_Customize_Input_Text_Control($wp_customize, 'company_registration_number', array(
        'label'         => __('Company Registration Number', 'twentyfifteen'),
        'description'   => __('Enter IP Solutions UK business registration number.', 'twentyfifteen'),
        'type'          => '',
        'section'       => 'company_info',
        'settings'      => 'company_registration_number',
        'priority'      => 4
    )));

    // Finally, it sets up a section for our content.
    $wp_customize->add_section('company_info' , array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'IP Solutions - Company Information',
            'description'    => '',
        )
    );

}
add_action( 'customize_register', 'eemjii_customize_register' );