<?php
namespace LHDBlangS;

return [
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => OMEKA_PATH . '/modules/LHDBlangS/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
];
