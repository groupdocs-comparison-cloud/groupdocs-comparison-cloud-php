<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ComparisonRequestSettings.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
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
/*
 * ComparisonRequestSettings
 */

namespace GroupDocs\Comparison\Model;

use \ArrayAccess;
use \GroupDocs\Comparison\ObjectSerializer;

/*
 * ComparisonRequestSettings
 *
 * @description ComparisonRequestSettings dto
 */
class ComparisonRequestSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ComparisonRequestSettings";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'generateSummaryPage' => 'bool',
        'showDeletedContent' => 'bool',
        'styleChangeDetection' => 'bool',
        'insertedItemsStyle' => '\GroupDocs\Comparison\Model\StyleSettingsValues',
        'deletedItemsStyle' => '\GroupDocs\Comparison\Model\StyleSettingsValues',
        'styleChangedItemsStyle' => '\GroupDocs\Comparison\Model\StyleSettingsValues',
        'wordsSeparatorChars' => 'string[]',
        'useFramesForDelInsElements' => 'bool',
        'detailLevel' => 'string',
        'calculateComponentCoordinates' => 'bool',
        'cloneMetadata' => 'string',
        'metaData' => '\GroupDocs\Comparison\Model\ComparisonMetadataValues',
        'passwordSaveOption' => 'string',
        'password' => 'string',
        'markDeletedInsertedContentDeep' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'generateSummaryPage' => null,
        'showDeletedContent' => null,
        'styleChangeDetection' => null,
        'insertedItemsStyle' => null,
        'deletedItemsStyle' => null,
        'styleChangedItemsStyle' => null,
        'wordsSeparatorChars' => null,
        'useFramesForDelInsElements' => null,
        'detailLevel' => null,
        'calculateComponentCoordinates' => null,
        'cloneMetadata' => null,
        'metaData' => null,
        'passwordSaveOption' => null,
        'password' => null,
        'markDeletedInsertedContentDeep' => null
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
        'generateSummaryPage' => 'generateSummaryPage',
        'showDeletedContent' => 'showDeletedContent',
        'styleChangeDetection' => 'styleChangeDetection',
        'insertedItemsStyle' => 'insertedItemsStyle',
        'deletedItemsStyle' => 'deletedItemsStyle',
        'styleChangedItemsStyle' => 'styleChangedItemsStyle',
        'wordsSeparatorChars' => 'wordsSeparatorChars',
        'useFramesForDelInsElements' => 'useFramesForDelInsElements',
        'detailLevel' => 'detailLevel',
        'calculateComponentCoordinates' => 'calculateComponentCoordinates',
        'cloneMetadata' => 'cloneMetadata',
        'metaData' => 'metaData',
        'passwordSaveOption' => 'passwordSaveOption',
        'password' => 'password',
        'markDeletedInsertedContentDeep' => 'markDeletedInsertedContentDeep'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'generateSummaryPage' => 'setGenerateSummaryPage',
        'showDeletedContent' => 'setShowDeletedContent',
        'styleChangeDetection' => 'setStyleChangeDetection',
        'insertedItemsStyle' => 'setInsertedItemsStyle',
        'deletedItemsStyle' => 'setDeletedItemsStyle',
        'styleChangedItemsStyle' => 'setStyleChangedItemsStyle',
        'wordsSeparatorChars' => 'setWordsSeparatorChars',
        'useFramesForDelInsElements' => 'setUseFramesForDelInsElements',
        'detailLevel' => 'setDetailLevel',
        'calculateComponentCoordinates' => 'setCalculateComponentCoordinates',
        'cloneMetadata' => 'setCloneMetadata',
        'metaData' => 'setMetaData',
        'passwordSaveOption' => 'setPasswordSaveOption',
        'password' => 'setPassword',
        'markDeletedInsertedContentDeep' => 'setMarkDeletedInsertedContentDeep'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'generateSummaryPage' => 'getGenerateSummaryPage',
        'showDeletedContent' => 'getShowDeletedContent',
        'styleChangeDetection' => 'getStyleChangeDetection',
        'insertedItemsStyle' => 'getInsertedItemsStyle',
        'deletedItemsStyle' => 'getDeletedItemsStyle',
        'styleChangedItemsStyle' => 'getStyleChangedItemsStyle',
        'wordsSeparatorChars' => 'getWordsSeparatorChars',
        'useFramesForDelInsElements' => 'getUseFramesForDelInsElements',
        'detailLevel' => 'getDetailLevel',
        'calculateComponentCoordinates' => 'getCalculateComponentCoordinates',
        'cloneMetadata' => 'getCloneMetadata',
        'metaData' => 'getMetaData',
        'passwordSaveOption' => 'getPasswordSaveOption',
        'password' => 'getPassword',
        'markDeletedInsertedContentDeep' => 'getMarkDeletedInsertedContentDeep'
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
        $this->container['generateSummaryPage'] = isset($data['generateSummaryPage']) ? $data['generateSummaryPage'] : null;
        $this->container['showDeletedContent'] = isset($data['showDeletedContent']) ? $data['showDeletedContent'] : null;
        $this->container['styleChangeDetection'] = isset($data['styleChangeDetection']) ? $data['styleChangeDetection'] : null;
        $this->container['insertedItemsStyle'] = isset($data['insertedItemsStyle']) ? $data['insertedItemsStyle'] : null;
        $this->container['deletedItemsStyle'] = isset($data['deletedItemsStyle']) ? $data['deletedItemsStyle'] : null;
        $this->container['styleChangedItemsStyle'] = isset($data['styleChangedItemsStyle']) ? $data['styleChangedItemsStyle'] : null;
        $this->container['wordsSeparatorChars'] = isset($data['wordsSeparatorChars']) ? $data['wordsSeparatorChars'] : null;
        $this->container['useFramesForDelInsElements'] = isset($data['useFramesForDelInsElements']) ? $data['useFramesForDelInsElements'] : null;
        $this->container['detailLevel'] = isset($data['detailLevel']) ? $data['detailLevel'] : null;
        $this->container['calculateComponentCoordinates'] = isset($data['calculateComponentCoordinates']) ? $data['calculateComponentCoordinates'] : null;
        $this->container['cloneMetadata'] = isset($data['cloneMetadata']) ? $data['cloneMetadata'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['passwordSaveOption'] = isset($data['passwordSaveOption']) ? $data['passwordSaveOption'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['markDeletedInsertedContentDeep'] = isset($data['markDeletedInsertedContentDeep']) ? $data['markDeletedInsertedContentDeep'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['generateSummaryPage'] === null) {
            $invalidProperties[] = "'generateSummaryPage' can't be null";
        }
        if ($this->container['showDeletedContent'] === null) {
            $invalidProperties[] = "'showDeletedContent' can't be null";
        }
        if ($this->container['styleChangeDetection'] === null) {
            $invalidProperties[] = "'styleChangeDetection' can't be null";
        }
        if ($this->container['useFramesForDelInsElements'] === null) {
            $invalidProperties[] = "'useFramesForDelInsElements' can't be null";
        }
        if ($this->container['calculateComponentCoordinates'] === null) {
            $invalidProperties[] = "'calculateComponentCoordinates' can't be null";
        }
        if ($this->container['markDeletedInsertedContentDeep'] === null) {
            $invalidProperties[] = "'markDeletedInsertedContentDeep' can't be null";
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

        if ($this->container['generateSummaryPage'] === null) {
            return false;
        }
        if ($this->container['showDeletedContent'] === null) {
            return false;
        }
        if ($this->container['styleChangeDetection'] === null) {
            return false;
        }
        if ($this->container['useFramesForDelInsElements'] === null) {
            return false;
        }
        if ($this->container['calculateComponentCoordinates'] === null) {
            return false;
        }
        if ($this->container['markDeletedInsertedContentDeep'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets generateSummaryPage
     *
     * @return bool
     */
    public function getGenerateSummaryPage()
    {
        return $this->container['generateSummaryPage'];
    }

    /*
     * Sets generateSummaryPage
     *
     * @param bool $generateSummaryPage The generate summary page
     *
     * @return $this
     */
    public function setGenerateSummaryPage($generateSummaryPage)
    {
        $this->container['generateSummaryPage'] = $generateSummaryPage;

        return $this;
    }

    /*
     * Gets showDeletedContent
     *
     * @return bool
     */
    public function getShowDeletedContent()
    {
        return $this->container['showDeletedContent'];
    }

    /*
     * Sets showDeletedContent
     *
     * @param bool $showDeletedContent The show deleted content
     *
     * @return $this
     */
    public function setShowDeletedContent($showDeletedContent)
    {
        $this->container['showDeletedContent'] = $showDeletedContent;

        return $this;
    }

    /*
     * Gets styleChangeDetection
     *
     * @return bool
     */
    public function getStyleChangeDetection()
    {
        return $this->container['styleChangeDetection'];
    }

    /*
     * Sets styleChangeDetection
     *
     * @param bool $styleChangeDetection The style change detection
     *
     * @return $this
     */
    public function setStyleChangeDetection($styleChangeDetection)
    {
        $this->container['styleChangeDetection'] = $styleChangeDetection;

        return $this;
    }

    /*
     * Gets insertedItemsStyle
     *
     * @return \GroupDocs\Comparison\Model\StyleSettingsValues
     */
    public function getInsertedItemsStyle()
    {
        return $this->container['insertedItemsStyle'];
    }

    /*
     * Sets insertedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\StyleSettingsValues $insertedItemsStyle The inserted items style
     *
     * @return $this
     */
    public function setInsertedItemsStyle($insertedItemsStyle)
    {
        $this->container['insertedItemsStyle'] = $insertedItemsStyle;

        return $this;
    }

    /*
     * Gets deletedItemsStyle
     *
     * @return \GroupDocs\Comparison\Model\StyleSettingsValues
     */
    public function getDeletedItemsStyle()
    {
        return $this->container['deletedItemsStyle'];
    }

    /*
     * Sets deletedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\StyleSettingsValues $deletedItemsStyle The deleted items style
     *
     * @return $this
     */
    public function setDeletedItemsStyle($deletedItemsStyle)
    {
        $this->container['deletedItemsStyle'] = $deletedItemsStyle;

        return $this;
    }

    /*
     * Gets styleChangedItemsStyle
     *
     * @return \GroupDocs\Comparison\Model\StyleSettingsValues
     */
    public function getStyleChangedItemsStyle()
    {
        return $this->container['styleChangedItemsStyle'];
    }

    /*
     * Sets styleChangedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\StyleSettingsValues $styleChangedItemsStyle The style changed items style
     *
     * @return $this
     */
    public function setStyleChangedItemsStyle($styleChangedItemsStyle)
    {
        $this->container['styleChangedItemsStyle'] = $styleChangedItemsStyle;

        return $this;
    }

    /*
     * Gets wordsSeparatorChars
     *
     * @return string[]
     */
    public function getWordsSeparatorChars()
    {
        return $this->container['wordsSeparatorChars'];
    }

    /*
     * Sets wordsSeparatorChars
     *
     * @param string[] $wordsSeparatorChars The words separator chars
     *
     * @return $this
     */
    public function setWordsSeparatorChars($wordsSeparatorChars)
    {
        $this->container['wordsSeparatorChars'] = $wordsSeparatorChars;

        return $this;
    }

    /*
     * Gets useFramesForDelInsElements
     *
     * @return bool
     */
    public function getUseFramesForDelInsElements()
    {
        return $this->container['useFramesForDelInsElements'];
    }

    /*
     * Sets useFramesForDelInsElements
     *
     * @param bool $useFramesForDelInsElements The use frames for delete ins elements
     *
     * @return $this
     */
    public function setUseFramesForDelInsElements($useFramesForDelInsElements)
    {
        $this->container['useFramesForDelInsElements'] = $useFramesForDelInsElements;

        return $this;
    }

    /*
     * Gets detailLevel
     *
     * @return string
     */
    public function getDetailLevel()
    {
        return $this->container['detailLevel'];
    }

    /*
     * Sets detailLevel
     *
     * @param string $detailLevel The detail level
     *
     * @return $this
     */
    public function setDetailLevel($detailLevel)
    {
        $this->container['detailLevel'] = $detailLevel;

        return $this;
    }

    /*
     * Gets calculateComponentCoordinates
     *
     * @return bool
     */
    public function getCalculateComponentCoordinates()
    {
        return $this->container['calculateComponentCoordinates'];
    }

    /*
     * Sets calculateComponentCoordinates
     *
     * @param bool $calculateComponentCoordinates The calculate component coordinates
     *
     * @return $this
     */
    public function setCalculateComponentCoordinates($calculateComponentCoordinates)
    {
        $this->container['calculateComponentCoordinates'] = $calculateComponentCoordinates;

        return $this;
    }

    /*
     * Gets cloneMetadata
     *
     * @return string
     */
    public function getCloneMetadata()
    {
        return $this->container['cloneMetadata'];
    }

    /*
     * Sets cloneMetadata
     *
     * @param string $cloneMetadata The clone metadata
     *
     * @return $this
     */
    public function setCloneMetadata($cloneMetadata)
    {
        $this->container['cloneMetadata'] = $cloneMetadata;

        return $this;
    }

    /*
     * Gets metaData
     *
     * @return \GroupDocs\Comparison\Model\ComparisonMetadataValues
     */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /*
     * Sets metaData
     *
     * @param \GroupDocs\Comparison\Model\ComparisonMetadataValues $metaData The metadata
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;

        return $this;
    }

    /*
     * Gets passwordSaveOption
     *
     * @return string
     */
    public function getPasswordSaveOption()
    {
        return $this->container['passwordSaveOption'];
    }

    /*
     * Sets passwordSaveOption
     *
     * @param string $passwordSaveOption The password save option
     *
     * @return $this
     */
    public function setPasswordSaveOption($passwordSaveOption)
    {
        $this->container['passwordSaveOption'] = $passwordSaveOption;

        return $this;
    }

    /*
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password The password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets markDeletedInsertedContentDeep
     *
     * @return bool
     */
    public function getMarkDeletedInsertedContentDeep()
    {
        return $this->container['markDeletedInsertedContentDeep'];
    }

    /*
     * Sets markDeletedInsertedContentDeep
     *
     * @param bool $markDeletedInsertedContentDeep The mark deleted inserted content deep
     *
     * @return $this
     */
    public function setMarkDeletedInsertedContentDeep($markDeletedInsertedContentDeep)
    {
        $this->container['markDeletedInsertedContentDeep'] = $markDeletedInsertedContentDeep;

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


