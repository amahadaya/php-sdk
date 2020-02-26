<?php
/**
 * AddToConferenceAllOf
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
 * AddToConferenceAllOf Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddToConferenceAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddToConference_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_call_control' => 'bool',
        'call_control_sequence' => 'string',
        'call_control_url' => 'string',
        'conference_id' => 'string',
        'call_id' => 'bool',
        'leave_conference_url' => 'string',
        'listen' => 'bool',
        'notification_url' => 'string',
        'start_conf_on_enter' => 'bool',
        'talk' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'allow_call_control' => null,
        'call_control_sequence' => null,
        'call_control_url' => null,
        'conference_id' => null,
        'call_id' => null,
        'leave_conference_url' => null,
        'listen' => null,
        'notification_url' => null,
        'start_conf_on_enter' => null,
        'talk' => null
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
        'allow_call_control' => 'allowCallControl',
        'call_control_sequence' => 'callControlSequence',
        'call_control_url' => 'callControlUrl',
        'conference_id' => 'conferenceId',
        'call_id' => 'callId',
        'leave_conference_url' => 'leaveConferenceUrl',
        'listen' => 'listen',
        'notification_url' => 'notificationUrl',
        'start_conf_on_enter' => 'startConfOnEnter',
        'talk' => 'talk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_call_control' => 'setAllowCallControl',
        'call_control_sequence' => 'setCallControlSequence',
        'call_control_url' => 'setCallControlUrl',
        'conference_id' => 'setConferenceId',
        'call_id' => 'setCallId',
        'leave_conference_url' => 'setLeaveConferenceUrl',
        'listen' => 'setListen',
        'notification_url' => 'setNotificationUrl',
        'start_conf_on_enter' => 'setStartConfOnEnter',
        'talk' => 'setTalk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_call_control' => 'getAllowCallControl',
        'call_control_sequence' => 'getCallControlSequence',
        'call_control_url' => 'getCallControlUrl',
        'conference_id' => 'getConferenceId',
        'call_id' => 'getCallId',
        'leave_conference_url' => 'getLeaveConferenceUrl',
        'listen' => 'getListen',
        'notification_url' => 'getNotificationUrl',
        'start_conf_on_enter' => 'getStartConfOnEnter',
        'talk' => 'getTalk'
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
        $this->container['allow_call_control'] = isset($data['allow_call_control']) ? $data['allow_call_control'] : null;
        $this->container['call_control_sequence'] = isset($data['call_control_sequence']) ? $data['call_control_sequence'] : null;
        $this->container['call_control_url'] = isset($data['call_control_url']) ? $data['call_control_url'] : null;
        $this->container['conference_id'] = isset($data['conference_id']) ? $data['conference_id'] : null;
        $this->container['call_id'] = isset($data['call_id']) ? $data['call_id'] : null;
        $this->container['leave_conference_url'] = isset($data['leave_conference_url']) ? $data['leave_conference_url'] : null;
        $this->container['listen'] = isset($data['listen']) ? $data['listen'] : null;
        $this->container['notification_url'] = isset($data['notification_url']) ? $data['notification_url'] : null;
        $this->container['start_conf_on_enter'] = isset($data['start_conf_on_enter']) ? $data['start_conf_on_enter'] : null;
        $this->container['talk'] = isset($data['talk']) ? $data['talk'] : null;
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
     * Gets allow_call_control
     *
     * @return bool|null
     */
    public function getAllowCallControl()
    {
        return $this->container['allow_call_control'];
    }

    /**
     * Sets allow_call_control
     *
     * @param bool|null $allow_call_control allow_call_control
     *
     * @return $this
     */
    public function setAllowCallControl($allow_call_control)
    {
        $this->container['allow_call_control'] = $allow_call_control;

        return $this;
    }

    /**
     * Gets call_control_sequence
     *
     * @return string|null
     */
    public function getCallControlSequence()
    {
        return $this->container['call_control_sequence'];
    }

    /**
     * Sets call_control_sequence
     *
     * @param string|null $call_control_sequence call_control_sequence
     *
     * @return $this
     */
    public function setCallControlSequence($call_control_sequence)
    {
        $this->container['call_control_sequence'] = $call_control_sequence;

        return $this;
    }

    /**
     * Gets call_control_url
     *
     * @return string|null
     */
    public function getCallControlUrl()
    {
        return $this->container['call_control_url'];
    }

    /**
     * Sets call_control_url
     *
     * @param string|null $call_control_url call_control_url
     *
     * @return $this
     */
    public function setCallControlUrl($call_control_url)
    {
        $this->container['call_control_url'] = $call_control_url;

        return $this;
    }

    /**
     * Gets conference_id
     *
     * @return string|null
     */
    public function getConferenceId()
    {
        return $this->container['conference_id'];
    }

    /**
     * Sets conference_id
     *
     * @param string|null $conference_id conference_id
     *
     * @return $this
     */
    public function setConferenceId($conference_id)
    {
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets call_id
     *
     * @return bool|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param bool|null $call_id call_id
     *
     * @return $this
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets leave_conference_url
     *
     * @return string|null
     */
    public function getLeaveConferenceUrl()
    {
        return $this->container['leave_conference_url'];
    }

    /**
     * Sets leave_conference_url
     *
     * @param string|null $leave_conference_url leave_conference_url
     *
     * @return $this
     */
    public function setLeaveConferenceUrl($leave_conference_url)
    {
        $this->container['leave_conference_url'] = $leave_conference_url;

        return $this;
    }

    /**
     * Gets listen
     *
     * @return bool|null
     */
    public function getListen()
    {
        return $this->container['listen'];
    }

    /**
     * Sets listen
     *
     * @param bool|null $listen listen
     *
     * @return $this
     */
    public function setListen($listen)
    {
        $this->container['listen'] = $listen;

        return $this;
    }

    /**
     * Gets notification_url
     *
     * @return string|null
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     *
     * @param string|null $notification_url notification_url
     *
     * @return $this
     */
    public function setNotificationUrl($notification_url)
    {
        $this->container['notification_url'] = $notification_url;

        return $this;
    }

    /**
     * Gets start_conf_on_enter
     *
     * @return bool|null
     */
    public function getStartConfOnEnter()
    {
        return $this->container['start_conf_on_enter'];
    }

    /**
     * Sets start_conf_on_enter
     *
     * @param bool|null $start_conf_on_enter start_conf_on_enter
     *
     * @return $this
     */
    public function setStartConfOnEnter($start_conf_on_enter)
    {
        $this->container['start_conf_on_enter'] = $start_conf_on_enter;

        return $this;
    }

    /**
     * Gets talk
     *
     * @return bool|null
     */
    public function getTalk()
    {
        return $this->container['talk'];
    }

    /**
     * Sets talk
     *
     * @param bool|null $talk talk
     *
     * @return $this
     */
    public function setTalk($talk)
    {
        $this->container['talk'] = $talk;

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


