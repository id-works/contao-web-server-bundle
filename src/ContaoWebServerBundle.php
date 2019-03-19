<?php

declare(strict_types=1);

namespace DieSchmidts\ContaoWebServerBundle;

use DieSchmidts\ContaoWebServerBundle\DependencyInjection\Compiler\ChangePublicFolderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoWebServerBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ChangePublicFolderPass());
    }

}
