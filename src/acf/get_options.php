<?php

namespace yt;

class options
{
    public $sidebar;
    public $scrape;
    public $search;
    public $filter;
    public $transform;
    public $schedule;
    public $housekeep;

    public $auth;
    public $mapper;
    public $import;
    
    public function __construct()
    {
        $this->get_all_options();
        $this->organise_all_scrape_instances();
        $this->unset_variables();

        return $this;
    }


    public function get_all_options()
    {

        // sidebar
        $this->sidebar['saveonly'] = get_field('yt_sidebar_saveonly', 'option');

        // scrape
        $this->get_repeater_options('yt_scrape_instance', 'scrape');

        // auth
        $this->get_repeater_options('yt_auth_instance', 'auth');

        // search
        $this->get_cloned_flexible_content('yt_search_group', 'yt_search_instance', 'search');

        // search substitutions
        $this->get_repeater_options('yt_search_group_yt_search_substitutions', 'substitutions');

        // filters
        $this->get_repeater_options('yt_filter_group_yt_filter_instance', 'filter');

        // mapper
        $this->get_cloned_flexible_content('yt_mapper_group', 'yt_mapper_instance', 'mapper');

        // transforms
        $this->get_repeater_options('yt_mapper_group_yt_transform_instance', 'transform');

        // import
        $this->get_repeater_options('yt_import_group_yt_import_instance', 'import');

        // import
        $this->get_repeater_options('yt_housekeep_group_yt_housekeep_instance', 'housekeep');

        // schedule
        $this->get_repeater_options('yt_schedule_instance', 'schedule');
        
        return $this;
    }


    public function get_cloned_flexible_content($wrapper_group, $flexible_fieldname, $result_parameter)
    {
        $wrapper = get_field($wrapper_group, 'option', true);
    
        if( is_array($wrapper)  && is_array($wrapper[$flexible_fieldname]) ) {
            
            foreach( $wrapper[$flexible_fieldname] as $row ) {
                
                $this->$result_parameter[] = $row;

            }
            
        }
    }


    public function get_repeater_options($repeater_field_name, $result_parameter)
    {
        // If field exists as an option
        if (have_rows($repeater_field_name, 'option')) {

            // Go through all rows of 'repeater' genimage_filters
            while (have_rows($repeater_field_name, 'option')): $row = the_row(true);

            $this->get_repeater_row($row, $result_parameter);

            endwhile;
        }
    }



    public function get_repeater_row($row, $result_parameter)
    {

        $this->$result_parameter[] = $row;

        return $this;
    }



    public function organise_all_scrape_instances()
    {
        foreach ($this->scrape as $id => $scrape_instance) {
            $this->process_scrape_instance($id, $scrape_instance);
        }
    }


    public function process_scrape_instance($id, $scrape_instance)
    {

        foreach ($scrape_instance as $field_name => $field_value) {

            if ($field_name == 'yt_scrape_group') {
                continue;
            }

            $this->process_scrape_field($field_name, $field_value, $id);
        }
    }





    public function process_scrape_field($field_name, $field_value, $id)
    {
        // Pick the correct array. Use the name of the field
        // to assertain the correct array to use.
        // Maybe not the safest way to do this.
        // strip the front part off the field_name to get the array name.
        $array_instance_name = str_replace('yt_scrape_','', $field_name);

        // loop over each field in the array
        // i.e. the 'auth' array.
        foreach ($this->$array_instance_name as $instance) {

            // if the instance ID matches the name of the selection
            // we've specified...
            if ($instance['yt_'.$array_instance_name.'_id'] == $field_value) {

                // Update the 'scrape' array to contain the specific
                // current array instance.
                $this->scrape[$id]['yt_scrape_'.$array_instance_name] = $instance;
            }
        }
    }


    public function unset_variables()
    {

        // we only need the 'scrape' parameter now.
        // unset everything else.
        unset($this->auth);
        unset($this->search);
        unset($this->mapper);
        unset($this->import);
        unset($this->schedule);

        // Keep 'filter' and 'transform' because we need the parameters to use on the mapper filters.
        // see the mapper_item->filter_mapping()

        return;
    }

}
