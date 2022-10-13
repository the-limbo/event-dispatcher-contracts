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

use Psr\EventDispatcher\ListenerProviderInterface;

/**
 * Interface ListenerProviderContract
 *
 * @package   Limbo\Contracts\EventDispatcher
 * @author    dr0n1k  <a.dronov4job@yandex.ru>
 * @license   MIT
 * @copyright TheLimbo (c) 2022
 */
interface ListenerProviderContract extends ListenerProviderInterface
{
    /**
     * Add listener for event to provider.
     *
     * @param string|object                  $event
     * @param EventListenerContract|callable $listener
     * @param int                            $priority
     * @return void
     */
    public function addListener(string|object $event, EventListenerContract|callable $listener, int $priority = 0): void;

    /**
     * Check if passed event and listener registered in provider.
     *
     * @param string|object                  $event
     * @param EventListenerContract|callable $listener
     * @return bool
     */
    public function hasListener(string|object $event, EventListenerContract|callable $listener): bool;

    /**
     * Check if passed event register in provider and have any one listener.
     *
     * @param string|object $event
     * @return bool
     */
    public function hasListeners(string|object $event): bool;

    /**
     * Remove passed listener for event in provider.
     *
     * @param string|object                  $event
     * @param EventListenerContract|callable $listener
     * @return void
     */
    public function removeListener(string|object $event, EventListenerContract|callable $listener): void;

    /**
     * Remove all listeners for passed event in provider.
     *
     * @param string|object $event
     * @return void
     */
    public function removeListeners(string|object $event): void;

    /**
     * @inheritDoc
     * @param string|object $event
     * @return iterable<EventListenerContract|callable>
     */
    public function getListenersForEvent(string|object $event): iterable;
}
