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

namespace Sonata\Form\Serializer;

use JMS\Serializer\Handler\SubscribingHandlerInterface;

/**
 * NEXT_MAJOR: Remove this interface.
 *
 * @deprecated since sonata-project/form-extensions version 1.13 and will be removed in 2.0.
 *
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 */
interface SerializerHandlerInterface extends SubscribingHandlerInterface
{
    /**
     * @return string
     */
    public static function getType();
}
