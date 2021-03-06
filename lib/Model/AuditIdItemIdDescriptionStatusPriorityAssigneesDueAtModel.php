<?php
/**
 * AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SafetyCulture API
 *
 * The SafetyCulture API gives you direct access to your data in the SafetyCulture platform.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
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
 * AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Audit_idItem_idDescriptionStatusPriorityAssigneesDue_atModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'audit_id' => 'string',
        'item_id' => 'string',
        'description' => 'string',
        'status' => 'float',
        'priority' => 'float',
        'assignees' => '\Swagger\Client\Model\TypeIdModel[]',
        'due_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audit_id' => null,
        'item_id' => null,
        'description' => null,
        'status' => null,
        'priority' => null,
        'assignees' => null,
        'due_at' => null
    ];

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
        'audit_id' => 'audit_id',
        'item_id' => 'item_id',
        'description' => 'description',
        'status' => 'status',
        'priority' => 'priority',
        'assignees' => 'assignees',
        'due_at' => 'due_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audit_id' => 'setAuditId',
        'item_id' => 'setItemId',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'priority' => 'setPriority',
        'assignees' => 'setAssignees',
        'due_at' => 'setDueAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audit_id' => 'getAuditId',
        'item_id' => 'getItemId',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'priority' => 'getPriority',
        'assignees' => 'getAssignees',
        'due_at' => 'getDueAt'
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
        $this->container['audit_id'] = isset($data['audit_id']) ? $data['audit_id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['assignees'] = isset($data['assignees']) ? $data['assignees'] : null;
        $this->container['due_at'] = isset($data['due_at']) ? $data['due_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 2000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
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
     * Gets audit_id
     *
     * @return string
     */
    public function getAuditId()
    {
        return $this->container['audit_id'];
    }

    /**
     * Sets audit_id
     *
     * @param string $audit_id audit_id
     *
     * @return $this
     */
    public function setAuditId($audit_id)
    {
        $this->container['audit_id'] = $audit_id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the Action to be taken/problem to be fixed
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AuditIdItemIdDescriptionStatusPriorityAssigneesDueAtModel., must be smaller than or equal to 2000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float $status The status of the Action e.g. To Do, Done...
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float $priority The priority of the Action e.g. Low, Medium, High
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets assignees
     *
     * @return \Swagger\Client\Model\TypeIdModel[]
     */
    public function getAssignees()
    {
        return $this->container['assignees'];
    }

    /**
     * Sets assignees
     *
     * @param \Swagger\Client\Model\TypeIdModel[] $assignees The users an Action is assigned to
     *
     * @return $this
     */
    public function setAssignees($assignees)
    {
        $this->container['assignees'] = $assignees;

        return $this;
    }

    /**
     * Gets due_at
     *
     * @return string
     */
    public function getDueAt()
    {
        return $this->container['due_at'];
    }

    /**
     * Sets due_at
     *
     * @param string $due_at due_at
     *
     * @return $this
     */
    public function setDueAt($due_at)
    {
        $this->container['due_at'] = $due_at;

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


