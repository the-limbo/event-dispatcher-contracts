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

use Psr\EventDispatcher\StoppableEventInterface;

/**
 * Interface EventContract
 *
 * @package   Limbo\Contracts\EventDispatcher
 * @author    dr0n1k  <a.dronov4job@yandex.ru>
 * @license   MIT
 * @copyright TheLimbo (c) 2022
 */
interface EventContract extends StoppableEventInterface
{
    /**
     * Event name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Stop event propagation.
     *
     * @return void
     */
    public function stopPropagation(): void;
}
