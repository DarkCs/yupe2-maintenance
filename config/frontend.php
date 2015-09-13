<?php

return [
    'bootstrap' => ['maintenance'],
    'components' => [
        'maintenance' => [
            'class' => 'darkcs\maintenance\Maintenance',
        ],
    ],
    'modules' => [
        'maintenance' => [
            'class' => 'darkcs\maintenance\Module',
        ],
    ],
];
