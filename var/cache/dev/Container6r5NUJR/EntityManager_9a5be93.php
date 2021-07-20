<?php

namespace Container6r5NUJR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbfa14 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc995d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4ce77 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getConnection', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getMetadataFactory', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getExpressionBuilder', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'beginTransaction', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getCache', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'transactional', array('func' => $func), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->transactional($func);
    }

    public function commit()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'commit', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->commit();
    }

    public function rollback()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'rollback', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getClassMetadata', array('className' => $className), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'createQuery', array('dql' => $dql), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'createNamedQuery', array('name' => $name), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'createQueryBuilder', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'flush', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'clear', array('entityName' => $entityName), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->clear($entityName);
    }

    public function close()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'close', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->close();
    }

    public function persist($entity)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'persist', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'remove', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'refresh', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'detach', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'merge', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'contains', array('entity' => $entity), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getEventManager', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getConfiguration', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'isOpen', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getUnitOfWork', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getProxyFactory', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'initializeObject', array('obj' => $obj), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'getFilters', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'isFiltersStateClean', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'hasFilters', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return $this->valueHolderbfa14->hasFilters();
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

        $instance->initializerc995d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbfa14) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbfa14 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbfa14->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, '__get', ['name' => $name], $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        if (isset(self::$publicProperties4ce77[$name])) {
            return $this->valueHolderbfa14->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa14;

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

        $targetObject = $this->valueHolderbfa14;
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
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa14;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbfa14;
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
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, '__isset', array('name' => $name), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa14;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbfa14;
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
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, '__unset', array('name' => $name), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa14;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbfa14;
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
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, '__clone', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        $this->valueHolderbfa14 = clone $this->valueHolderbfa14;
    }

    public function __sleep()
    {
        $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, '__sleep', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;

        return array('valueHolderbfa14');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc995d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc995d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc995d && ($this->initializerc995d->__invoke($valueHolderbfa14, $this, 'initializeProxy', array(), $this->initializerc995d) || 1) && $this->valueHolderbfa14 = $valueHolderbfa14;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbfa14;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbfa14;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
