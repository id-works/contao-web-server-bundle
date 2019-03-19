<?php

declare(strict_types=1);

namespace DieSchmidts\ContaoWebServerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ChangePublicFolderPass implements CompilerPassInterface
{

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container): void
    {
        static $services = [
            'web_server.command.server_run',
            'web_server.command.server_start',
        ];

        foreach ($services as $service) {
            $definition = $container->getDefinition($service);

            $path = $definition->getArgument(0);
            if (!is_dir($path) && 'public' === basename($path)) {
                $path = dirname($path) . '/web';
            }

            $definition->setArgument(0, $path);
        }
    }

}