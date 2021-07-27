<?php

namespace ContainerZXxUP6w;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder45183 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer624a5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties66ee2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getConnection', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getMetadataFactory', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getExpressionBuilder', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'beginTransaction', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getCache', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getCache();
    }

    public function transactional($func)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'transactional', array('func' => $func), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->transactional($func);
    }

    public function commit()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'commit', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->commit();
    }

    public function rollback()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'rollback', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getClassMetadata', array('className' => $className), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'createQuery', array('dql' => $dql), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'createNamedQuery', array('name' => $name), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'createQueryBuilder', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'flush', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'clear', array('entityName' => $entityName), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->clear($entityName);
    }

    public function close()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'close', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->close();
    }

    public function persist($entity)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'persist', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'remove', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'refresh', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'detach', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'merge', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getRepository', array('entityName' => $entityName), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'contains', array('entity' => $entity), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getEventManager', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getConfiguration', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'isOpen', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getUnitOfWork', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getProxyFactory', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'initializeObject', array('obj' => $obj), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'getFilters', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'isFiltersStateClean', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'hasFilters', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return $this->valueHolder45183->hasFilters();
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

        $instance->initializer624a5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder45183) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder45183 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder45183->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, '__get', ['name' => $name], $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        if (isset(self::$publicProperties66ee2[$name])) {
            return $this->valueHolder45183->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45183;

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

        $targetObject = $this->valueHolder45183;
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
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45183;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder45183;
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
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, '__isset', array('name' => $name), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45183;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder45183;
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
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, '__unset', array('name' => $name), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45183;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder45183;
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
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, '__clone', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        $this->valueHolder45183 = clone $this->valueHolder45183;
    }

    public function __sleep()
    {
        $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, '__sleep', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;

        return array('valueHolder45183');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer624a5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer624a5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer624a5 && ($this->initializer624a5->__invoke($valueHolder45183, $this, 'initializeProxy', array(), $this->initializer624a5) || 1) && $this->valueHolder45183 = $valueHolder45183;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder45183;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder45183;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
