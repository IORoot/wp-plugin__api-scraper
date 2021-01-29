<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30fd7ec9b8e2598fd2f686f91346eea7
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'yt\\api' => __DIR__ . '/../..' . '/src/api/api.php',
        'yt\\api_list' => __DIR__ . '/../..' . '/src/api/api_list.php',
        'yt\\e' => __DIR__ . '/../..' . '/src/error/e.php',
        'yt\\filter' => __DIR__ . '/../..' . '/src/filter/filter.php',
        'yt\\filter\\format\\instagram' => __DIR__ . '/../..' . '/src/filter/formats/instagram.php',
        'yt\\filter\\ig_account_convert' => __DIR__ . '/../..' . '/src/filter/filters/ig_account_convert.php',
        'yt\\filter\\ig_search_convert' => __DIR__ . '/../..' . '/src/filter/filters/ig_search_convert.php',
        'yt\\filter\\ig_search_top_convert' => __DIR__ . '/../..' . '/src/filter/filters/ig_search_top_convert.php',
        'yt\\filter\\none' => __DIR__ . '/../..' . '/src/filter/filters/none.php',
        'yt\\filter\\remove_array_item_if_regex' => __DIR__ . '/../..' . '/src/filter/filters/remove_array_item_if_regex.php',
        'yt\\filter\\remove_item_if_regex' => __DIR__ . '/../..' . '/src/filter/filters/remove_item_if_regex.php',
        'yt\\filter\\yt_array_front' => __DIR__ . '/../..' . '/src/filter/filters/yt_array_front.php',
        'yt\\filter_group' => __DIR__ . '/../..' . '/src/filter/filter_group.php',
        'yt\\filter_layer' => __DIR__ . '/../..' . '/src/filter/filter_layer.php',
        'yt\\filter_list' => __DIR__ . '/../..' . '/src/filter/filter_list.php',
        'yt\\housekeep' => __DIR__ . '/../..' . '/src/housekeeping/housekeep.php',
        'yt\\housekeep\\bin_all' => __DIR__ . '/../..' . '/src/housekeeping/action/bin_all.php',
        'yt\\housekeep\\bin_posts' => __DIR__ . '/../..' . '/src/housekeeping/action/bin_posts.php',
        'yt\\housekeep\\delete_all' => __DIR__ . '/../..' . '/src/housekeeping/action/delete_all.php',
        'yt\\housekeep\\delete_posts' => __DIR__ . '/../..' . '/src/housekeeping/action/delete_posts.php',
        'yt\\housekeep\\none' => __DIR__ . '/../..' . '/src/housekeeping/action/none.php',
        'yt\\import' => __DIR__ . '/../..' . '/src/import/import.php',
        'yt\\import\\attach' => __DIR__ . '/../..' . '/src/import/attach.php',
        'yt\\import\\downloader' => __DIR__ . '/../..' . '/src/import/downloader.php',
        'yt\\import\\exists' => __DIR__ . '/../..' . '/src/import/exists.php',
        'yt\\import\\image' => __DIR__ . '/../..' . '/src/import/create_image.php',
        'yt\\import\\meta' => __DIR__ . '/../..' . '/src/import/create_meta.php',
        'yt\\import\\post' => __DIR__ . '/../..' . '/src/import/create_post.php',
        'yt\\import\\real_media_library' => __DIR__ . '/../..' . '/src/import/real_media_library.php',
        'yt\\import\\taxonomy' => __DIR__ . '/../..' . '/src/import/create_taxonomy.php',
        'yt\\instagram\\request\\multi_accounts' => __DIR__ . '/../..' . '/src/api/instagram/requests/multi_accounts.php',
        'yt\\instagram\\request\\tag_search' => __DIR__ . '/../..' . '/src/api/instagram/requests/tag_search.php',
        'yt\\interfaces\\filterInterface' => __DIR__ . '/../..' . '/src/interfaces/filterInterface.php',
        'yt\\interfaces\\housekeepInterface' => __DIR__ . '/../..' . '/src/interfaces/housekeepInterface.php',
        'yt\\interfaces\\requestInterface' => __DIR__ . '/../..' . '/src/interfaces/requestInterface.php',
        'yt\\interfaces\\tokenInterface' => __DIR__ . '/../..' . '/src/interfaces/tokenInterface.php',
        'yt\\interfaces\\transformInterface' => __DIR__ . '/../..' . '/src/interfaces/transformInterface.php',
        'yt\\itunes\\request\\podcast' => __DIR__ . '/../..' . '/src/api/itunes/requests/podcast.php',
        'yt\\itunes\\request\\podcast_episode' => __DIR__ . '/../..' . '/src/api/itunes/requests/podcast_episode.php',
        'yt\\itunes\\request\\podcast_group' => __DIR__ . '/../..' . '/src/api/itunes/requests/podcast_group.php',
        'yt\\itunes\\response' => __DIR__ . '/../..' . '/src/api/itunes/responses/responses.php',
        'yt\\l' => __DIR__ . '/../..' . '/src/error/l.php',
        'yt\\mapper_collection' => __DIR__ . '/../..' . '/src/mapper/mapper_collection.php',
        'yt\\mapper_item' => __DIR__ . '/../..' . '/src/mapper/mapper_item.php',
        'yt\\option' => __DIR__ . '/../..' . '/src/acf/get_option.php',
        'yt\\options' => __DIR__ . '/../..' . '/src/acf/get_options.php',
        'yt\\quota' => __DIR__ . '/../..' . '/src/quota/quota.php',
        'yt\\r' => __DIR__ . '/../..' . '/src/error/r.php',
        'yt\\request_list' => __DIR__ . '/../..' . '/src/api/request_list.php',
        'yt\\scheduler' => __DIR__ . '/../..' . '/src/scheduler/scheduler.php',
        'yt\\scraper' => __DIR__ . '/../..' . '/src/scraper.php',
        'yt\\token\\date' => __DIR__ . '/../..' . '/src/api/tokens/date.php',
        'yt\\transform\\array_implode' => __DIR__ . '/../..' . '/src/transform/transforms/array_implode.php',
        'yt\\transform\\array_item' => __DIR__ . '/../..' . '/src/transform/transforms/array_item.php',
        'yt\\transform\\array_slice' => __DIR__ . '/../..' . '/src/transform/transforms/array_slice.php',
        'yt\\transform\\best_image' => __DIR__ . '/../..' . '/src/transform/transforms/best_image.php',
        'yt\\transform\\clean_date' => __DIR__ . '/../..' . '/src/transform/transforms/clean_date.php',
        'yt\\transform\\encode_json' => __DIR__ . '/../..' . '/src/transform/transforms/encode_json.php',
        'yt\\transform\\field_as_string' => __DIR__ . '/../..' . '/src/transform/transforms/field_as_string.php',
        'yt\\transform\\md5' => __DIR__ . '/../..' . '/src/transform/transforms/md5.php',
        'yt\\transform\\none' => __DIR__ . '/../..' . '/src/transform/transforms/none.php',
        'yt\\transform\\regex_match' => __DIR__ . '/../..' . '/src/transform/transforms/regex_match.php',
        'yt\\transform\\regex_remove' => __DIR__ . '/../..' . '/src/transform/transforms/regex_remove.php',
        'yt\\transform\\string_append' => __DIR__ . '/../..' . '/src/transform/transforms/string_append.php',
        'yt\\transform\\string_capitalise' => __DIR__ . '/../..' . '/src/transform/transforms/string_capitalise.php',
        'yt\\transform\\string_capitalise_all' => __DIR__ . '/../..' . '/src/transform/transforms/string_capitalise_all.php',
        'yt\\transform\\string_explode' => __DIR__ . '/../..' . '/src/transform/transforms/string_explode.php',
        'yt\\transform\\string_parsedown' => __DIR__ . '/../..' . '/src/transform/transforms/string_parsedown.php',
        'yt\\transform\\string_prepend' => __DIR__ . '/../..' . '/src/transform/transforms/string_prepend.php',
        'yt\\transform\\string_remove' => __DIR__ . '/../..' . '/src/transform/transforms/string_remove.php',
        'yt\\transform\\string_trim' => __DIR__ . '/../..' . '/src/transform/transforms/string_trim.php',
        'yt\\transform\\timestamp_to_date' => __DIR__ . '/../..' . '/src/transform/transforms/timestamp_to_date.php',
        'yt\\transform_group' => __DIR__ . '/../..' . '/src/transform/transform_group.php',
        'yt\\transform_layer' => __DIR__ . '/../..' . '/src/transform/transform_layer.php',
        'yt\\transform_list' => __DIR__ . '/../..' . '/src/transform/transform_list.php',
        'yt\\youtube\\request\\multichannel' => __DIR__ . '/../..' . '/src/api/youtube/requests/multichannel.php',
        'yt\\youtube\\request\\playlistitems' => __DIR__ . '/../..' . '/src/api/youtube/requests/playlistitems.php',
        'yt\\youtube\\request\\playlists' => __DIR__ . '/../..' . '/src/api/youtube/requests/playlists.php',
        'yt\\youtube\\request\\search' => __DIR__ . '/../..' . '/src/api/youtube/requests/search.php',
        'yt\\youtube\\request\\subscriptions' => __DIR__ . '/../..' . '/src/api/youtube/requests/subscriptions.php',
        'yt\\youtube\\request\\videos' => __DIR__ . '/../..' . '/src/api/youtube/requests/videos.php',
        'yt\\youtube\\response' => __DIR__ . '/../..' . '/src/api/youtube/responses/responses.php',
        'yt_import_export' => __DIR__ . '/../..' . '/src/acf/import_export_page.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit30fd7ec9b8e2598fd2f686f91346eea7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit30fd7ec9b8e2598fd2f686f91346eea7::$classMap;

        }, null, ClassLoader::class);
    }
}
