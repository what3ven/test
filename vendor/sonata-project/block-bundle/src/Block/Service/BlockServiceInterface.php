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

namespace Sonata\BlockBundle\Block\Service;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Christian Gripp <mail@core23.de>
 */
interface BlockServiceInterface
{
    public function execute(BlockContextInterface $blockContext, ?Response $response = null): Response;

    public function load(BlockInterface $block): void;

    /**
     * @return array<string, mixed>
     */
    public function getCacheKeys(BlockInterface $block): array;

    /**
     * Define the default options for the block.
     */
    public function configureSettings(OptionsResolver $resolver): void;
}
