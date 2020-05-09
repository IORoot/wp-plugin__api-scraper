<?php

function my_acf_admin_head() {
    ?>
    <style type="text/css">

        /* scrape tab button */
        [data-key="field_5ea14187d975d"] { background-color: #38EF7D !important; color: #242424 !important;}

        /* Transform tab button */
        [data-key="field_5ea487e0ea984"] { background-color: #53A5E3 !important; color: #242424 !important;}

        /* Schedules tab button */
        /* [data-key="field_5ead15bd2b61f"] { background-color: #53A5E3 !important; color: #242424 !important;} */
        
        /* debug tab button */
        [data-key="field_5ea6b0d0570f2"] { background-color: #E34F65 !important; color: #242424 !important;}
        
        /* housekeep tab button */
        [data-key="field_5eaed53f25def"] { background-color: #E86546 !important; color: #242424 !important;}

        /* debug textbox */
        #acf-field_5ea6b0e2570f3{
            background-color: #424242;
            color: #38EF7D;
            white-space: nowrap;
            overflow: auto;
            font-family: monospace;
        }

        /** 
         * grouped textareas
         */
        #acf-field_5eb523d5314f8-field_5eaede8dcb4a1,
        #acf-field_5eb523a5314f6-field_5eaa7976b69ac,
        #acf-field_5eb5236d314f4-field_5ea6f034f95e7,
        #acf-field_5eb52314314f1-field_5ea6effff95e6,
        #acf-field_5eb51c1de7af6-field_5ea6ef88f95e5,
        #acf-field_5eaa7abce8e7c-field_5ea6ef88f95e5
        {
            background-color: #424242;
            color: #38EF7D;
            white-space: nowrap;
            overflow: auto;
            font-family: monospace;
        }

        .acf-table>tbody>tr:nth-child(odd) td {background: #fafafa } 
        .acf-table>tbody>tr:nth-child(even) td {background: #F2F9FF } 
        
        .-collapsed .-collapsed-target {
            width: 100% !important;
        }
        .-collapsed .-collapsed-target input {
            text-align: center;
        }
    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');