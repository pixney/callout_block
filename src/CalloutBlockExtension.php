<?php

namespace Pixney\CalloutBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\CalloutBlockExtension\Block\BlockModel;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

class CalloutBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.callout';
    protected $model    = BlockModel::class;
    protected $category = 'content';

    public function getView()
    {
        $settings      = app(SettingRepositoryInterface::class);
        $setting       = $settings->get('streams::standard_theme');
        $this->wrapper = $setting->value . "::blocks/{$this->slug}/wrapper";
        return $setting->value . "::blocks/{$this->slug}/content";
    }
}
