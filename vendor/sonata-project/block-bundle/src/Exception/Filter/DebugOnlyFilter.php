<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Exception\Filter;

use Sonata\BlockBundle\Model\BlockInterface;

/**
 * This filter handles exceptions only when debug mode is enabled.
 *
 * @author Olivier Paradis <paradis.olivier@gmail.com>
 */
final class DebugOnlyFilter implements FilterInterface
{
    private bool $debug;

    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }

    public function handle(\Throwable $exception, BlockInterface $block): bool
    {
        return $this->debug;
    }
}
