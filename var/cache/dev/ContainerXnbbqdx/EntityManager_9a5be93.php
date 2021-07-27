<?php

namespace ContainerXnbbqdx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder444fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4e983 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties571c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getConnection', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getMetadataFactory', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getExpressionBuilder', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'beginTransaction', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getCache', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'transactional', array('func' => $func), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->transactional($func);
    }

    public function commit()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'commit', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->commit();
    }

    public function rollback()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'rollback', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'createQuery', array('dql' => $dql), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'createQueryBuilder', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'flush', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'clear', array('entityName' => $entityName), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->clear($entityName);
    }

    public function close()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'close', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->close();
    }

    public function persist($entity)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'persist', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'remove', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'refresh', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'detach', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'merge', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'contains', array('entity' => $entity), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getEventManager', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getConfiguration', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'isOpen', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getUnitOfWork', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getProxyFactory', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'getFilters', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'isFiltersStateClean', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'hasFilters', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return $this->valueHolder444fa->hasFilters();
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

        $instance->initializer4e983 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder444fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder444fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder444fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, '__get', ['name' => $name], $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        if (isset(self::$publicProperties571c3[$name])) {
            return $this->valueHolder444fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder444fa;

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

        $targetObject = $this->valueHolder444fa;
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
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder444fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder444fa;
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
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, '__isset', array('name' => $name), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder444fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder444fa;
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
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, '__unset', array('name' => $name), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder444fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder444fa;
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
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, '__clone', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        $this->valueHolder444fa = clone $this->valueHolder444fa;
    }

    public function __sleep()
    {
        $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, '__sleep', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;

        return array('valueHolder444fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4e983 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4e983;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4e983 && ($this->initializer4e983->__invoke($valueHolder444fa, $this, 'initializeProxy', array(), $this->initializer4e983) || 1) && $this->valueHolder444fa = $valueHolder444fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder444fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder444fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
