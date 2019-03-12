<?php

declare(strict_types=1);

namespace DieSchmidts\ContaoWebServerBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Symfony\Bundle\WebServerBundle\WebServerBundle;

/**
 * Class Plugin.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     *
     * @return array
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(WebServerBundle::class),
        ];
    }

}
