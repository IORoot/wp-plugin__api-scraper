<?php

//  ┌─────────────────────────────────────────────────────────────────────────┐ 
//  │                                                                         │░
//  │                       Youtube Description Hashtag                       │░
//  │                                                                         │░
//  │   This will return only the results with the correct hashtag in them.   │░
//  │                                                                         │░
//  └─────────────────────────────────────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░


class youtube_description_hashtag {

    public $input_stream = [];

    public $filter_value = '';

    public $output_stream = [];

    public function set_stream($input_stream){ $this->input_stream = $input_stream; }

    public function set_value($filter_value){  $this->filter_value = $filter_value; }


    /**
     * filter
     * 
     * Will remove any entry that doesn't have the Hashtag.
     *
     * @param mixed $output_stream
     * @return void
     */
    public function filter(){

        if (!$this->input_stream){ return; }
        
        // Loop through each item.
        foreach ($this->input_stream as $item){

            // What we are searching for.
            $filter_value = '#' . $this->filter_value;

            // Is it in the description?
            $result = strpos($item['description'], $filter_value);

            // If there is a hit, add it to the output array.
            if ($result !== false){
                array_push($this->output_stream, $item);
            }

        }
 
        // Return the output array.
        return $this->output_stream;
    }

}