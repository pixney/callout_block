<?php

namespace Pixney\CalloutBlockExtension;

use Pixney\CalloutBlockExtension\Block\BlockModel;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

class CalloutBlockExtension extends Extension
{
    protected $provides = 'anomaly.module.blocks::block.callout';
    protected $model    = BlockModel::class;

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'pixney.theme.esharawater::blocks/callout';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}
