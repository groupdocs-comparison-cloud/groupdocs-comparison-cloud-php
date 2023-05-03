<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="Settings.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
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
        'showInsertedContent' => 'bool',
        'styleChangeDetection' => 'bool',
        'insertedItemsStyle' => '\GroupDocs\Comparison\Model\ItemsStyle',
        'deletedItemsStyle' => '\GroupDocs\Comparison\Model\ItemsStyle',
        'changedItemsStyle' => '\GroupDocs\Comparison\Model\ItemsStyle',
        'wordsSeparatorChars' => 'string[]',
        'detailsLevel' => 'string',
        'useFramesForDelInsElements' => 'bool',
        'calculateComponentCoordinates' => 'bool',
        'markChangedContent' => 'bool',
        'markNestedContent' => 'bool',
        'cloneMetadata' => 'string',
        'metaData' => '\GroupDocs\Comparison\Model\Metadata',
        'passwordSaveOption' => 'string',
        'password' => 'string',
        'diagramMasterSetting' => '\GroupDocs\Comparison\Model\DiagramMasterSetting',
        'originalSize' => '\GroupDocs\Comparison\Model\Size',
        'headerFootersComparison' => 'bool',
        'paperSize' => 'string',
        'sensitivityOfComparison' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'generateSummaryPage' => null,
        'showDeletedContent' => null,
        'showInsertedContent' => null,
        'styleChangeDetection' => null,
        'insertedItemsStyle' => null,
        'deletedItemsStyle' => null,
        'changedItemsStyle' => null,
        'wordsSeparatorChars' => null,
        'detailsLevel' => null,
        'useFramesForDelInsElements' => null,
        'calculateComponentCoordinates' => null,
        'markChangedContent' => null,
        'markNestedContent' => null,
        'cloneMetadata' => null,
        'metaData' => null,
        'passwordSaveOption' => null,
        'password' => null,
        'diagramMasterSetting' => null,
        'originalSize' => null,
        'headerFootersComparison' => null,
        'paperSize' => null,
        'sensitivityOfComparison' => 'int32'
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
        'showInsertedContent' => 'ShowInsertedContent',
        'styleChangeDetection' => 'StyleChangeDetection',
        'insertedItemsStyle' => 'InsertedItemsStyle',
        'deletedItemsStyle' => 'DeletedItemsStyle',
        'changedItemsStyle' => 'ChangedItemsStyle',
        'wordsSeparatorChars' => 'WordsSeparatorChars',
        'detailsLevel' => 'DetailsLevel',
        'useFramesForDelInsElements' => 'UseFramesForDelInsElements',
        'calculateComponentCoordinates' => 'CalculateComponentCoordinates',
        'markChangedContent' => 'MarkChangedContent',
        'markNestedContent' => 'MarkNestedContent',
        'cloneMetadata' => 'CloneMetadata',
        'metaData' => 'MetaData',
        'passwordSaveOption' => 'PasswordSaveOption',
        'password' => 'Password',
        'diagramMasterSetting' => 'DiagramMasterSetting',
        'originalSize' => 'OriginalSize',
        'headerFootersComparison' => 'HeaderFootersComparison',
        'paperSize' => 'PaperSize',
        'sensitivityOfComparison' => 'SensitivityOfComparison'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'generateSummaryPage' => 'setGenerateSummaryPage',
        'showDeletedContent' => 'setShowDeletedContent',
        'showInsertedContent' => 'setShowInsertedContent',
        'styleChangeDetection' => 'setStyleChangeDetection',
        'insertedItemsStyle' => 'setInsertedItemsStyle',
        'deletedItemsStyle' => 'setDeletedItemsStyle',
        'changedItemsStyle' => 'setChangedItemsStyle',
        'wordsSeparatorChars' => 'setWordsSeparatorChars',
        'detailsLevel' => 'setDetailsLevel',
        'useFramesForDelInsElements' => 'setUseFramesForDelInsElements',
        'calculateComponentCoordinates' => 'setCalculateComponentCoordinates',
        'markChangedContent' => 'setMarkChangedContent',
        'markNestedContent' => 'setMarkNestedContent',
        'cloneMetadata' => 'setCloneMetadata',
        'metaData' => 'setMetaData',
        'passwordSaveOption' => 'setPasswordSaveOption',
        'password' => 'setPassword',
        'diagramMasterSetting' => 'setDiagramMasterSetting',
        'originalSize' => 'setOriginalSize',
        'headerFootersComparison' => 'setHeaderFootersComparison',
        'paperSize' => 'setPaperSize',
        'sensitivityOfComparison' => 'setSensitivityOfComparison'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'generateSummaryPage' => 'getGenerateSummaryPage',
        'showDeletedContent' => 'getShowDeletedContent',
        'showInsertedContent' => 'getShowInsertedContent',
        'styleChangeDetection' => 'getStyleChangeDetection',
        'insertedItemsStyle' => 'getInsertedItemsStyle',
        'deletedItemsStyle' => 'getDeletedItemsStyle',
        'changedItemsStyle' => 'getChangedItemsStyle',
        'wordsSeparatorChars' => 'getWordsSeparatorChars',
        'detailsLevel' => 'getDetailsLevel',
        'useFramesForDelInsElements' => 'getUseFramesForDelInsElements',
        'calculateComponentCoordinates' => 'getCalculateComponentCoordinates',
        'markChangedContent' => 'getMarkChangedContent',
        'markNestedContent' => 'getMarkNestedContent',
        'cloneMetadata' => 'getCloneMetadata',
        'metaData' => 'getMetaData',
        'passwordSaveOption' => 'getPasswordSaveOption',
        'password' => 'getPassword',
        'diagramMasterSetting' => 'getDiagramMasterSetting',
        'originalSize' => 'getOriginalSize',
        'headerFootersComparison' => 'getHeaderFootersComparison',
        'paperSize' => 'getPaperSize',
        'sensitivityOfComparison' => 'getSensitivityOfComparison'
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

    const DETAILS_LEVEL_LOW = 'Low';
    const DETAILS_LEVEL_MIDDLE = 'Middle';
    const DETAILS_LEVEL_HIGH = 'High';
    const CLONE_METADATA__DEFAULT = 'Default';
    const CLONE_METADATA_SOURCE = 'Source';
    const CLONE_METADATA_TARGET = 'Target';
    const CLONE_METADATA_FILE_AUTHOR = 'FileAuthor';
    const PASSWORD_SAVE_OPTION_NONE = 'None';
    const PASSWORD_SAVE_OPTION_SOURCE = 'Source';
    const PASSWORD_SAVE_OPTION_TARGET = 'Target';
    const PASSWORD_SAVE_OPTION_USER = 'User';
    const PAPER_SIZE__DEFAULT = 'Default';
    const PAPER_SIZE_A0 = 'A0';
    const PAPER_SIZE_A1 = 'A1';
    const PAPER_SIZE_A2 = 'A2';
    const PAPER_SIZE_A3 = 'A3';
    const PAPER_SIZE_A4 = 'A4';
    const PAPER_SIZE_A5 = 'A5';
    const PAPER_SIZE_A6 = 'A6';
    const PAPER_SIZE_A7 = 'A7';
    const PAPER_SIZE_A8 = 'A8';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDetailsLevelAllowableValues()
    {
        return [
            self::DETAILS_LEVEL_LOW,
            self::DETAILS_LEVEL_MIDDLE,
            self::DETAILS_LEVEL_HIGH,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCloneMetadataAllowableValues()
    {
        return [
            self::CLONE_METADATA__DEFAULT,
            self::CLONE_METADATA_SOURCE,
            self::CLONE_METADATA_TARGET,
            self::CLONE_METADATA_FILE_AUTHOR,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPasswordSaveOptionAllowableValues()
    {
        return [
            self::PASSWORD_SAVE_OPTION_NONE,
            self::PASSWORD_SAVE_OPTION_SOURCE,
            self::PASSWORD_SAVE_OPTION_TARGET,
            self::PASSWORD_SAVE_OPTION_USER,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaperSizeAllowableValues()
    {
        return [
            self::PAPER_SIZE__DEFAULT,
            self::PAPER_SIZE_A0,
            self::PAPER_SIZE_A1,
            self::PAPER_SIZE_A2,
            self::PAPER_SIZE_A3,
            self::PAPER_SIZE_A4,
            self::PAPER_SIZE_A5,
            self::PAPER_SIZE_A6,
            self::PAPER_SIZE_A7,
            self::PAPER_SIZE_A8,
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
        $this->container['generateSummaryPage'] = isset($data['generateSummaryPage']) ? $data['generateSummaryPage'] : null;
        $this->container['showDeletedContent'] = isset($data['showDeletedContent']) ? $data['showDeletedContent'] : null;
        $this->container['showInsertedContent'] = isset($data['showInsertedContent']) ? $data['showInsertedContent'] : null;
        $this->container['styleChangeDetection'] = isset($data['styleChangeDetection']) ? $data['styleChangeDetection'] : null;
        $this->container['insertedItemsStyle'] = isset($data['insertedItemsStyle']) ? $data['insertedItemsStyle'] : null;
        $this->container['deletedItemsStyle'] = isset($data['deletedItemsStyle']) ? $data['deletedItemsStyle'] : null;
        $this->container['changedItemsStyle'] = isset($data['changedItemsStyle']) ? $data['changedItemsStyle'] : null;
        $this->container['wordsSeparatorChars'] = isset($data['wordsSeparatorChars']) ? $data['wordsSeparatorChars'] : null;
        $this->container['detailsLevel'] = isset($data['detailsLevel']) ? $data['detailsLevel'] : null;
        $this->container['useFramesForDelInsElements'] = isset($data['useFramesForDelInsElements']) ? $data['useFramesForDelInsElements'] : null;
        $this->container['calculateComponentCoordinates'] = isset($data['calculateComponentCoordinates']) ? $data['calculateComponentCoordinates'] : null;
        $this->container['markChangedContent'] = isset($data['markChangedContent']) ? $data['markChangedContent'] : null;
        $this->container['markNestedContent'] = isset($data['markNestedContent']) ? $data['markNestedContent'] : null;
        $this->container['cloneMetadata'] = isset($data['cloneMetadata']) ? $data['cloneMetadata'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['passwordSaveOption'] = isset($data['passwordSaveOption']) ? $data['passwordSaveOption'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['diagramMasterSetting'] = isset($data['diagramMasterSetting']) ? $data['diagramMasterSetting'] : null;
        $this->container['originalSize'] = isset($data['originalSize']) ? $data['originalSize'] : null;
        $this->container['headerFootersComparison'] = isset($data['headerFootersComparison']) ? $data['headerFootersComparison'] : null;
        $this->container['paperSize'] = isset($data['paperSize']) ? $data['paperSize'] : null;
        $this->container['sensitivityOfComparison'] = isset($data['sensitivityOfComparison']) ? $data['sensitivityOfComparison'] : null;
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
        if ($this->container['showInsertedContent'] === null) {
            $invalidProperties[] = "'showInsertedContent' can't be null";
        }
        if ($this->container['styleChangeDetection'] === null) {
            $invalidProperties[] = "'styleChangeDetection' can't be null";
        }
        if ($this->container['detailsLevel'] === null) {
            $invalidProperties[] = "'detailsLevel' can't be null";
        }
        $allowedValues = $this->getDetailsLevelAllowableValues();
        if (!in_array($this->container['detailsLevel'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'detailsLevel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['useFramesForDelInsElements'] === null) {
            $invalidProperties[] = "'useFramesForDelInsElements' can't be null";
        }
        if ($this->container['calculateComponentCoordinates'] === null) {
            $invalidProperties[] = "'calculateComponentCoordinates' can't be null";
        }
        if ($this->container['markChangedContent'] === null) {
            $invalidProperties[] = "'markChangedContent' can't be null";
        }
        if ($this->container['markNestedContent'] === null) {
            $invalidProperties[] = "'markNestedContent' can't be null";
        }
        if ($this->container['cloneMetadata'] === null) {
            $invalidProperties[] = "'cloneMetadata' can't be null";
        }
        $allowedValues = $this->getCloneMetadataAllowableValues();
        if (!in_array($this->container['cloneMetadata'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cloneMetadata', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['passwordSaveOption'] === null) {
            $invalidProperties[] = "'passwordSaveOption' can't be null";
        }
        $allowedValues = $this->getPasswordSaveOptionAllowableValues();
        if (!in_array($this->container['passwordSaveOption'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'passwordSaveOption', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['headerFootersComparison'] === null) {
            $invalidProperties[] = "'headerFootersComparison' can't be null";
        }
        if ($this->container['paperSize'] === null) {
            $invalidProperties[] = "'paperSize' can't be null";
        }
        $allowedValues = $this->getPaperSizeAllowableValues();
        if (!in_array($this->container['paperSize'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paperSize', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sensitivityOfComparison'] === null) {
            $invalidProperties[] = "'sensitivityOfComparison' can't be null";
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
        if ($this->container['showInsertedContent'] === null) {
            return false;
        }
        if ($this->container['styleChangeDetection'] === null) {
            return false;
        }
        if ($this->container['detailsLevel'] === null) {
            return false;
        }
        $allowedValues = $this->getDetailsLevelAllowableValues();
        if (!in_array($this->container['detailsLevel'], $allowedValues)) {
            return false;
        }
        if ($this->container['useFramesForDelInsElements'] === null) {
            return false;
        }
        if ($this->container['calculateComponentCoordinates'] === null) {
            return false;
        }
        if ($this->container['markChangedContent'] === null) {
            return false;
        }
        if ($this->container['markNestedContent'] === null) {
            return false;
        }
        if ($this->container['cloneMetadata'] === null) {
            return false;
        }
        $allowedValues = $this->getCloneMetadataAllowableValues();
        if (!in_array($this->container['cloneMetadata'], $allowedValues)) {
            return false;
        }
        if ($this->container['passwordSaveOption'] === null) {
            return false;
        }
        $allowedValues = $this->getPasswordSaveOptionAllowableValues();
        if (!in_array($this->container['passwordSaveOption'], $allowedValues)) {
            return false;
        }
        if ($this->container['headerFootersComparison'] === null) {
            return false;
        }
        if ($this->container['paperSize'] === null) {
            return false;
        }
        $allowedValues = $this->getPaperSizeAllowableValues();
        if (!in_array($this->container['paperSize'], $allowedValues)) {
            return false;
        }
        if ($this->container['sensitivityOfComparison'] === null) {
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
     * Gets showInsertedContent
     *
     * @return bool
     */
    public function getShowInsertedContent()
    {
        return $this->container['showInsertedContent'];
    }

    /*
     * Sets showInsertedContent
     *
     * @param bool $showInsertedContent Indicates whether to show inserted components in resultant document or not
     *
     * @return $this
     */
    public function setShowInsertedContent($showInsertedContent)
    {
        $this->container['showInsertedContent'] = $showInsertedContent;

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
     * Gets changedItemsStyle
     *
     * @return \GroupDocs\Comparison\Model\ItemsStyle
     */
    public function getChangedItemsStyle()
    {
        return $this->container['changedItemsStyle'];
    }

    /*
     * Sets changedItemsStyle
     *
     * @param \GroupDocs\Comparison\Model\ItemsStyle $changedItemsStyle Style for components with changed style
     *
     * @return $this
     */
    public function setChangedItemsStyle($changedItemsStyle)
    {
        $this->container['changedItemsStyle'] = $changedItemsStyle;

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
     * Gets detailsLevel
     *
     * @return string
     */
    public function getDetailsLevel()
    {
        return $this->container['detailsLevel'];
    }

    /*
     * Sets detailsLevel
     *
     * @param string $detailsLevel Gets of sets the comparison details level
     *
     * @return $this
     */
    public function setDetailsLevel($detailsLevel)
    {
        $allowedValues = $this->getDetailsLevelAllowableValues();
        if ((!is_numeric($detailsLevel) && !in_array($detailsLevel, $allowedValues)) || (is_numeric($detailsLevel) && !in_array($allowedValues[$detailsLevel], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'detailsLevel', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['detailsLevel'] = $detailsLevel;

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
     * Gets markChangedContent
     *
     * @return bool
     */
    public function getMarkChangedContent()
    {
        return $this->container['markChangedContent'];
    }

    /*
     * Sets markChangedContent
     *
     * @param bool $markChangedContent Indicates whether to use frames for shapes in Word Processing and for rectangles in Image documents
     *
     * @return $this
     */
    public function setMarkChangedContent($markChangedContent)
    {
        $this->container['markChangedContent'] = $markChangedContent;

        return $this;
    }

    /*
     * Gets markNestedContent
     *
     * @return bool
     */
    public function getMarkNestedContent()
    {
        return $this->container['markNestedContent'];
    }

    /*
     * Sets markNestedContent
     *
     * @param bool $markNestedContent Gets or sets a value indicating whether to mark the children of the deleted or inserted element as deleted or inserted
     *
     * @return $this
     */
    public function setMarkNestedContent($markNestedContent)
    {
        $this->container['markNestedContent'] = $markNestedContent;

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
        $allowedValues = $this->getCloneMetadataAllowableValues();
        if ((!is_numeric($cloneMetadata) && !in_array($cloneMetadata, $allowedValues)) || (is_numeric($cloneMetadata) && !in_array($allowedValues[$cloneMetadata], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'cloneMetadata', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
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
        $allowedValues = $this->getPasswordSaveOptionAllowableValues();
        if ((!is_numeric($passwordSaveOption) && !in_array($passwordSaveOption, $allowedValues)) || (is_numeric($passwordSaveOption) && !in_array($allowedValues[$passwordSaveOption], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'passwordSaveOption', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
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
     * @return \GroupDocs\Comparison\Model\Size
     */
    public function getOriginalSize()
    {
        return $this->container['originalSize'];
    }

    /*
     * Sets originalSize
     *
     * @param \GroupDocs\Comparison\Model\Size $originalSize Gets or sets original document size when picture is compared with other different formats
     *
     * @return $this
     */
    public function setOriginalSize($originalSize)
    {
        $this->container['originalSize'] = $originalSize;

        return $this;
    }

    /*
     * Gets headerFootersComparison
     *
     * @return bool
     */
    public function getHeaderFootersComparison()
    {
        return $this->container['headerFootersComparison'];
    }

    /*
     * Sets headerFootersComparison
     *
     * @param bool $headerFootersComparison Control to turn on comparison of header/footer contents
     *
     * @return $this
     */
    public function setHeaderFootersComparison($headerFootersComparison)
    {
        $this->container['headerFootersComparison'] = $headerFootersComparison;

        return $this;
    }

    /*
     * Gets paperSize
     *
     * @return string
     */
    public function getPaperSize()
    {
        return $this->container['paperSize'];
    }

    /*
     * Sets paperSize
     *
     * @param string $paperSize Gets or sets the result document paper size
     *
     * @return $this
     */
    public function setPaperSize($paperSize)
    {
        $allowedValues = $this->getPaperSizeAllowableValues();
        if ((!is_numeric($paperSize) && !in_array($paperSize, $allowedValues)) || (is_numeric($paperSize) && !in_array($allowedValues[$paperSize], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'paperSize', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['paperSize'] = $paperSize;

        return $this;
    }

    /*
     * Gets sensitivityOfComparison
     *
     * @return int
     */
    public function getSensitivityOfComparison()
    {
        return $this->container['sensitivityOfComparison'];
    }

    /*
     * Sets sensitivityOfComparison
     *
     * @param int $sensitivityOfComparison Gets or sets a sensitivity of comparison. Default is 75
     *
     * @return $this
     */
    public function setSensitivityOfComparison($sensitivityOfComparison)
    {
        $this->container['sensitivityOfComparison'] = $sensitivityOfComparison;

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


