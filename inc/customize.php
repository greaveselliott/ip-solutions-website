<?php
/**
 * Configuring Theme Options Menu
 */

// Remove call to parent theme options
remove_action( 'customize_register', 'twentyfifteen_customize_register', 11 );
//remove_action( $tag, $function_to_remove, $priority );
function wptuts_theme_customizer( $wp_customize ) {
    // add section
    $wp_customize->add_section( 'eemjii_company_details', array(
        'title' => "IP Solutions: Contact Info", // The title of section
        'description' => 'Updating following Contact Information which is used throughout the website', // The description of section
    ) );

    // Add Setting: Telephone
    $wp_customize->add_setting( 'eemjii_option_telephone', array(
        'default' => '0000 000 0000',
        // Let everything else default
    ) );
    // Add Controller: Telephone
    $wp_customize->add_control( 'eemjii_option_telephone', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Main Telephone Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Fax
    $wp_customize->add_setting( 'eemjii_option_fax', array(
        'default' => '0000 000 0000',
        // Let everything else default
    ) );
    // Add Controller: Fax
    $wp_customize->add_control( 'eemjii_option_fax', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Main Fax Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Company Registration Number
    $wp_customize->add_setting( 'eemjii_option_company_no', array(
        'default' => '0000000000',
        // Let everything else default
    ) );
    // Add Controller: Company Registration Number
    $wp_customize->add_control( 'eemjii_option_company_no', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Company Registration Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );

    // Add Setting: Company VAT Registration Number
    $wp_customize->add_setting( 'eemjii_option_vat_no', array(
        'default' => '00000000',
        // Let everything else default
    ) );
    // Add Controller: Company VAT Registration Number
    $wp_customize->add_control( 'eemjii_option_vat_no', array(
        // wptuts_welcome_text is a id of setting that this control handles
        'label' => 'Company VAT Registration Number',
        // 'type' =>, // Default is "text", define the content type of setting rendering.
        'section' => 'eemjii_company_details', // id of section to which the setting belongs
        // Let everything else default
    ) );
}

add_action( 'customize_register', 'wptuts_theme_customizer', 11 );