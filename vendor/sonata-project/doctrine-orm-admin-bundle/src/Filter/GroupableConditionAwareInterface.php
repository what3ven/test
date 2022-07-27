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

namespace Sonata\DoctrineORMAdminBundle\Filter;

use Doctrine\ORM\Query\Expr\Composite;
use Sonata\AdminBundle\Search\ChainableFilterInterface;

/**
 * @author Javier Spagnoletti <phansys@gmail.com>
 */
interface GroupableConditionAwareInterface extends ChainableFilterInterface
{
    public function setConditionGroup(Composite $conditionGroup): void;

    public function getConditionGroup(): Composite;

    public function hasConditionGroup(): bool;
}
