<?php
/**
 * QueueMember
 *
 * PHP version 5
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FreeClimb\PerCL;

use \ArrayAccess;
use \FreeClimb\ObjectSerializer;

/**
 * QueueMember Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QueueMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QueueMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uri' => 'string',
        'call_id' => 'string',
        'wait_time' => 'int',
        'position' => 'int',
        'date_enqueued' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uri' => null,
        'call_id' => null,
        'wait_time' => null,
        'position' => null,
        'date_enqueued' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uri' => 'uri',
        'call_id' => 'callId',
        'wait_time' => 'waitTime',
        'position' => 'position',
        'date_enqueued' => 'dateEnqueued'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'call_id' => 'setCallId',
        'wait_time' => 'setWaitTime',
        'position' => 'setPosition',
        'date_enqueued' => 'setDateEnqueued'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'call_id' => 'getCallId',
        'wait_time' => 'getWaitTime',
        'position' => 'getPosition',
        'date_enqueued' => 'getDateEnqueued'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['call_id'] = isset($data['call_id']) ? $data['call_id'] : null;
        $this->container['wait_time'] = isset($data['wait_time']) ? $data['wait_time'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['date_enqueued'] = isset($data['date_enqueued']) ? $data['date_enqueued'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri URI for this Queue Member resource, relative to the API base URL.
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets call_id
     *
     * @return string|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string|null $call_id ID of the Call associated with this Queue Member.
     *
     * @return $this
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets wait_time
     *
     * @return int|null
     */
    public function getWaitTime()
    {
        return $this->container['wait_time'];
    }

    /**
     * Sets wait_time
     *
     * @param int|null $wait_time Number of seconds the Member has been in the queue.
     *
     * @return $this
     */
    public function setWaitTime($wait_time)
    {
        $this->container['wait_time'] = $wait_time;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position Member's current position in the Queue, 1 indexed.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets date_enqueued
     *
     * @return string|null
     */
    public function getDateEnqueued()
    {
        return $this->container['date_enqueued'];
    }

    /**
     * Sets date_enqueued
     *
     * @param string|null $date_enqueued Date that the Member was enqueued (GMT), given in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT).
     *
     * @return $this
     */
    public function setDateEnqueued($date_enqueued)
    {
        $this->container['date_enqueued'] = $date_enqueued;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


