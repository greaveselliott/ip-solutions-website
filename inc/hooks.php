<?php

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');

// Change excerpt character length
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove excerpt more string
function sbt_auto_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'sbt_auto_excerpt_more', 20 );

// Removes 'Continue' reading from the blog post excerpt
function sbt_custom_excerpt_more( $output ) {
    return preg_replace('/<a[^>]+>Continue reading.*?<\/a>/i','',$output);
}
add_filter( 'get_the_excerpt', 'sbt_custom_excerpt_more', 20 );

// Gravity Form
// Update redirect URL
add_filter("gform_confirmation", "custom_confirmation", 10, 4);

function custom_confirmation($confirmation, $form, $lead, $ajax){
    // set cookie for 1 day
    setcookie("IPSolutions_clientEmailProvided", 1, time()+86400);

    $url = get_permalink();
    if($form["id"] == "4"){
        $confirmation = array("redirect" =>$url);
    }
    return $confirmation;
}