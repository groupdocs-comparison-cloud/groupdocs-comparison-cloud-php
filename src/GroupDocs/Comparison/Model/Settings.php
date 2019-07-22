<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="Settings.php">
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
 * Settings
 *
 * @description Defines comparison process additional settings
 */
class Settings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Settings";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'generateSummaryPage' => 'bool',
        'showDeletedContent' => 'bool',
        'styleChangeDetection' => 'bool',
        'insertedItemsStyle' => '\GroupDocs\Comparison\Model\ItemsStyle',
        'deletedItemsStyle' => '\GroupDocs\Comparison\Model\ItemsStyle',
        'styleChangedItemsStyle' => '\GroupDocs\Comparison\Model\ItemsStyle',
        'wordsSeparatorChars' => 'string[]',
        'detailLevel' => 'string',
        'useFramesForDelInsElements' => 'bool',
        'calculateComponentCoordinates' => 'bool',
        'markDeletedInsertedContentDeep' => 'bool',
        'cloneMetadata' => 'string',
        'metaData' => '\GroupDocs\Comparison\Model\Metadata',
        'passwordSaveOption' => 'string',
        'password' => 'string',
        'diagramMasterSetting' => '\GroupDocs\Comparison\Model\DiagramMasterSetting',
        'originalSize' => '\GroupDocs\Comparison\Model\OriginalSize'
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
        'detailLevel' => null,
        'useFramesForDelInsElements' => null,
        'calculateComponentCoordinates' => null,
        'markDeletedInsertedContentDeep' => null,
        'cloneMetadata' => null,
        'metaData' => null,
        'passwordSaveOption' => null,
        'password' => null,
        'diagramMasterSetting' => null,
        'originalSize' => null
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
        'generateSummaryPage' => 'GenerateSummaryPage',
        'showDeletedContent' => 'ShowDeletedContent',
        'styleChangeDetection' => 'StyleChangeDetection',
        'insertedItemsStyle' => 'InsertedItemsStyle',
        'deletedItemsStyle' => 'DeletedItemsStyle',
        'styleChangedItemsStyle' => 'StyleChangedItemsStyle',
        'wordsSeparatorChars' => 'WordsSeparatorChars',
        'detailLevel' => 'DetailLevel',
        'useFramesForDelInsElements' => 'UseFramesForDelInsElements',
        'calculateComponentCoordinates' => 'CalculateComponentCoordinates',
        'markDeletedInsertedContentDeep' => 'MarkDeletedInsertedContentDeep',
        'cloneMetadata' => 'CloneMetadata',
        'metaData' => 'MetaData',
        'passwordSaveOption' => 'PasswordSaveOption',
        'password' => 'Password',
        'diagramMasterSetting' => 'DiagramMasterSetting',
        'originalSize' => 'OriginalSize'
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
        'detailLevel' => 'setDetailLevel',
        'useFramesForDelInsElements' => 'setUseFramesForDelInsElements',
        'calculateComponentCoordinates' => 'setCalculateComponentCoordinates',
        'markDeletedInsertedContentDeep' => 'setMarkDeletedInsertedContentDeep',
        'cloneMetadata' => 'setCloneMetadata',
        'metaData' => 'setMetaData',
        'passwordSaveOption' => 'setPasswordSaveOption',
        'password' => 'setPassword',
        'diagramMasterSetting' => 'setDiagramMasterSetting',
        'originalSize' => 'setOriginalSize'
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
        'detailLevel' => 'getDetailLevel',
        'useFramesForDelInsElements' => 'getUseFramesForDelInsElements',
        'calculateComponentCoordinates' => 'getCalculateComponentCoordinates',
        'markDeletedInsertedContentDeep' => 'getMarkDeletedInsertedContentDeep',
        'cloneMetadata' => 'getCloneMetadata',
        'metaData' => 'getMetaData',
        'passwordSaveOption' => 'getPasswordSaveOption',
        'password' => 'getPassword',
        'diagramMasterSetting' => 'getDiagramMasterSetting',
        'originalSize' => 'getOriginalSize'
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
        $this->container['detailLevel'] = isset($data['detailLevel']) ? $data['detailLevel'] : null;
        $this->container['useFramesForDelInsElements'] = isset($data['useFramesForDelInsElements']) ? $data['useFramesForDelInsElements'] : null;
        $this->container['calculateComponentCoordinates'] = isset($data['calculateComponentCoordinates']) ? $data['calculateComponentCoordinates'] : null;
        $this->container['markDeletedInsertedContentDeep'] = isset($data['markDeletedInsertedContentDeep']) ? $data['markDeletedInsertedContentDeep'] : null;
        $this->container['cloneMetadata'] = isset($data['cloneMetadata']) ? $data['cloneMetadata'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['passwordSaveOption'] = isset($data['passwordSaveOption']) ? $data['passwordSaveOption'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['diagramMasterSetting'] = isset($data['diagramMasterSetting']) ? $data['diagramMasterSetting'] : null;
        $this->container['originalSize'] = isset($data['originalSize']) ? $data['originalSize'] : null;
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
     * @param bool $generateSummaryPage Indicates whether to add summary page to resultant document or not
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
     * @param bool $showDeletedContent Indicates whether to show deleted components in resultant document or not
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
     * @param bool $styleChangeDetection Indicates whether to detect style changes or not
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
     * @return \GroupDocs\Comparison\Model\ItemsStyle
     */
    public function getInsertedItemsStyle()
    {
        return $this->container['insertedItemsStyle'];
    }

    /*
     * Sets insertedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\ItemsStyle $insertedItemsStyle Style for inserted components
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
     * @return \GroupDocs\Comparison\Model\ItemsStyle
     */
    public function getDeletedItemsStyle()
    {
        return $this->container['deletedItemsStyle'];
    }

    /*
     * Sets deletedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\ItemsStyle $deletedItemsStyle Style for deleted components
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
     * @return \GroupDocs\Comparison\Model\ItemsStyle
     */
    public function getStyleChangedItemsStyle()
    {
        return $this->container['styleChangedItemsStyle'];
    }

    /*
     * Sets styleChangedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\ItemsStyle $styleChangedItemsStyle Style for components with changed style
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
     * @param string[] $wordsSeparatorChars An array of delimiters to split text into words
     *
     * @return $this
     */
    public function setWordsSeparatorChars($wordsSeparatorChars)
    {
        $this->container['wordsSeparatorChars'] = $wordsSeparatorChars;

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
     * @param string $detailLevel Gets of sets the comparison detalisation level
     *
     * @return $this
     */
    public function setDetailLevel($detailLevel)
    {
        $this->container['detailLevel'] = $detailLevel;

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
     * @param bool $useFramesForDelInsElements Indicates whether to use frames for shapes in Word Processing and for rectangles in Image documents
     *
     * @return $this
     */
    public function setUseFramesForDelInsElements($useFramesForDelInsElements)
    {
        $this->container['useFramesForDelInsElements'] = $useFramesForDelInsElements;

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
     * @param bool $calculateComponentCoordinates Indicates whether to calculate coordinates for changed components
     *
     * @return $this
     */
    public function setCalculateComponentCoordinates($calculateComponentCoordinates)
    {
        $this->container['calculateComponentCoordinates'] = $calculateComponentCoordinates;

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
     * @param bool $markDeletedInsertedContentDeep Indicates whether to accept inserted/deleted styles for all children of inserted/deleted components
     *
     * @return $this
     */
    public function setMarkDeletedInsertedContentDeep($markDeletedInsertedContentDeep)
    {
        $this->container['markDeletedInsertedContentDeep'] = $markDeletedInsertedContentDeep;

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
     * @param string $cloneMetadata Gets or sets type of metadata to clone
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
     * @return \GroupDocs\Comparison\Model\Metadata
     */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /*
     * Sets metaData
     *
     * @param \GroupDocs\Comparison\Model\Metadata $metaData Gets or sets user metadata
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
     * @param string $passwordSaveOption Gets or sets type of password saving
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
     * @param string $password Gets or sets user password to resultant document
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets diagramMasterSetting
     *
     * @return \GroupDocs\Comparison\Model\DiagramMasterSetting
     */
    public function getDiagramMasterSetting()
    {
        return $this->container['diagramMasterSetting'];
    }

    /*
     * Sets diagramMasterSetting
     *
     * @param \GroupDocs\Comparison\Model\DiagramMasterSetting $diagramMasterSetting Gets or sets master for Diagram document
     *
     * @return $this
     */
    public function setDiagramMasterSetting($diagramMasterSetting)
    {
        $this->container['diagramMasterSetting'] = $diagramMasterSetting;

        return $this;
    }

    /*
     * Gets originalSize
     *
     * @return \GroupDocs\Comparison\Model\OriginalSize
     */
    public function getOriginalSize()
    {
        return $this->container['originalSize'];
    }

    /*
     * Sets originalSize
     *
     * @param \GroupDocs\Comparison\Model\OriginalSize $originalSize Gets or sets original document size when picture is compared with other different formats
     *
     * @return $this
     */
    public function setOriginalSize($originalSize)
    {
        $this->container['originalSize'] = $originalSize;

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


