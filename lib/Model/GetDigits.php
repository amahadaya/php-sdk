<?php
/**
 * GetDigits
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
 * GetDigits Class Doc Comment
 *
 * @category Class
 * @description The &#x60;GetDigits&#x60; command collects DTMF inputs from the caller. It is only supported only when there is a single party on the Call. &#x60;GetDigits&#x60; is a Terminal Command — any actions following it are never executed. When the Caller is done entering the digits, FreeClimb submits that data to the provided &#x60;actionUrl&#x60; using an HTTP POST request. Your server will be required to respond to the FreeClimb Webhook with PerCL to continue handling the call.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetDigits extends PerclCommand
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetDigits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'digit_timeout_ms' => 'int',
        'finish_on_key' => 'string',
        'flush_buffer' => 'bool',
        'initial_timeout_ms' => 'string',
        'max_digits' => 'int',
        'min_digits' => 'int',
        'prompts' => '\FreeClimb\Api\Model\PerclCommand[]',
        'privacy_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_url' => null,
        'digit_timeout_ms' => null,
        'finish_on_key' => null,
        'flush_buffer' => null,
        'initial_timeout_ms' => null,
        'max_digits' => null,
        'min_digits' => null,
        'prompts' => null,
        'privacy_mode' => null
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
        'action_url' => 'actionUrl',
        'digit_timeout_ms' => 'digitTimeoutMs',
        'finish_on_key' => 'finishOnKey',
        'flush_buffer' => 'flushBuffer',
        'initial_timeout_ms' => 'initialTimeoutMs',
        'max_digits' => 'maxDigits',
        'min_digits' => 'minDigits',
        'prompts' => 'prompts',
        'privacy_mode' => 'privacyMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'digit_timeout_ms' => 'setDigitTimeoutMs',
        'finish_on_key' => 'setFinishOnKey',
        'flush_buffer' => 'setFlushBuffer',
        'initial_timeout_ms' => 'setInitialTimeoutMs',
        'max_digits' => 'setMaxDigits',
        'min_digits' => 'setMinDigits',
        'prompts' => 'setPrompts',
        'privacy_mode' => 'setPrivacyMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'digit_timeout_ms' => 'getDigitTimeoutMs',
        'finish_on_key' => 'getFinishOnKey',
        'flush_buffer' => 'getFlushBuffer',
        'initial_timeout_ms' => 'getInitialTimeoutMs',
        'max_digits' => 'getMaxDigits',
        'min_digits' => 'getMinDigits',
        'prompts' => 'getPrompts',
        'privacy_mode' => 'getPrivacyMode'
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

        $this->container['action_url'] = $data['action_url'] ?? null;
        $this->container['digit_timeout_ms'] = $data['digit_timeout_ms'] ?? null;
        $this->container['finish_on_key'] = $data['finish_on_key'] ?? null;
        $this->container['flush_buffer'] = $data['flush_buffer'] ?? null;
        $this->container['initial_timeout_ms'] = $data['initial_timeout_ms'] ?? null;
        $this->container['max_digits'] = $data['max_digits'] ?? null;
        $this->container['min_digits'] = $data['min_digits'] ?? null;
        $this->container['prompts'] = $data['prompts'] ?? null;
        $this->container['privacy_mode'] = $data['privacy_mode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['action_url'] === null) {
            $invalidProperties[] = "'action_url' can't be null";
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
     * Gets action_url
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string $action_url When the Caller has finished entering digits, FreeClimb will make an HTTP POST request to this URL. A PerCL response is expected to continue handling the Call. Make sure to keep “http://“ in the URL.
     *
     * @return self
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets digit_timeout_ms
     *
     * @return int|null
     */
    public function getDigitTimeoutMs()
    {
        return $this->container['digit_timeout_ms'];
    }

    /**
     * Sets digit_timeout_ms
     *
     * @param int|null $digit_timeout_ms Maximum time in milliseconds that FreeClimb will wait for the Caller to press any digit after the last digit entered, before making a determination that a `timeout` has occurred and moving on to make the request to the actionUrl to submit the results of the `GetDigits` command. This timeout interval begins and resets after each digit entered.
     *
     * @return self
     */
    public function setDigitTimeoutMs($digit_timeout_ms)
    {
        $this->container['digit_timeout_ms'] = $digit_timeout_ms;

        return $this;
    }

    /**
     * Gets finish_on_key
     *
     * @return string|null
     */
    public function getFinishOnKey()
    {
        return $this->container['finish_on_key'];
    }

    /**
     * Sets finish_on_key
     *
     * @param string|null $finish_on_key Digit that causes the input sequence to be deemed complete. This attribute defers to the `timeout` attribute – so, if a `timeout` occurs, then the command terminates regardless of the value of `finishOnKey`.
     *
     * @return self
     */
    public function setFinishOnKey($finish_on_key)
    {
        $this->container['finish_on_key'] = $finish_on_key;

        return $this;
    }

    /**
     * Gets flush_buffer
     *
     * @return bool|null
     */
    public function getFlushBuffer()
    {
        return $this->container['flush_buffer'];
    }

    /**
     * Sets flush_buffer
     *
     * @param bool|null $flush_buffer If set to true, the FreeClimb platform starts with an empty DTMF buffer to store the digits entered by the caller. If set to false, FreeClimb will append the user inputs to the end of the existing digits buffer and will return digits from the start of the digits buffer.
     *
     * @return self
     */
    public function setFlushBuffer($flush_buffer)
    {
        $this->container['flush_buffer'] = $flush_buffer;

        return $this;
    }

    /**
     * Gets initial_timeout_ms
     *
     * @return string|null
     */
    public function getInitialTimeoutMs()
    {
        return $this->container['initial_timeout_ms'];
    }

    /**
     * Sets initial_timeout_ms
     *
     * @param string|null $initial_timeout_ms Maximum time in milliseconds that FreeClimb will wait for the Caller to press the first digit before making a determination that a `timeout` has occurred and moving on to make the request to the `actionUrl` to submit the results of the `GetDigits` command. This timeout interval begins when all nested commands have been fully executed.
     *
     * @return self
     */
    public function setInitialTimeoutMs($initial_timeout_ms)
    {
        $this->container['initial_timeout_ms'] = $initial_timeout_ms;

        return $this;
    }

    /**
     * Gets max_digits
     *
     * @return int|null
     */
    public function getMaxDigits()
    {
        return $this->container['max_digits'];
    }

    /**
     * Sets max_digits
     *
     * @param int|null $max_digits Maximum number of digits expected in the input. If the terminating digit is not entered and the caller has entered the maximum number of digits allowed, the `GetDigits` command terminates regardless of the value of `finishOnKey`.
     *
     * @return self
     */
    public function setMaxDigits($max_digits)
    {
        $this->container['max_digits'] = $max_digits;

        return $this;
    }

    /**
     * Gets min_digits
     *
     * @return int|null
     */
    public function getMinDigits()
    {
        return $this->container['min_digits'];
    }

    /**
     * Sets min_digits
     *
     * @param int|null $min_digits Minimum number of digits expected in the input. If specified, FreeClimb will return the collected digits only if the Caller has entered at least that many digits.
     *
     * @return self
     */
    public function setMinDigits($min_digits)
    {
        $this->container['min_digits'] = $min_digits;

        return $this;
    }

    /**
     * Gets prompts
     *
     * @return \FreeClimb\Api\Model\PerclCommand[]|null
     */
    public function getPrompts()
    {
        return $this->container['prompts'];
    }

    /**
     * Sets prompts
     *
     * @param \FreeClimb\Api\Model\PerclCommand[]|null $prompts JSON array of PerCL commands to nest within the `GetDigits` command. The `Say`, `Play`, and `Pause` commands can be used. The nested actions are executed while FreeClimb is waiting for input from the Caller.
     *
     * @return self
     */
    public function setPrompts($prompts)
    {
        $this->container['prompts'] = $prompts;

        return $this;
    }

    /**
     * Gets privacy_mode
     *
     * @return bool|null
     */
    public function getPrivacyMode()
    {
        return $this->container['privacy_mode'];
    }

    /**
     * Sets privacy_mode
     *
     * @param bool|null $privacy_mode Parameter `privacyMode` will not log the `text` as required by PCI compliance.
     *
     * @return self
     */
    public function setPrivacyMode($privacy_mode)
    {
        $this->container['privacy_mode'] = $privacy_mode;

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


