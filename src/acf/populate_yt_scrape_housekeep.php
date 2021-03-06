<?php

function acf_populate_yt_scrape_housekeep_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
    
    // get the textarea value from options page without any formatting
    $choices = get_field('yt_housekeep_group_yt_housekeep_instance', 'option', true);
    
    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $choice_name = $choice['yt_housekeep_id'];
            $field['choices'][ $choice_name ] = $choice_name;
            
        }
        
    }
    
    // Add 'none'
    $field['choices']['none'] = 'none';
    
    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=yt_scrape_housekeep', 'acf_populate_yt_scrape_housekeep_choices');