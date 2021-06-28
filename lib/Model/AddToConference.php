<?php
/**
 * AddToConference
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FreeClimb\Api\Model;
use \FreeClimb\Api\ObjectSerializer;

/**
 * AddToConference Class Doc Comment
 *
 * @category Class
 * @description The &#x60;AddToConference&#x60; command adds a Participant to a Conference. If this Participant currently is in another Conference, the Participant is first removed from that Conference. Two Call legs can be bridged together by creating a Conference and adding both Call legs to it via &#x60;AddToConference&#x60;.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddToConference extends PerclCommand
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddToConference';

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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
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
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['allow_call_control'] = $data['allow_call_control'] ?? null;
        $this->container['call_control_sequence'] = $data['call_control_sequence'] ?? null;
        $this->container['call_control_url'] = $data['call_control_url'] ?? null;
        $this->container['conference_id'] = $data['conference_id'] ?? null;
        $this->container['call_id'] = $data['call_id'] ?? null;
        $this->container['leave_conference_url'] = $data['leave_conference_url'] ?? null;
        $this->container['listen'] = $data['listen'] ?? null;
        $this->container['notification_url'] = $data['notification_url'] ?? null;
        $this->container['start_conf_on_enter'] = $data['start_conf_on_enter'] ?? null;
        $this->container['talk'] = $data['talk'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['conference_id'] === null) {
            $invalidProperties[] = "'conference_id' can't be null";
        }
        if ($this->container['call_id'] === null) {
            $invalidProperties[] = "'call_id' can't be null";
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
     * @param bool|null $allow_call_control If `true`, Call control will be enabled for this Participant's Call leg.
     *
     * @return self
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
     * @param string|null $call_control_sequence Defines a sequence of digits that, when entered by this caller, invokes the `callControlUrl`. Only digits plus '*', and '#' may be used.
     *
     * @return self
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
     * @param string|null $call_control_url URL to be invoked when this Participant enters the digit sequence defined in the `callControlSequence` attribute.
     *
     * @return self
     */
    public function setCallControlUrl($call_control_url)
    {
        $this->container['call_control_url'] = $call_control_url;

        return $this;
    }

    /**
     * Gets conference_id
     *
     * @return string
     */
    public function getConferenceId()
    {
        return $this->container['conference_id'];
    }

    /**
     * Sets conference_id
     *
     * @param string $conference_id ID of the Conference to which to add the Participant (Call leg). Conference must exist or an error will result.
     *
     * @return self
     */
    public function setConferenceId($conference_id)
    {
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets call_id
     *
     * @return bool
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param bool $call_id ID of the Call that will be added to the specified Conference. The Call must be in progress or an error will result. If the Call is part of an existing Conference, it is first removed from that Conference and is then moved to the new one.
     *
     * @return self
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
     * @param string|null $leave_conference_url URL to be invoked when the Participant leaves the Conference.
     *
     * @return self
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
     * @param bool|null $listen If `true`, the Participant joins the Conference with listen privileges. This may be modified later via the REST API or `SetListen` PerCL command.
     *
     * @return self
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
     * @param string|null $notification_url When the Participant enters the Conference, this URL will be invoked using an HTTP POST request with the standard request parameters.
     *
     * @return self
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
     * @param bool|null $start_conf_on_enter Flag that indicates whether a Conference starts upon entry of this particular Participant. This is usually set to `true` for moderators and `false` for all other Participants.
     *
     * @return self
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
     * @param bool|null $talk If `true`, the Participant joins the Conference with talk privileges. This may be modified later via the REST API or `SetTalk` PerCL command.
     *
     * @return self
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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


