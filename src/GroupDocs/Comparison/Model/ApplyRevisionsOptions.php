<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ApplyRevisionsOptions.php">
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
 * ApplyRevisionsOptions
 *
 * @description Options for apply revisions method
 */
class ApplyRevisionsOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ApplyRevisionsOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sourceFile' => '\GroupDocs\Comparison\Model\FileInfo',
        'revisions' => '\GroupDocs\Comparison\Model\RevisionInfo[]',
        'acceptAll' => 'bool',
        'rejectAll' => 'bool',
        'outputPath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sourceFile' => null,
        'revisions' => null,
        'acceptAll' => null,
        'rejectAll' => null,
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
        'revisions' => 'Revisions',
        'acceptAll' => 'AcceptAll',
        'rejectAll' => 'RejectAll',
        'outputPath' => 'OutputPath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceFile' => 'setSourceFile',
        'revisions' => 'setRevisions',
        'acceptAll' => 'setAcceptAll',
        'rejectAll' => 'setRejectAll',
        'outputPath' => 'setOutputPath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceFile' => 'getSourceFile',
        'revisions' => 'getRevisions',
        'acceptAll' => 'getAcceptAll',
        'rejectAll' => 'getRejectAll',
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
        $this->container['revisions'] = isset($data['revisions']) ? $data['revisions'] : null;
        $this->container['acceptAll'] = isset($data['acceptAll']) ? $data['acceptAll'] : null;
        $this->container['rejectAll'] = isset($data['rejectAll']) ? $data['rejectAll'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acceptAll'] === null) {
            $invalidProperties[] = "'acceptAll' can't be null";
        }
        if ($this->container['rejectAll'] === null) {
            $invalidProperties[] = "'rejectAll' can't be null";
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

        if ($this->container['acceptAll'] === null) {
            return false;
        }
        if ($this->container['rejectAll'] === null) {
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
     * Gets revisions
     *
     * @return \GroupDocs\Comparison\Model\RevisionInfo[]
     */
    public function getRevisions()
    {
        return $this->container['revisions'];
    }

    /*
     * Sets revisions
     *
     * @param \GroupDocs\Comparison\Model\RevisionInfo[] $revisions Revisions to apply or reject.
     *
     * @return $this
     */
    public function setRevisions($revisions)
    {
        $this->container['revisions'] = $revisions;

        return $this;
    }

    /*
     * Gets acceptAll
     *
     * @return bool
     */
    public function getAcceptAll()
    {
        return $this->container['acceptAll'];
    }

    /*
     * Sets acceptAll
     *
     * @param bool $acceptAll Indicates whether to apply all revisions in the document
     *
     * @return $this
     */
    public function setAcceptAll($acceptAll)
    {
        $this->container['acceptAll'] = $acceptAll;

        return $this;
    }

    /*
     * Gets rejectAll
     *
     * @return bool
     */
    public function getRejectAll()
    {
        return $this->container['rejectAll'];
    }

    /*
     * Sets rejectAll
     *
     * @param bool $rejectAll Indicates whether to reject all revisions in the document
     *
     * @return $this
     */
    public function setRejectAll($rejectAll)
    {
        $this->container['rejectAll'] = $rejectAll;

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


