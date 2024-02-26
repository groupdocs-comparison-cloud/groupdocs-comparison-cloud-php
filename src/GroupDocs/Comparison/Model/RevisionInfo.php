<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="RevisionInfo.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Comparison\Model;

use \ArrayAccess;
use \GroupDocs\Comparison\ObjectSerializer;

/*
 * RevisionInfo
 *
 * @description Provides information about one revision.
 */
class RevisionInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RevisionInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'action' => 'string',
        'text' => 'string',
        'author' => 'string',
        'type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'action' => null,
        'text' => null,
        'author' => null,
        'type' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'action' => 'Action',
        'text' => 'Text',
        'author' => 'Author',
        'type' => 'Type'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'action' => 'setAction',
        'text' => 'setText',
        'author' => 'setAuthor',
        'type' => 'setType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'action' => 'getAction',
        'text' => 'getText',
        'author' => 'getAuthor',
        'type' => 'getType'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ACTION_NONE = 'None';
    const ACTION_ACCEPT = 'Accept';
    const ACTION_REJECT = 'Reject';
    const TYPE_INSERTION = 'Insertion';
    const TYPE_DELETION = 'Deletion';
    const TYPE_FORMAT_CHANGE = 'FormatChange';
    const TYPE_STYLE_DEFINITION_CHANGE = 'StyleDefinitionChange';
    const TYPE_MOVING = 'Moving';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_NONE,
            self::ACTION_ACCEPT,
            self::ACTION_REJECT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INSERTION,
            self::TYPE_DELETION,
            self::TYPE_FORMAT_CHANGE,
            self::TYPE_STYLE_DEFINITION_CHANGE,
            self::TYPE_MOVING,
        ];
    }
    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($this->container['action'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['action'] === null) {
            return false;
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($this->container['action'], $allowedValues)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param int $id Id of revision
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /*
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /*
     * Sets action
     *
     * @param string $action Action (accept or reject). This field allows you to influence the display of the revision.
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if ((!is_numeric($action) && !in_array($action, $allowedValues)) || (is_numeric($action) && !in_array($allowedValues[$action], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'action', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['action'] = $action;

        return $this;
    }

    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text The text that is in revision.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /*
     * Sets author
     *
     * @param string $author Author.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /*
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param string $type RevisionHandler type, depending on the type the Action (accept or reject) logic changes.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if ((!is_numeric($type) && !in_array($type, $allowedValues)) || (is_numeric($type) && !in_array($allowedValues[$type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['type'] = $type;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


