<?php
    // Render View example.
    // Simple script to introduce template pages and split your markup out of your php. Use it in your class, functions or whatever!
    // Hardcode or source data from a CMS or some kind of system settings.

    include('./render_view.php');

    $data = [
        'name' => 'John Smith',
        'colour' => 'Red',
        'friends' => [
            [
                'name' => 'Toby',
                'nickname' => 'Jugg'
            ],
            [
                'name' => 'Rick Schmitt',
                'nickname' => 'Smitty'
            ],
        ],
    ];

    render_view('index', $data);