<?php

namespace Kanboard\Plugin\TestPlugin;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'TestPlugin';
    }

    public function getPluginDescription()
    {
        return t('This plugin does nothing.');
    }

    public function getPluginAuthor()
    {
        return 'Barbora';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/BarboraPiatkova/TestPlugin';
    }
}

