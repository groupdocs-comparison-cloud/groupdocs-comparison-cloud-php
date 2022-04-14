<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ComparisonOptions.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
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
 * ComparisonOptions
 *
 * @description Defines comparison options
 */
class ComparisonOptions implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ComparisonOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sourceFile' => '\GroupDocs\Comparison\Model\FileInfo',
        'targetFiles' => '\GroupDocs\Comparison\Model\FileInfo[]',
        'settings' => '\GroupDocs\Comparison\Model\Settings',
        'changeType' => 'string',
        'outputPath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sourceFile' => null,
        'targetFiles' => null,
        'settings' => null,
        'changeType' => null,
        'outputPath' => null
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
        'sourceFile' => 'SourceFile',
        'targetFiles' => 'TargetFiles',
        'settings' => 'Settings',
        'changeType' => 'ChangeType',
        'outputPath' => 'OutputPath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceFile' => 'setSourceFile',
        'targetFiles' => 'setTargetFiles',
        'settings' => 'setSettings',
        'changeType' => 'setChangeType',
        'outputPath' => 'setOutputPath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceFile' => 'getSourceFile',
        'targetFiles' => 'getTargetFiles',
        'settings' => 'getSettings',
        'changeType' => 'getChangeType',
        'outputPath' => 'getOutputPath'
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

    const CHANGE_TYPE_NONE = 'None';
    const CHANGE_TYPE_MODIFIED = 'Modified';
    const CHANGE_TYPE_INSERTED = 'Inserted';
    const CHANGE_TYPE_DELETED = 'Deleted';
    const CHANGE_TYPE_ADDED = 'Added';
    const CHANGE_TYPE_NOT_MODIFIED = 'NotModified';
    const CHANGE_TYPE_STYLE_CHANGED = 'StyleChanged';
    const CHANGE_TYPE_RESIZED = 'Resized';
    const CHANGE_TYPE_MOVED = 'Moved';
    const CHANGE_TYPE_MOVED_AND_RESIZED = 'MovedAndResized';
    const CHANGE_TYPE_SHIFTED_AND_RESIZED = 'ShiftedAndResized';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_NONE,
            self::CHANGE_TYPE_MODIFIED,
            self::CHANGE_TYPE_INSERTED,
            self::CHANGE_TYPE_DELETED,
            self::CHANGE_TYPE_ADDED,
            self::CHANGE_TYPE_NOT_MODIFIED,
            self::CHANGE_TYPE_STYLE_CHANGED,
            self::CHANGE_TYPE_RESIZED,
            self::CHANGE_TYPE_MOVED,
            self::CHANGE_TYPE_MOVED_AND_RESIZED,
            self::CHANGE_TYPE_SHIFTED_AND_RESIZED,
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
        $this->container['sourceFile'] = isset($data['sourceFile']) ? $data['sourceFile'] : null;
        $this->container['targetFiles'] = isset($data['targetFiles']) ? $data['targetFiles'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['changeType'] === null) {
            $invalidProperties[] = "'changeType' can't be null";
        }
        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!in_array($this->container['changeType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
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

        if ($this->container['changeType'] === null) {
            return false;
        }
        $allowedValues = $this->getChangeTypeAllowableValues();
        if (!in_array($this->container['changeType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets sourceFile
     *
     * @return \GroupDocs\Comparison\Model\FileInfo
     */
    public function getSourceFile()
    {
        return $this->container['sourceFile'];
    }

    /*
     * Sets sourceFile
     *
     * @param \GroupDocs\Comparison\Model\FileInfo $sourceFile Information about source file
     *
     * @return $this
     */
    public function setSourceFile($sourceFile)
    {
        $this->container['sourceFile'] = $sourceFile;

        return $this;
    }

    /*
     * Gets targetFiles
     *
     * @return \GroupDocs\Comparison\Model\FileInfo[]
     */
    public function getTargetFiles()
    {
        return $this->container['targetFiles'];
    }

    /*
     * Sets targetFiles
     *
     * @param \GroupDocs\Comparison\Model\FileInfo[] $targetFiles Information about target file(s)
     *
     * @return $this
     */
    public function setTargetFiles($targetFiles)
    {
        $this->container['targetFiles'] = $targetFiles;

        return $this;
    }

    /*
     * Gets settings
     *
     * @return \GroupDocs\Comparison\Model\Settings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /*
     * Sets settings
     *
     * @param \GroupDocs\Comparison\Model\Settings $settings Comparison settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /*
     * Gets changeType
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /*
     * Sets changeType
     *
     * @param string $changeType Changes type. Used only for Changes resource(/comparison/changes)
     *
     * @return $this
     */
    public function setChangeType($changeType)
    {
        $allowedValues = $this->getChangeTypeAllowableValues();
        if ((!is_numeric($changeType) && !in_array($changeType, $allowedValues)) || (is_numeric($changeType) && !in_array($allowedValues[$changeType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'changeType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['changeType'] = $changeType;

        return $this;
    }

    /*
     * Gets outputPath
     *
     * @return string
     */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /*
     * Sets outputPath
     *
     * @param string $outputPath Path to the resultant document (if not specified the document will not be saved)
     *
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;

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


