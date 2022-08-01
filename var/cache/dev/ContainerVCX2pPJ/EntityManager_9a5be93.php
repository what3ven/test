<?php

namespace ContainerVCX2pPJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder912ec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdf0fd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb7e76 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getConnection', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getMetadataFactory', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getExpressionBuilder', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'beginTransaction', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getCache', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'transactional', array('func' => $func), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'commit', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->commit();
    }

    public function rollback()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'rollback', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getClassMetadata', array('className' => $className), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'createQuery', array('dql' => $dql), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'createNamedQuery', array('name' => $name), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'createQueryBuilder', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'flush', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'clear', array('entityName' => $entityName), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->clear($entityName);
    }

    public function close()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'close', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->close();
    }

    public function persist($entity)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'persist', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'remove', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'refresh', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'detach', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'merge', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'contains', array('entity' => $entity), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getEventManager', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getConfiguration', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'isOpen', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getUnitOfWork', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getProxyFactory', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'initializeObject', array('obj' => $obj), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'getFilters', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'isFiltersStateClean', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'hasFilters', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return $this->valueHolder912ec->hasFilters();
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

        $instance->initializerdf0fd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder912ec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder912ec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder912ec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, '__get', ['name' => $name], $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        if (isset(self::$publicPropertiesb7e76[$name])) {
            return $this->valueHolder912ec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder912ec;

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

        $targetObject = $this->valueHolder912ec;
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
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder912ec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder912ec;
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
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, '__isset', array('name' => $name), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder912ec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder912ec;
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
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, '__unset', array('name' => $name), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder912ec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder912ec;
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
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, '__clone', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        $this->valueHolder912ec = clone $this->valueHolder912ec;
    }

    public function __sleep()
    {
        $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, '__sleep', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;

        return array('valueHolder912ec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdf0fd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdf0fd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdf0fd && ($this->initializerdf0fd->__invoke($valueHolder912ec, $this, 'initializeProxy', array(), $this->initializerdf0fd) || 1) && $this->valueHolder912ec = $valueHolder912ec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder912ec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder912ec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
