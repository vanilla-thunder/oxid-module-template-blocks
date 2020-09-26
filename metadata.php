<?php
$sMetadataVersion = '2.1';
$aModule = [
    'id' => 'template-blocks',
    'title' => 'Eigene Template Blocks',
    'description' => 'Module für eigene Template Block Anpassungen',
    'thumbnail' => 'thumbnail.jpg',
    'version' => '1.0.0',
    'author' => '',
    'email' => '',
    'extend' => [],
    'blocks' => [
        // admin block
        [
            'template' => 'content_list.tpl',
            'block' => 'admin_home_navigation_items',
            'file' => '/blocks/admin/admin_home_navigation_items.tpl'
        ],
        // frontend
        [
            // 'theme' => 'wave', // optional
            'template' => 'page/shop/start.tpl',
            'block' => 'start_manufacturer_slider',
            'file' => '/blocks/start_manufacturer_slider.tpl'
        ]
    ]
];
