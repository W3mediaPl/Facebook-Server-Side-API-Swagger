<?php
/**
 * ResponseErrorError
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
 * ResponseErrorError Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseErrorError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'response_error_error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'messages' => 'string',
'type' => 'string',
'fbtrace_id' => 'string',
'error_subcode' => 'string',
'is_transient' => 'string',
'error_user_title' => 'string',
'error_user_msg' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'messages' => null,
'type' => null,
'fbtrace_id' => null,
'error_subcode' => null,
'is_transient' => null,
'error_user_title' => null,
'error_user_msg' => null    ];

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
        'code' => 'code',
'messages' => 'messages',
'type' => 'type',
'fbtrace_id' => 'fbtrace_id',
'error_subcode' => 'error_subcode',
'is_transient' => 'is_transient',
'error_user_title' => 'error_user_title',
'error_user_msg' => 'error_user_msg'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'messages' => 'setMessages',
'type' => 'setType',
'fbtrace_id' => 'setFbtraceId',
'error_subcode' => 'setErrorSubcode',
'is_transient' => 'setIsTransient',
'error_user_title' => 'setErrorUserTitle',
'error_user_msg' => 'setErrorUserMsg'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'messages' => 'getMessages',
'type' => 'getType',
'fbtrace_id' => 'getFbtraceId',
'error_subcode' => 'getErrorSubcode',
'is_transient' => 'getIsTransient',
'error_user_title' => 'getErrorUserTitle',
'error_user_msg' => 'getErrorUserMsg'    ];

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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['fbtrace_id'] = isset($data['fbtrace_id']) ? $data['fbtrace_id'] : null;
        $this->container['error_subcode'] = isset($data['error_subcode']) ? $data['error_subcode'] : null;
        $this->container['is_transient'] = isset($data['is_transient']) ? $data['is_transient'] : null;
        $this->container['error_user_title'] = isset($data['error_user_title']) ? $data['error_user_title'] : null;
        $this->container['error_user_msg'] = isset($data['error_user_msg']) ? $data['error_user_msg'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return string
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param string $messages messages
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets fbtrace_id
     *
     * @return string
     */
    public function getFbtraceId()
    {
        return $this->container['fbtrace_id'];
    }

    /**
     * Sets fbtrace_id
     *
     * @param string $fbtrace_id fbtrace_id
     *
     * @return $this
     */
    public function setFbtraceId($fbtrace_id)
    {
        $this->container['fbtrace_id'] = $fbtrace_id;

        return $this;
    }

    /**
     * Gets error_subcode
     *
     * @return string
     */
    public function getErrorSubcode()
    {
        return $this->container['error_subcode'];
    }

    /**
     * Sets error_subcode
     *
     * @param string $error_subcode error_subcode
     *
     * @return $this
     */
    public function setErrorSubcode($error_subcode)
    {
        $this->container['error_subcode'] = $error_subcode;

        return $this;
    }

    /**
     * Gets is_transient
     *
     * @return string
     */
    public function getIsTransient()
    {
        return $this->container['is_transient'];
    }

    /**
     * Sets is_transient
     *
     * @param string $is_transient is_transient
     *
     * @return $this
     */
    public function setIsTransient($is_transient)
    {
        $this->container['is_transient'] = $is_transient;

        return $this;
    }

    /**
     * Gets error_user_title
     *
     * @return string
     */
    public function getErrorUserTitle()
    {
        return $this->container['error_user_title'];
    }

    /**
     * Sets error_user_title
     *
     * @param string $error_user_title error_user_title
     *
     * @return $this
     */
    public function setErrorUserTitle($error_user_title)
    {
        $this->container['error_user_title'] = $error_user_title;

        return $this;
    }

    /**
     * Gets error_user_msg
     *
     * @return string
     */
    public function getErrorUserMsg()
    {
        return $this->container['error_user_msg'];
    }

    /**
     * Sets error_user_msg
     *
     * @param string $error_user_msg error_user_msg
     *
     * @return $this
     */
    public function setErrorUserMsg($error_user_msg)
    {
        $this->container['error_user_msg'] = $error_user_msg;

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
