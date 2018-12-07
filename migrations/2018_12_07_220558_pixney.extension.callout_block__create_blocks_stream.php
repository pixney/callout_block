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
        'slug'          => 'blocks'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'headline',
        'text',
        'link',
        'link_text',
    ];
}
