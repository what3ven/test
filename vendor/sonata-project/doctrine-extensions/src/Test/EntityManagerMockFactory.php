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

namespace Sonata\Doctrine\Test;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\Mapping\ClassMetadata;
use PHPUnit\Framework\TestCase;

/**
 * NEXT_MAJOR: Remove this class.
 *
 * @deprecated since sonata-project/doctrine-extensions 1.5, to be removed in 2.0.
 */
class EntityManagerMockFactory
{
    /**
     * @param string[] $fields
     *
     * @return EntityManagerInterface
     */
    public static function create(TestCase $test, \Closure $qbCallback, $fields)
    {
        $query = $test->createMock(AbstractQuery::class);
        $query->method('execute')->willReturn(true);

        $qb = $test->createMock(QueryBuilder::class);

        $qb->method('select')->willReturn($qb);
        $qb->method('getQuery')->willReturn($query);
        $qb->method('where')->willReturn($qb);
        $qb->method('orderBy')->willReturn($qb);
        $qb->method('andWhere')->willReturn($qb);
        $qb->method('leftJoin')->willReturn($qb);

        $qbCallback($qb);

        $repository = $test->createMock(EntityRepository::class);
        $repository->method('createQueryBuilder')->willReturn($qb);

        $metadata = $test->createMock(ClassMetadata::class);
        $metadata->method('getFieldNames')->willReturn($fields);
        $metadata->method('getName')->willReturn('className');

        $em = $test->createMock(EntityManager::class);
        $em->method('getRepository')->willReturn($repository);
        $em->method('getClassMetadata')->willReturn($metadata);

        return $em;
    }
}
