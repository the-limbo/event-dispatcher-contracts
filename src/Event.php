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

/**
 * Class Event
 *
 * @package   Limbo\Contracts\EventDispatcher
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @license   MIT
 * @copyright TheLimbo (c) 2022
 */
abstract class Event implements EventContract
{
    /**
     * Event name.
     *
     * @var string
     */
    private string $name;

    /**
     * Is propagation stopped.
     *
     * @var bool
     */
    protected bool $stopped = false;

    /**
     * Constructor.
     *
     * @param string|null $name
     */
    public function __construct(string|null $name = null)
    {
        $this->name = $name ?? static::class;
    }

    /**
     * @inheritDoc
     */
    public function stopPropagation(): void
    {
        $this->stopped = true;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function isPropagationStopped(): bool
    {
        return $this->stopped;
    }
}
