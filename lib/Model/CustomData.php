<?php
/**
 * CustomData
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
 * CustomData Class Doc Comment
 *
 * @category Class
 * @description An object that includes additional business data about the event which can be used for ads delivery optimization. If our predefined object properties don&#x27;t suit your needs, you can include your own, custom properties. Custom properties can be used with both standard and custom events, and can help you further define custom audiences.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'custom_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'float',
'currency' => 'string',
'content_name' => 'string',
'content_category' => 'string',
'content_ids' => 'string[]',
'contents' => '\Swagger\Client\Model\Content[]',
'content_type' => 'string',
'order_id' => 'string',
'predicted_ltv' => 'float',
'num_items' => 'int',
'search_string' => 'string',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value' => null,
'currency' => null,
'content_name' => null,
'content_category' => null,
'content_ids' => null,
'contents' => null,
'content_type' => null,
'order_id' => null,
'predicted_ltv' => null,
'num_items' => null,
'search_string' => null,
'status' => null    ];

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
        'value' => 'value',
'currency' => 'currency',
'content_name' => 'content_name',
'content_category' => 'content_category',
'content_ids' => 'content_ids',
'contents' => 'contents',
'content_type' => 'content_type',
'order_id' => 'order_id',
'predicted_ltv' => 'predicted_ltv',
'num_items' => 'num_items',
'search_string' => 'search_string',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
'currency' => 'setCurrency',
'content_name' => 'setContentName',
'content_category' => 'setContentCategory',
'content_ids' => 'setContentIds',
'contents' => 'setContents',
'content_type' => 'setContentType',
'order_id' => 'setOrderId',
'predicted_ltv' => 'setPredictedLtv',
'num_items' => 'setNumItems',
'search_string' => 'setSearchString',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
'currency' => 'getCurrency',
'content_name' => 'getContentName',
'content_category' => 'getContentCategory',
'content_ids' => 'getContentIds',
'contents' => 'getContents',
'content_type' => 'getContentType',
'order_id' => 'getOrderId',
'predicted_ltv' => 'getPredictedLtv',
'num_items' => 'getNumItems',
'search_string' => 'getSearchString',
'status' => 'getStatus'    ];

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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['content_name'] = isset($data['content_name']) ? $data['content_name'] : null;
        $this->container['content_category'] = isset($data['content_category']) ? $data['content_category'] : null;
        $this->container['content_ids'] = isset($data['content_ids']) ? $data['content_ids'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['predicted_ltv'] = isset($data['predicted_ltv']) ? $data['predicted_ltv'] : null;
        $this->container['num_items'] = isset($data['num_items']) ? $data['num_items'] : null;
        $this->container['search_string'] = isset($data['search_string']) ? $data['search_string'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value A numeric value associated with this event. This could be a monetary value or a value in some other metric.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency for the value specified, if applicable. Currency must be a valid ISO 4217 (https://en.wikipedia.org/wiki/ISO_4217) three digit currency code.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets content_name
     *
     * @return string
     */
    public function getContentName()
    {
        return $this->container['content_name'];
    }

    /**
     * Sets content_name
     *
     * @param string $content_name The name of the page or product associated with the event.
     *
     * @return $this
     */
    public function setContentName($content_name)
    {
        $this->container['content_name'] = $content_name;

        return $this;
    }

    /**
     * Gets content_category
     *
     * @return string
     */
    public function getContentCategory()
    {
        return $this->container['content_category'];
    }

    /**
     * Sets content_category
     *
     * @param string $content_category The category of the content associated with the event.
     *
     * @return $this
     */
    public function setContentCategory($content_category)
    {
        $this->container['content_category'] = $content_category;

        return $this;
    }

    /**
     * Gets content_ids
     *
     * @return string[]
     */
    public function getContentIds()
    {
        return $this->container['content_ids'];
    }

    /**
     * Sets content_ids
     *
     * @param string[] $content_ids The content IDs associated with the event, such as product SKUs for items in an AddToCart event: ['ABC123', 'XYZ789']. If content_type is a product, then your content IDs must be an array with a single string value. Otherwise, this array can contain any number of string values.
     *
     * @return $this
     */
    public function setContentIds($content_ids)
    {
        $this->container['content_ids'] = $content_ids;

        return $this;
    }

    /**
     * Gets contents
     *
     * @return \Swagger\Client\Model\Content[]
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param \Swagger\Client\Model\Content[] $contents A list of Content objects that contain the product IDs associated with the event plus information about the products. id, quantity, and item_price are available fields.
     *
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type It should be set to 'product' or 'product_group'. Use 'product', if the keys you send represent products. Sent keys could be content_ids or contents. Use product_group, if the keys you send in content_ids represent product groups. Product groups are used to distinguish products that are identical but have variations such as color, material, size or pattern.
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id The order ID for this transaction as a String.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets predicted_ltv
     *
     * @return float
     */
    public function getPredictedLtv()
    {
        return $this->container['predicted_ltv'];
    }

    /**
     * Sets predicted_ltv
     *
     * @param float $predicted_ltv The predicted lifetime value of a conversion event, as a String.
     *
     * @return $this
     */
    public function setPredictedLtv($predicted_ltv)
    {
        $this->container['predicted_ltv'] = $predicted_ltv;

        return $this;
    }

    /**
     * Gets num_items
     *
     * @return int
     */
    public function getNumItems()
    {
        return $this->container['num_items'];
    }

    /**
     * Sets num_items
     *
     * @param int $num_items Use only with InitiateCheckout events. The number of items that a user tries to buy during checkout.
     *
     * @return $this
     */
    public function setNumItems($num_items)
    {
        $this->container['num_items'] = $num_items;

        return $this;
    }

    /**
     * Gets search_string
     *
     * @return string
     */
    public function getSearchString()
    {
        return $this->container['search_string'];
    }

    /**
     * Sets search_string
     *
     * @param string $search_string Use only with Search events. A search query made by a user.
     *
     * @return $this
     */
    public function setSearchString($search_string)
    {
        $this->container['search_string'] = $search_string;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Use only with CompleteRegistration events. The status of the registration event
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
