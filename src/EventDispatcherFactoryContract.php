<?php declare(strict_types=1);

/*
 * This file is part of the TheLimbo package.
 *
 * (c) dr0n1k <a.dronov4job@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limbo\Contracts\EventDispatcher;

use Limbo\Contracts\Factory\FactoryContract;

/**
 * Interface EventDispatcherFactoryContract
 *
 * @package   Limbo\Contracts\EventDispatcher
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface EventDispatcherFactoryContract extends FactoryContract
{
    /**
     * Create event dispatcher.
     *
     * @return EventDispatcherContract
     */
    public static function create(): EventDispatcherContract;

    /**
     * Create event dispatcher with given provider.
     *
     * @param ListenerProviderContract $provider
     * @return EventDispatcherContract
     */
    public function createEventDispatcher(ListenerProviderContract $provider): EventDispatcherContract;
}
