<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionCalloutBlockCreateBlocksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'blocks',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'headline' => [
            'translatable' => true,
        ],
        'text' => [
            'translatable' => true,
        ],
        'link_url',
        'link_text' => [
            'translatable' => true,
        ]
    ];
}
