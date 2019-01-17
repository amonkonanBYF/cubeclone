<?php

/*
 * This file is part of the PsyshBundle package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fidry\PsyshBundle;

use Psy\Shell;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
final class PsyshFacade implements ContainerAwareInterface
{
    /**
     * @var Shell
     */
    private static $shell;

    /**
     * @var ContainerInterface|null
     */
    private static $container;

    public static function init()
    {
        if (null !== self::$shell) {
            return;
        }

        if (null === self::$container) {
            throw new \RuntimeException('Cannot initialize the facade without a container.');
        }

        self::$shell = self::$container->get('psysh.shell');
    }

    public static function debug(array $variables = [], $bind = null)
    {
        self::init();

        $_variables = array_merge(self::$shell->getScopeVariables(), $variables);

        extract(
            self::$shell->debug($_variables, $bind)
        );
    }

    /**
     * @inheritdoc
     */
    public function setContainer(ContainerInterface $container = null)
    {
        self::$container = $container;
    }
}
