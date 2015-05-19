<?php
/**
 * Defines the credentials bootstrapper
 */
namespace Project\Bootstrappers\Authentication;
use RDev\Applications\Bootstrappers\Bootstrapper;
use RDev\IoC\IContainer;

class Credentials extends Bootstrapper
{
    /**
     * {@inheritdoc}
     */
    public function registerBindings(IContainer $container)
    {
        $container->bind(
            "RDev\\Authentication\\Credentials\\ICredentials",
            "RDev\\Authentication\\Credentials\\Credentials"
        );
    }
}