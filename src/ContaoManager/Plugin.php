<?php

/**
 * @author Andrey Vinichenko <andrey.vinichenko@gmail.com>
 */

namespace Ameotoko\ContaoKeycloak\ContaoManager;

use Ameotoko\ContaoKeycloak\AmeotokoContaoKeycloakBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(AmeotokoContaoKeycloakBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
