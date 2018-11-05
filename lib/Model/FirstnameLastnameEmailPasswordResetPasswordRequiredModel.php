<?php
/**
 * FirstnameLastnameEmailPasswordResetPasswordRequiredModel
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
 * FirstnameLastnameEmailPasswordResetPasswordRequiredModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FirstnameLastnameEmailPasswordResetPasswordRequiredModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FirstnameLastnameEmailPasswordReset_password_requiredModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'password' => 'string',
        'reset_password_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'firstname' => null,
        'lastname' => null,
        'email' => null,
        'password' => null,
        'reset_password_required' => null
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'email' => 'email',
        'password' => 'password',
        'reset_password_required' => 'reset_password_required'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'reset_password_required' => 'setResetPasswordRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'reset_password_required' => 'getResetPasswordRequired'
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['reset_password_required'] = isset($data['reset_password_required']) ? $data['reset_password_required'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ((mb_strlen($this->container['firstname']) > 150)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['firstname']) < 1)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ((mb_strlen($this->container['lastname']) > 150)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['lastname']) < 1)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 200)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 200)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 6)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 6.";
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
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        if ((mb_strlen($firstname) > 150)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($firstname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be bigger than or equal to 1.');
        }

        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if ((mb_strlen($lastname) > 150)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($lastname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be bigger than or equal to 1.');
        }

        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 200)) {
            throw new \InvalidArgumentException('invalid length for $email when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be smaller than or equal to 200.');
        }
        if (!is_null($email) && (mb_strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be bigger than or equal to 3.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        if (!is_null($password) && (mb_strlen($password) > 200)) {
            throw new \InvalidArgumentException('invalid length for $password when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be smaller than or equal to 200.');
        }
        if (!is_null($password) && (mb_strlen($password) < 6)) {
            throw new \InvalidArgumentException('invalid length for $password when calling FirstnameLastnameEmailPasswordResetPasswordRequiredModel., must be bigger than or equal to 6.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets reset_password_required
     *
     * @return bool
     */
    public function getResetPasswordRequired()
    {
        return $this->container['reset_password_required'];
    }

    /**
     * Sets reset_password_required
     *
     * @param bool $reset_password_required reset_password_required
     *
     * @return $this
     */
    public function setResetPasswordRequired($reset_password_required)
    {
        $this->container['reset_password_required'] = $reset_password_required;

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

