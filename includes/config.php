<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'OA TECH PHP WEBSITE',
        'sub_name' => 'Profile',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About PHP',
            'learn-more' => 'Learn more',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => '1.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
