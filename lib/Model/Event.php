<?php
/**
 * Event
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Facebook Conversions API (for Web)
 *
 * The Conversions API (for web) allows advertisers to send web events from their servers directly to Facebook. Conversions API events are linked to a pixel and are processed like browser pixel events. This means that these conversion events are used in measurement, reporting, and optimization in the same way as browser pixel events.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: web_signals_integrations@fb.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Event Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event_name' => 'string',
'event_time' => 'int',
'event_source_url' => 'string',
'opt_out' => 'bool',
'event_id' => 'string',
'action_source' => 'string',
'user_data' => '\Swagger\Client\Model\UserData',
'custom_data' => '\Swagger\Client\Model\CustomData',
'data_processing_options' => 'string[]',
'data_processing_options_country' => 'int',
'data_processing_options_state' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'event_name' => null,
'event_time' => 'int64',
'event_source_url' => null,
'opt_out' => null,
'event_id' => null,
'action_source' => null,
'user_data' => null,
'custom_data' => null,
'data_processing_options' => null,
'data_processing_options_country' => null,
'data_processing_options_state' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'event_name' => 'event_name',
'event_time' => 'event_time',
'event_source_url' => 'event_source_url',
'opt_out' => 'opt_out',
'event_id' => 'event_id',
'action_source' => 'action_source',
'user_data' => 'user_data',
'custom_data' => 'custom_data',
'data_processing_options' => 'data_processing_options',
'data_processing_options_country' => 'data_processing_options_country',
'data_processing_options_state' => 'data_processing_options_state'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_name' => 'setEventName',
'event_time' => 'setEventTime',
'event_source_url' => 'setEventSourceUrl',
'opt_out' => 'setOptOut',
'event_id' => 'setEventId',
'action_source' => 'setActionSource',
'user_data' => 'setUserData',
'custom_data' => 'setCustomData',
'data_processing_options' => 'setDataProcessingOptions',
'data_processing_options_country' => 'setDataProcessingOptionsCountry',
'data_processing_options_state' => 'setDataProcessingOptionsState'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_name' => 'getEventName',
'event_time' => 'getEventTime',
'event_source_url' => 'getEventSourceUrl',
'opt_out' => 'getOptOut',
'event_id' => 'getEventId',
'action_source' => 'getActionSource',
'user_data' => 'getUserData',
'custom_data' => 'getCustomData',
'data_processing_options' => 'getDataProcessingOptions',
'data_processing_options_country' => 'getDataProcessingOptionsCountry',
'data_processing_options_state' => 'getDataProcessingOptionsState'    ];

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
        return self::$swaggerModelName;
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
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['event_source_url'] = isset($data['event_source_url']) ? $data['event_source_url'] : null;
        $this->container['opt_out'] = isset($data['opt_out']) ? $data['opt_out'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['action_source'] = isset($data['action_source']) ? $data['action_source'] : null;
        $this->container['user_data'] = isset($data['user_data']) ? $data['user_data'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
        $this->container['data_processing_options'] = isset($data['data_processing_options']) ? $data['data_processing_options'] : null;
        $this->container['data_processing_options_country'] = isset($data['data_processing_options_country']) ? $data['data_processing_options_country'] : null;
        $this->container['data_processing_options_state'] = isset($data['data_processing_options_state']) ? $data['data_processing_options_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        if ($this->container['event_time'] === null) {
            $invalidProperties[] = "'event_time' can't be null";
        }
        if ($this->container['action_source'] === null) {
            $invalidProperties[] = "'action_source' can't be null";
        }
        if ($this->container['user_data'] === null) {
            $invalidProperties[] = "'user_data' can't be null";
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
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name A Facebook pixel Standard Event or Custom Event name. This field is used to deduplicate events sent by both Facebook Pixel and Conversions API. event_id is also used in deduplication. For the same customer action, event from the browser event match event_name from the server event. If we find a match between events sent within 48 hours of each other, we only consider the first one. If a server and browser event arrive at approximately the same time (within 5 minutes of each other), we favor the browser event.
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return int
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param int $event_time A Unix timestamp in seconds indicating when the actual event occurred. The specified time may be earlier than the time you send the event to Facebook. This is to enable batch processing and server performance optimization. event_time can be up to 7 days before you send an event to Facebook. If any event_time in data is greater than 7 days in the past, we return an error for the entire request and process no events.
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets event_source_url
     *
     * @return string
     */
    public function getEventSourceUrl()
    {
        return $this->container['event_source_url'];
    }

    /**
     * Sets event_source_url
     *
     * @param string $event_source_url The browser URL where the event happened.
     *
     * @return $this
     */
    public function setEventSourceUrl($event_source_url)
    {
        $this->container['event_source_url'] = $event_source_url;

        return $this;
    }

    /**
     * Gets opt_out
     *
     * @return bool
     */
    public function getOptOut()
    {
        return $this->container['opt_out'];
    }

    /**
     * Sets opt_out
     *
     * @param bool $opt_out A flag that indicates we should not use this event for ads delivery optimization. If set to true, we only use the event for attribution.
     *
     * @return $this
     */
    public function setOptOut($opt_out)
    {
        $this->container['opt_out'] = $opt_out;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string $event_id This ID can be any unique string chosen by the advertiser. event_id is used to deduplicate events sent by both Facebook Pixel and Conversions API. event_name is also used in deduplication. For deduplication, the eventID from a browser event must match the event_id in the corresponding server event.
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets action_source
     *
     * @return string
     */
    public function getActionSource()
    {
        return $this->container['action_source'];
    }

    /**
     * Sets action_source
     *
     * @param string $action_source This field allows you to specify where your conversions occurred. Knowing where your events took place helps ensure your ads go to the right people. See docs for the allowable values. https://developers.facebook.com/docs/marketing-api/conversions-api/parameters/server-event#action-source
     *
     * @return $this
     */
    public function setActionSource($action_source)
    {
        $this->container['action_source'] = $action_source;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return \Swagger\Client\Model\UserData
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param \Swagger\Client\Model\UserData $user_data user_data
     *
     * @return $this
     */
    public function setUserData($user_data)
    {
        $this->container['user_data'] = $user_data;

        return $this;
    }

    /**
     * Gets custom_data
     *
     * @return \Swagger\Client\Model\CustomData
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     *
     * @param \Swagger\Client\Model\CustomData $custom_data custom_data
     *
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

        return $this;
    }

    /**
     * Gets data_processing_options
     *
     * @return string[]
     */
    public function getDataProcessingOptions()
    {
        return $this->container['data_processing_options'];
    }

    /**
     * Sets data_processing_options
     *
     * @param string[] $data_processing_options Processing options you would like to enable for a specific event. For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options.
     *
     * @return $this
     */
    public function setDataProcessingOptions($data_processing_options)
    {
        $this->container['data_processing_options'] = $data_processing_options;

        return $this;
    }

    /**
     * Gets data_processing_options_country
     *
     * @return int
     */
    public function getDataProcessingOptionsCountry()
    {
        return $this->container['data_processing_options_country'];
    }

    /**
     * Sets data_processing_options_country
     *
     * @param int $data_processing_options_country The country that you want to associate to this data processing option. If you set a country, you must also set a state. For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options
     *
     * @return $this
     */
    public function setDataProcessingOptionsCountry($data_processing_options_country)
    {
        $this->container['data_processing_options_country'] = $data_processing_options_country;

        return $this;
    }

    /**
     * Gets data_processing_options_state
     *
     * @return int
     */
    public function getDataProcessingOptionsState()
    {
        return $this->container['data_processing_options_state'];
    }

    /**
     * Sets data_processing_options_state
     *
     * @param int $data_processing_options_state The state that you want to associate with this data processing option. For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options.
     *
     * @return $this
     */
    public function setDataProcessingOptionsState($data_processing_options_state)
    {
        $this->container['data_processing_options_state'] = $data_processing_options_state;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
