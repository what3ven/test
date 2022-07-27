<?php

namespace Container2WjQuzy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46aed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16785 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties326ae = [
        
    ];

    public function getConnection()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getConnection', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getMetadataFactory', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getExpressionBuilder', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'beginTransaction', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getCache', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'transactional', array('func' => $func), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'commit', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->commit();
    }

    public function rollback()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'rollback', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getClassMetadata', array('className' => $className), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'createQuery', array('dql' => $dql), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'createNamedQuery', array('name' => $name), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'createQueryBuilder', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'flush', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'clear', array('entityName' => $entityName), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->clear($entityName);
    }

    public function close()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'close', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->close();
    }

    public function persist($entity)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'persist', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'remove', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'refresh', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'detach', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'merge', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'contains', array('entity' => $entity), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getEventManager', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getConfiguration', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'isOpen', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getUnitOfWork', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getProxyFactory', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'initializeObject', array('obj' => $obj), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'getFilters', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'isFiltersStateClean', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'hasFilters', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return $this->valueHolder46aed->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer16785 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder46aed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46aed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46aed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, '__get', ['name' => $name], $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        if (isset(self::$publicProperties326ae[$name])) {
            return $this->valueHolder46aed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46aed;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46aed;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46aed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46aed;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, '__isset', array('name' => $name), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46aed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46aed;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, '__unset', array('name' => $name), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46aed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46aed;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, '__clone', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        $this->valueHolder46aed = clone $this->valueHolder46aed;
    }

    public function __sleep()
    {
        $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, '__sleep', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;

        return array('valueHolder46aed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16785 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16785;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16785 && ($this->initializer16785->__invoke($valueHolder46aed, $this, 'initializeProxy', array(), $this->initializer16785) || 1) && $this->valueHolder46aed = $valueHolder46aed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46aed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46aed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
