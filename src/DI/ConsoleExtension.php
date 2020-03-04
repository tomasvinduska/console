<?php declare(strict_types = 1);

namespace Mafi\Console\DI;

use Nette\DI\CompilerExtension;
use Symfony\Component\Console\Application;

class ConsoleExtension extends CompilerExtension
{

    public function loadConfiguration()
    {
        $builder = $this->getContainerBuilder();
        // Register Symfony Console Application
        $consoleApplicationDef = $builder->addDefinition($this->prefix('application'))
            ->setFactory(Application::class);
    }

}
