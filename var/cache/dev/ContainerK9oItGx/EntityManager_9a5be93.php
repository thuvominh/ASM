<?php

namespace ContainerK9oItGx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder564fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer25ae2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4c097 = [
        
    ];

    public function getConnection()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getConnection', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getMetadataFactory', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getExpressionBuilder', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'beginTransaction', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getCache', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'transactional', array('func' => $func), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'commit', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->commit();
    }

    public function rollback()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'rollback', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getClassMetadata', array('className' => $className), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'createQuery', array('dql' => $dql), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'createNamedQuery', array('name' => $name), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'createQueryBuilder', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'flush', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'clear', array('entityName' => $entityName), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->clear($entityName);
    }

    public function close()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'close', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->close();
    }

    public function persist($entity)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'persist', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'remove', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'refresh', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'detach', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'merge', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'contains', array('entity' => $entity), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getEventManager', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getConfiguration', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'isOpen', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getUnitOfWork', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getProxyFactory', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'initializeObject', array('obj' => $obj), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'getFilters', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'isFiltersStateClean', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'hasFilters', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return $this->valueHolder564fe->hasFilters();
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

        $instance->initializer25ae2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder564fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder564fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder564fe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, '__get', ['name' => $name], $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        if (isset(self::$publicProperties4c097[$name])) {
            return $this->valueHolder564fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder564fe;

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

        $targetObject = $this->valueHolder564fe;
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
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder564fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder564fe;
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
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, '__isset', array('name' => $name), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder564fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder564fe;
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
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, '__unset', array('name' => $name), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder564fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder564fe;
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
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, '__clone', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        $this->valueHolder564fe = clone $this->valueHolder564fe;
    }

    public function __sleep()
    {
        $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, '__sleep', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;

        return array('valueHolder564fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer25ae2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer25ae2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer25ae2 && ($this->initializer25ae2->__invoke($valueHolder564fe, $this, 'initializeProxy', array(), $this->initializer25ae2) || 1) && $this->valueHolder564fe = $valueHolder564fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder564fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder564fe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
