<?php

namespace Proxies\__CG__\project\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \project\AdminBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array('path' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->path);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'bio', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'file', 'path', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'address', 'alertSettings', 'lga', 'specialty', 'area', 'subscriptionType', 'products', 'ratings');
        }

        return array('__isInitialized__', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'bio', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'file', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'project\\AdminBundle\\Entity\\User' . "\0" . 'address', 'alertSettings', 'lga', 'specialty', 'area', 'subscriptionType', 'products', 'ratings');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->path);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setLga(\project\AdminBundle\Entity\LGA $lga = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLga', array($lga));

        return parent::setLga($lga);
    }

    /**
     * {@inheritDoc}
     */
    public function getLga()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLga', array());

        return parent::getLga();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubArea(\project\AdminBundle\Entity\SubArea $subArea = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubArea', array($subArea));

        return parent::setSubArea($subArea);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubArea', array());

        return parent::getSubArea();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlertSettings(\project\AdminBundle\Entity\AlertSettings $alertSettings = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlertSettings', array($alertSettings));

        return parent::setAlertSettings($alertSettings);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlertSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlertSettings', array());

        return parent::getAlertSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionType(\project\AdminBundle\Entity\SubscriptionType $subscriptionType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionType', array($subscriptionType));

        return parent::setSubscriptionType($subscriptionType);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionType', array());

        return parent::getSubscriptionType();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduct(\project\AdminBundle\Entity\Product $products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduct', array($products));

        return parent::addProduct($products);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduct(\project\AdminBundle\Entity\Product $products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduct', array($products));

        return parent::removeProduct($products);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', array());

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setArea(\project\AdminBundle\Entity\Area $area = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArea', array($area));

        return parent::setArea($area);
    }

    /**
     * {@inheritDoc}
     */
    public function getArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArea', array());

        return parent::getArea();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', array());

        return parent::removeUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialty(\project\AdminBundle\Entity\AreaOfSpecialty $specialty = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialty', array($specialty));

        return parent::setSpecialty($specialty);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialty', array());

        return parent::getSpecialty();
    }

    /**
     * {@inheritDoc}
     */
    public function setBio($bio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBio', array($bio));

        return parent::setBio($bio);
    }

    /**
     * {@inheritDoc}
     */
    public function getBio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBio', array());

        return parent::getBio();
    }

    /**
     * {@inheritDoc}
     */
    public function addRating(\project\AdminBundle\Entity\RatingComment $ratings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRating', array($ratings));

        return parent::addRating($ratings);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRating(\project\AdminBundle\Entity\RatingComment $ratings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRating', array($ratings));

        return parent::removeRating($ratings);
    }

    /**
     * {@inheritDoc}
     */
    public function getRatings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatings', array());

        return parent::getRatings();
    }

}
