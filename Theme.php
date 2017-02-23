<?php

namespace Shopware\Themes\OfThemeDummy;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
orangefluid Theme Dummy
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Ein blankes Shopware Theme mit leeren .less und .tpl Dateien.
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
orangefluid
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    protected $javascript = array(
        'src/js/of.script.js',
        'src/js/of.plugin.js'
    );

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}