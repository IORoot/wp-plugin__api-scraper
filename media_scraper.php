<?php

/*
 * @package   YouTube Scraper
 * @author    Andy Pearson <andy@londonparkour.com>
 * @copyright 2020 LondonParkour
 *
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - YouTube API Scraper V2
 * Plugin URI:        http://londonparkour.com
 * Description:       Query YouTube API, add results to a CPT, output to shortcode.
 * Version:           2.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Text Domain:       andyp-media-api-scraper
 * Domain Path:       /languages
 */

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                      The CPT for YouTube Videos                         │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/cpt/youtube_cpt.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │               The ACF Page for YouTube Scraper Settings                 │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/options_page.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │               Only run when the UPDATE button is clicked                │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/on_update.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │              UPDATE the filters selection box with choices              │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/populate_filter_choices.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                UPDATE the filter layer types with choices               │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/populate_filter_types.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │             UPDATE the post types to list all possibilities             │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/populate_post_types.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │          UPDATE the TAXONOMY types to list all possibilities            │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/populate_tax_types.php';
