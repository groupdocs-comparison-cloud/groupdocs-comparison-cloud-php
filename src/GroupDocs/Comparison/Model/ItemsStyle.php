<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ItemsStyle.php">
 *   Copyright (c) 2003-2021 Aspose Pty Ltd
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
 * ItemsStyle
 *
 * @description ItemsStyle Object fields
 */
class ItemsStyle implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ItemsStyle";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fontColor' => 'string',
        'highlightColor' => 'string',
        'beginSeparatorString' => 'string',
        'endSeparatorString' => 'string',
        'bold' => 'bool',
        'italic' => 'bool',
        'strikeThrough' => 'bool',
        'underline' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fontColor' => null,
        'highlightColor' => null,
        'beginSeparatorString' => null,
        'endSeparatorString' => null,
        'bold' => null,
        'italic' => null,
        'strikeThrough' => null,
        'underline' => null
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
        'fontColor' => 'FontColor',
        'highlightColor' => 'HighlightColor',
        'beginSeparatorString' => 'BeginSeparatorString',
        'endSeparatorString' => 'EndSeparatorString',
        'bold' => 'Bold',
        'italic' => 'Italic',
        'strikeThrough' => 'StrikeThrough',
        'underline' => 'Underline'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fontColor' => 'setFontColor',
        'highlightColor' => 'setHighlightColor',
        'beginSeparatorString' => 'setBeginSeparatorString',
        'endSeparatorString' => 'setEndSeparatorString',
        'bold' => 'setBold',
        'italic' => 'setItalic',
        'strikeThrough' => 'setStrikeThrough',
        'underline' => 'setUnderline'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fontColor' => 'getFontColor',
        'highlightColor' => 'getHighlightColor',
        'beginSeparatorString' => 'getBeginSeparatorString',
        'endSeparatorString' => 'getEndSeparatorString',
        'bold' => 'getBold',
        'italic' => 'getItalic',
        'strikeThrough' => 'getStrikeThrough',
        'underline' => 'getUnderline'
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
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['highlightColor'] = isset($data['highlightColor']) ? $data['highlightColor'] : null;
        $this->container['beginSeparatorString'] = isset($data['beginSeparatorString']) ? $data['beginSeparatorString'] : null;
        $this->container['endSeparatorString'] = isset($data['endSeparatorString']) ? $data['endSeparatorString'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['strikeThrough'] = isset($data['strikeThrough']) ? $data['strikeThrough'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bold'] === null) {
            $invalidProperties[] = "'bold' can't be null";
        }
        if ($this->container['italic'] === null) {
            $invalidProperties[] = "'italic' can't be null";
        }
        if ($this->container['strikeThrough'] === null) {
            $invalidProperties[] = "'strikeThrough' can't be null";
        }
        if ($this->container['underline'] === null) {
            $invalidProperties[] = "'underline' can't be null";
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

        if ($this->container['bold'] === null) {
            return false;
        }
        if ($this->container['italic'] === null) {
            return false;
        }
        if ($this->container['strikeThrough'] === null) {
            return false;
        }
        if ($this->container['underline'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fontColor
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /*
     * Sets fontColor
     *
     * @param string $fontColor Font color for changed components
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /*
     * Gets highlightColor
     *
     * @return string
     */
    public function getHighlightColor()
    {
        return $this->container['highlightColor'];
    }

    /*
     * Sets highlightColor
     *
     * @param string $highlightColor Highlight color for changed components
     *
     * @return $this
     */
    public function setHighlightColor($highlightColor)
    {
        $this->container['highlightColor'] = $highlightColor;

        return $this;
    }

    /*
     * Gets beginSeparatorString
     *
     * @return string
     */
    public function getBeginSeparatorString()
    {
        return $this->container['beginSeparatorString'];
    }

    /*
     * Sets beginSeparatorString
     *
     * @param string $beginSeparatorString Start tag for changed components
     *
     * @return $this
     */
    public function setBeginSeparatorString($beginSeparatorString)
    {
        $this->container['beginSeparatorString'] = $beginSeparatorString;

        return $this;
    }

    /*
     * Gets endSeparatorString
     *
     * @return string
     */
    public function getEndSeparatorString()
    {
        return $this->container['endSeparatorString'];
    }

    /*
     * Sets endSeparatorString
     *
     * @param string $endSeparatorString End tag for changed components
     *
     * @return $this
     */
    public function setEndSeparatorString($endSeparatorString)
    {
        $this->container['endSeparatorString'] = $endSeparatorString;

        return $this;
    }

    /*
     * Gets bold
     *
     * @return bool
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /*
     * Sets bold
     *
     * @param bool $bold Bold style for changed components
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /*
     * Gets italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /*
     * Sets italic
     *
     * @param bool $italic Italic style for changed components
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /*
     * Gets strikeThrough
     *
     * @return bool
     */
    public function getStrikeThrough()
    {
        return $this->container['strikeThrough'];
    }

    /*
     * Sets strikeThrough
     *
     * @param bool $strikeThrough Strike through style for changed components
     *
     * @return $this
     */
    public function setStrikeThrough($strikeThrough)
    {
        $this->container['strikeThrough'] = $strikeThrough;

        return $this;
    }

    /*
     * Gets underline
     *
     * @return bool
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /*
     * Sets underline
     *
     * @param bool $underline Underline style for changed components
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

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


