<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PreviewOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * PreviewOptions
 *
 * @description Defines preview options
 */
class PreviewOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PreviewOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileInfo' => '\GroupDocs\Comparison\Model\FileInfo',
        'format' => 'string',
        'outputFolder' => 'string',
        'width' => 'int',
        'height' => 'int',
        'pageNumbers' => 'int[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileInfo' => null,
        'format' => null,
        'outputFolder' => null,
        'width' => 'int32',
        'height' => 'int32',
        'pageNumbers' => 'int32'
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
        'fileInfo' => 'FileInfo',
        'format' => 'Format',
        'outputFolder' => 'OutputFolder',
        'width' => 'Width',
        'height' => 'Height',
        'pageNumbers' => 'PageNumbers'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileInfo' => 'setFileInfo',
        'format' => 'setFormat',
        'outputFolder' => 'setOutputFolder',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'pageNumbers' => 'setPageNumbers'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileInfo' => 'getFileInfo',
        'format' => 'getFormat',
        'outputFolder' => 'getOutputFolder',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'pageNumbers' => 'getPageNumbers'
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

    const FORMAT_JPEG = 'Jpeg';
    const FORMAT_PNG = 'Png';
    const FORMAT_BMP = 'Bmp';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_JPEG,
            self::FORMAT_PNG,
            self::FORMAT_BMP,
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
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['outputFolder'] = isset($data['outputFolder']) ? $data['outputFolder'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['pageNumbers'] = isset($data['pageNumbers']) ? $data['pageNumbers'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($this->container['format'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
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

        if ($this->container['format'] === null) {
            return false;
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($this->container['format'], $allowedValues)) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fileInfo
     *
     * @return \GroupDocs\Comparison\Model\FileInfo
     */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /*
     * Sets fileInfo
     *
     * @param \GroupDocs\Comparison\Model\FileInfo $fileInfo Input file info
     *
     * @return $this
     */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;

        return $this;
    }

    /*
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /*
     * Sets format
     *
     * @param string $format Preview image format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if ((!is_numeric($format) && !in_array($format, $allowedValues)) || (is_numeric($format) && !in_array($allowedValues[$format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'format', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['format'] = $format;

        return $this;
    }

    /*
     * Gets outputFolder
     *
     * @return string
     */
    public function getOutputFolder()
    {
        return $this->container['outputFolder'];
    }

    /*
     * Sets outputFolder
     *
     * @param string $outputFolder Path to folder with preview results
     *
     * @return $this
     */
    public function setOutputFolder($outputFolder)
    {
        $this->container['outputFolder'] = $outputFolder;

        return $this;
    }

    /*
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Preview width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param int $height Preview height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets pageNumbers
     *
     * @return int[]
     */
    public function getPageNumbers()
    {
        return $this->container['pageNumbers'];
    }

    /*
     * Sets pageNumbers
     *
     * @param int[] $pageNumbers Page numbers that will be previewed.
     *
     * @return $this
     */
    public function setPageNumbers($pageNumbers)
    {
        $this->container['pageNumbers'] = $pageNumbers;

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


