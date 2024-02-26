<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ChangeInfo.php">
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
 * ChangeInfo
 *
 * @description ChangeInfo Object fields
 */
class ChangeInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ChangeInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'comparisonAction' => 'string',
        'type' => 'string',
        'text' => 'string',
        'targetText' => 'string',
        'authors' => 'string[]',
        'styleChangeInfo' => '\GroupDocs\Comparison\Model\StyleChangeInfo[]',
        'pageInfo' => '\GroupDocs\Comparison\Model\PageInfo',
        'box' => '\GroupDocs\Comparison\Model\Rectangle'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'comparisonAction' => null,
        'type' => null,
        'text' => null,
        'targetText' => null,
        'authors' => null,
        'styleChangeInfo' => null,
        'pageInfo' => null,
        'box' => null
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
        'comparisonAction' => 'ComparisonAction',
        'type' => 'Type',
        'text' => 'Text',
        'targetText' => 'TargetText',
        'authors' => 'Authors',
        'styleChangeInfo' => 'StyleChangeInfo',
        'pageInfo' => 'PageInfo',
        'box' => 'Box'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'comparisonAction' => 'setComparisonAction',
        'type' => 'setType',
        'text' => 'setText',
        'targetText' => 'setTargetText',
        'authors' => 'setAuthors',
        'styleChangeInfo' => 'setStyleChangeInfo',
        'pageInfo' => 'setPageInfo',
        'box' => 'setBox'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'comparisonAction' => 'getComparisonAction',
        'type' => 'getType',
        'text' => 'getText',
        'targetText' => 'getTargetText',
        'authors' => 'getAuthors',
        'styleChangeInfo' => 'getStyleChangeInfo',
        'pageInfo' => 'getPageInfo',
        'box' => 'getBox'
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

    const COMPARISON_ACTION_NONE = 'None';
    const COMPARISON_ACTION_ACCEPT = 'Accept';
    const COMPARISON_ACTION_REJECT = 'Reject';
    const TYPE_NONE = 'None';
    const TYPE_MODIFIED = 'Modified';
    const TYPE_INSERTED = 'Inserted';
    const TYPE_DELETED = 'Deleted';
    const TYPE_ADDED = 'Added';
    const TYPE_NOT_MODIFIED = 'NotModified';
    const TYPE_STYLE_CHANGED = 'StyleChanged';
    const TYPE_RESIZED = 'Resized';
    const TYPE_MOVED = 'Moved';
    const TYPE_MOVED_AND_RESIZED = 'MovedAndResized';
    const TYPE_SHIFTED_AND_RESIZED = 'ShiftedAndResized';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComparisonActionAllowableValues()
    {
        return [
            self::COMPARISON_ACTION_NONE,
            self::COMPARISON_ACTION_ACCEPT,
            self::COMPARISON_ACTION_REJECT,
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
            self::TYPE_NONE,
            self::TYPE_MODIFIED,
            self::TYPE_INSERTED,
            self::TYPE_DELETED,
            self::TYPE_ADDED,
            self::TYPE_NOT_MODIFIED,
            self::TYPE_STYLE_CHANGED,
            self::TYPE_RESIZED,
            self::TYPE_MOVED,
            self::TYPE_MOVED_AND_RESIZED,
            self::TYPE_SHIFTED_AND_RESIZED,
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
        $this->container['comparisonAction'] = isset($data['comparisonAction']) ? $data['comparisonAction'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['targetText'] = isset($data['targetText']) ? $data['targetText'] : null;
        $this->container['authors'] = isset($data['authors']) ? $data['authors'] : null;
        $this->container['styleChangeInfo'] = isset($data['styleChangeInfo']) ? $data['styleChangeInfo'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['box'] = isset($data['box']) ? $data['box'] : null;
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
        if ($this->container['comparisonAction'] === null) {
            $invalidProperties[] = "'comparisonAction' can't be null";
        }
        $allowedValues = $this->getComparisonActionAllowableValues();
        if (!in_array($this->container['comparisonAction'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'comparisonAction', must be one of '%s'",
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

        if ($this->container['box'] === null) {
            $invalidProperties[] = "'box' can't be null";
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
        if ($this->container['comparisonAction'] === null) {
            return false;
        }
        $allowedValues = $this->getComparisonActionAllowableValues();
        if (!in_array($this->container['comparisonAction'], $allowedValues)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['box'] === null) {
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
     * @param int $id Id of change
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /*
     * Gets comparisonAction
     *
     * @return string
     */
    public function getComparisonAction()
    {
        return $this->container['comparisonAction'];
    }

    /*
     * Sets comparisonAction
     *
     * @param string $comparisonAction Action (accept or reject). This field shows comparison what to do with this change
     *
     * @return $this
     */
    public function setComparisonAction($comparisonAction)
    {
        $allowedValues = $this->getComparisonActionAllowableValues();
        if ((!is_numeric($comparisonAction) && !in_array($comparisonAction, $allowedValues)) || (is_numeric($comparisonAction) && !in_array($allowedValues[$comparisonAction], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'comparisonAction', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['comparisonAction'] = $comparisonAction;

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
     * @param string $type Type of change (Inserted, Deleted or StyleChanged)
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
     * @param string $text Text of changed element
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets targetText
     *
     * @return string
     */
    public function getTargetText()
    {
        return $this->container['targetText'];
    }

    /*
     * Sets targetText
     *
     * @param string $targetText Changed text of target doc
     *
     * @return $this
     */
    public function setTargetText($targetText)
    {
        $this->container['targetText'] = $targetText;

        return $this;
    }

    /*
     * Gets authors
     *
     * @return string[]
     */
    public function getAuthors()
    {
        return $this->container['authors'];
    }

    /*
     * Sets authors
     *
     * @param string[] $authors Array of authors who made this change (used for multi comparison)
     *
     * @return $this
     */
    public function setAuthors($authors)
    {
        $this->container['authors'] = $authors;

        return $this;
    }

    /*
     * Gets styleChangeInfo
     *
     * @return \GroupDocs\Comparison\Model\StyleChangeInfo[]
     */
    public function getStyleChangeInfo()
    {
        return $this->container['styleChangeInfo'];
    }

    /*
     * Sets styleChangeInfo
     *
     * @param \GroupDocs\Comparison\Model\StyleChangeInfo[] $styleChangeInfo Array of style changes
     *
     * @return $this
     */
    public function setStyleChangeInfo($styleChangeInfo)
    {
        $this->container['styleChangeInfo'] = $styleChangeInfo;

        return $this;
    }

    /*
     * Gets pageInfo
     *
     * @return \GroupDocs\Comparison\Model\PageInfo
     */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /*
     * Sets pageInfo
     *
     * @param \GroupDocs\Comparison\Model\PageInfo $pageInfo Page where current change is placed
     *
     * @return $this
     */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;

        return $this;
    }

    /*
     * Gets box
     *
     * @return \GroupDocs\Comparison\Model\Rectangle
     */
    public function getBox()
    {
        return $this->container['box'];
    }

    /*
     * Sets box
     *
     * @param \GroupDocs\Comparison\Model\Rectangle $box Coordinates of changed element
     *
     * @return $this
     */
    public function setBox($box)
    {
        $this->container['box'] = $box;

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


