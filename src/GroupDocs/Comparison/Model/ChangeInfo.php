<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ChangeInfo.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
        'comparisonTypeChanged' => 'string',
        'text' => 'string',
        'authors' => 'string[]',
        'styleChangeInfo' => '\GroupDocs\Comparison\Model\StyleChangeInfo[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'comparisonAction' => null,
        'comparisonTypeChanged' => null,
        'text' => null,
        'authors' => null,
        'styleChangeInfo' => null
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
        'comparisonTypeChanged' => 'ComparisonTypeChanged',
        'text' => 'Text',
        'authors' => 'Authors',
        'styleChangeInfo' => 'StyleChangeInfo'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'comparisonAction' => 'setComparisonAction',
        'comparisonTypeChanged' => 'setComparisonTypeChanged',
        'text' => 'setText',
        'authors' => 'setAuthors',
        'styleChangeInfo' => 'setStyleChangeInfo'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'comparisonAction' => 'getComparisonAction',
        'comparisonTypeChanged' => 'getComparisonTypeChanged',
        'text' => 'getText',
        'authors' => 'getAuthors',
        'styleChangeInfo' => 'getStyleChangeInfo'
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
        $this->container['comparisonTypeChanged'] = isset($data['comparisonTypeChanged']) ? $data['comparisonTypeChanged'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['authors'] = isset($data['authors']) ? $data['authors'] : null;
        $this->container['styleChangeInfo'] = isset($data['styleChangeInfo']) ? $data['styleChangeInfo'] : null;
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
        $this->container['comparisonAction'] = $comparisonAction;

        return $this;
    }

    /*
     * Gets comparisonTypeChanged
     *
     * @return string
     */
    public function getComparisonTypeChanged()
    {
        return $this->container['comparisonTypeChanged'];
    }

    /*
     * Sets comparisonTypeChanged
     *
     * @param string $comparisonTypeChanged Type of change (Inserted, Deleted or StyleChanged)
     *
     * @return $this
     */
    public function setComparisonTypeChanged($comparisonTypeChanged)
    {
        $this->container['comparisonTypeChanged'] = $comparisonTypeChanged;

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


