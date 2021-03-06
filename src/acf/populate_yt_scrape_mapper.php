<?php

function acf_populate_yt_scrape_mapper_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();

    /**
     * 
     * Version 3 - Cloned Flexible Component version.
     * 
     */
    $choices = get_field('yt_mapper_group', 'option', true);
    
    if( is_array($choices)  && is_array($choices['yt_mapper_instance']) ) {
        
        foreach( $choices['yt_mapper_instance'] as $choice ) {
            
            $choice_name = $choice['yt_mapper_id'];
            $field['choices'][ $choice_name ] = $choice_name;

        }
        
    }


    
    // Add 'none'
    $field['choices']['none'] = 'none';
    
    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=yt_scrape_mapper', 'acf_populate_yt_scrape_mapper_choices');