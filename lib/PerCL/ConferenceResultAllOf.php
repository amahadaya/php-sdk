<?php
/**
 * ConferenceResultAllOf
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
 * ConferenceResultAllOf Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConferenceResultAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConferenceResult_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conference_id' => 'string',
        'account_id' => 'string',
        'alias' => 'string',
        'play_beep' => 'string',
        'record' => 'bool',
        'status' => 'string',
        'wait_url' => 'string',
        'action_url' => 'string',
        'status_callback_url' => 'string',
        'subresource_uris' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'conference_id' => null,
        'account_id' => null,
        'alias' => null,
        'play_beep' => null,
        'record' => null,
        'status' => null,
        'wait_url' => null,
        'action_url' => null,
        'status_callback_url' => null,
        'subresource_uris' => null
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
        'conference_id' => 'conferenceId',
        'account_id' => 'accountId',
        'alias' => 'alias',
        'play_beep' => 'playBeep',
        'record' => 'record',
        'status' => 'status',
        'wait_url' => 'waitUrl',
        'action_url' => 'actionUrl',
        'status_callback_url' => 'statusCallbackUrl',
        'subresource_uris' => 'subresourceUris'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conference_id' => 'setConferenceId',
        'account_id' => 'setAccountId',
        'alias' => 'setAlias',
        'play_beep' => 'setPlayBeep',
        'record' => 'setRecord',
        'status' => 'setStatus',
        'wait_url' => 'setWaitUrl',
        'action_url' => 'setActionUrl',
        'status_callback_url' => 'setStatusCallbackUrl',
        'subresource_uris' => 'setSubresourceUris'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conference_id' => 'getConferenceId',
        'account_id' => 'getAccountId',
        'alias' => 'getAlias',
        'play_beep' => 'getPlayBeep',
        'record' => 'getRecord',
        'status' => 'getStatus',
        'wait_url' => 'getWaitUrl',
        'action_url' => 'getActionUrl',
        'status_callback_url' => 'getStatusCallbackUrl',
        'subresource_uris' => 'getSubresourceUris'
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

    const PLAY_BEEP_ALWAYS = 'always';
    const PLAY_BEEP_NEVER = 'never';
    const PLAY_BEEP_ENTRY_ONLY = 'entryOnly';
    const PLAY_BEEP_EXIT_ONLY = 'exitOnly';
    const STATUS_CREATING = 'creating';
    const STATUS__EMPTY = 'empty';
    const STATUS_POPULATED = 'populated';
    const STATUS_IN_PROGRESS = 'inProgress';
    const STATUS_TERMINATED = 'terminated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlayBeepAllowableValues()
    {
        return [
            self::PLAY_BEEP_ALWAYS,
            self::PLAY_BEEP_NEVER,
            self::PLAY_BEEP_ENTRY_ONLY,
            self::PLAY_BEEP_EXIT_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS__EMPTY,
            self::STATUS_POPULATED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_TERMINATED,
        ];
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
        $this->container['conference_id'] = isset($data['conference_id']) ? $data['conference_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['play_beep'] = isset($data['play_beep']) ? $data['play_beep'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['wait_url'] = isset($data['wait_url']) ? $data['wait_url'] : null;
        $this->container['action_url'] = isset($data['action_url']) ? $data['action_url'] : null;
        $this->container['status_callback_url'] = isset($data['status_callback_url']) ? $data['status_callback_url'] : null;
        $this->container['subresource_uris'] = isset($data['subresource_uris']) ? $data['subresource_uris'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPlayBeepAllowableValues();
        if (!is_null($this->container['play_beep']) && !in_array($this->container['play_beep'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'play_beep', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @param string|null $conference_id A string that uniquely identifies this Conference resource.
     *
     * @return $this
     */
    public function setConferenceId($conference_id)
    {
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id ID of the account that created this Conference.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias A description for this Conference.
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets play_beep
     *
     * @return string|null
     */
    public function getPlayBeep()
    {
        return $this->container['play_beep'];
    }

    /**
     * Sets play_beep
     *
     * @param string|null $play_beep Setting that controls when a beep is played. One of: always, never, entryOnly, exitOnly. Defaults to always.
     *
     * @return $this
     */
    public function setPlayBeep($play_beep)
    {
        $allowedValues = $this->getPlayBeepAllowableValues();
        if (!is_null($play_beep) && !in_array($play_beep, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'play_beep', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['play_beep'] = $play_beep;

        return $this;
    }

    /**
     * Gets record
     *
     * @return bool|null
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param bool|null $record Flag indicating whether recording is enabled for this Conference.
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the Conference. One of: creating, empty, populated, inProgress, or terminated.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets wait_url
     *
     * @return string|null
     */
    public function getWaitUrl()
    {
        return $this->container['wait_url'];
    }

    /**
     * Sets wait_url
     *
     * @param string|null $wait_url URL referencing the audio file to be used as default wait music for the Conference when it is in the populated state.
     *
     * @return $this
     */
    public function setWaitUrl($wait_url)
    {
        $this->container['wait_url'] = $wait_url;

        return $this;
    }

    /**
     * Gets action_url
     *
     * @return string|null
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string|null $action_url URL invoked once the Conference is successfully created.
     *
     * @return $this
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets status_callback_url
     *
     * @return string|null
     */
    public function getStatusCallbackUrl()
    {
        return $this->container['status_callback_url'];
    }

    /**
     * Sets status_callback_url
     *
     * @param string|null $status_callback_url URL to inform that the Conference status has changed.
     *
     * @return $this
     */
    public function setStatusCallbackUrl($status_callback_url)
    {
        $this->container['status_callback_url'] = $status_callback_url;

        return $this;
    }

    /**
     * Gets subresource_uris
     *
     * @return object|null
     */
    public function getSubresourceUris()
    {
        return $this->container['subresource_uris'];
    }

    /**
     * Sets subresource_uris
     *
     * @param object|null $subresource_uris The list of subresources for this Conference. This includes participants and/or recordings.
     *
     * @return $this
     */
    public function setSubresourceUris($subresource_uris)
    {
        $this->container['subresource_uris'] = $subresource_uris;

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


