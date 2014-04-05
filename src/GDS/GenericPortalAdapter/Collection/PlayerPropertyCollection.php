<?php

namespace VasilDakov\GDS\GenericPortalAdapter\Collection;

class PlayerPropertyCollection extends \ArrayObject implements \IteratorAggregate, \ArrayAccess, \Serializable, \Countable  {

	public $PlayerProperty = array();

	public function __construct(array $PlayerProperty = array()) 
	{
        if (!empty($PlayerProperty)) {
            $this->PlayerProperty = $PlayerProperty;
        }
	}


    public function count()
    {
        return count($this->PlayerProperty);
    }


    public function rewind()
    {
        reset($this->PlayerProperty);
    }


    public function key()
    {
        return key($this->PlayerProperty);
    }


	public function current()
    {
        return current($this->PlayerProperty);
    }


	public function valid()
    {
        return ($this->current() !== false);
    }

    public function next()
    {
        next($this->_data);
    }
    
	/**
     * Add an element to the collection (implementation required by ArrayAccess interface)
     * @param $key
     * @param $value
     */
	public function offsetSet($key, $value)
    {
        if ($key === null) {
            if (!in_array($key, $this->_data, true)) {
                $this->PlayerProperty[] = $value;
                return true;
            }
        }
        else if (!array_key_exists($key, $this->PlayerProperty)) {
            $this->PlayerProperty[$key] = $value;
            return true;
        }
        return false;
    }

	/**
     * Remove an element from the collection
     * @param $key
     */
    public function offsetUnset($key)
    {
        if (array_key_exists($key, $this->_data)) {
            unset($this->_data[$key]);
            return true;
        }
        return false;
    }

	/**
     * Get the specified element in the collection
     * @param $key
     */
    public function offsetGet($key)
    {
        return array_key_exists($key, $this->PlayerProperty) ?
               $this->PlayerProperty[$key] :
               null;
    } 

	/**
     * Check if the specified element exists in the collection
     * @param $key
     */  
 	public function offsetExists($key)
    {
        return array_key_exists($key, $this->PlayerProperty);
    }

}