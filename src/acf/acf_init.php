<?php

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                               Include ACF                               │
//  └─────────────────────────────────────────────────────────────────────────┘
// require __DIR__.'/include_acf.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │               The ACF Page for YouTube Scraper Settings                 │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/options_page.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                          The ACF Dashboard                              │
//  └─────────────────────────────────────────────────────────────────────────┘
// require __DIR__.'/dashboard.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                      The ACF import/export tab page                     │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/import_export_page.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │               Style settings for  ACF Page for Scraper                  │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/style_admin.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │               Only run when the UPDATE button is clicked                │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/on_update.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │            Populate all of the 'select' types automatically             │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/populate_yt_filter_catalog.php';

require __DIR__.'/populate_yt_filter.php';

require __DIR__.'/populate_yt_housekeep_schedule.php';

require __DIR__.'/populate_yt_import_post_type.php';

require __DIR__.'/populate_yt_import_taxonomy_type.php';

require __DIR__.'/populate_yt_mapper_transform.php';

require __DIR__.'/populate_yt_scrape_auth.php';

require __DIR__.'/populate_yt_scrape_filter.php';

require __DIR__.'/populate_yt_scrape_import.php';

require __DIR__.'/populate_yt_scrape_mapper.php';

require __DIR__.'/populate_yt_scrape_schedule.php';

require __DIR__.'/populate_yt_scrape_search.php';

require __DIR__.'/populate_yt_search_type.php';

require __DIR__.'/populate_yt_transform_catalog.php';

require __DIR__.'/populate_yt_transform.php';
