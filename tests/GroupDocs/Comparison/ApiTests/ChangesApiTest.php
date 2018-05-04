<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="GroupDocs\Comparison\ApiTest.php">
*   Copyright (c) 2003-2018 Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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

namespace GroupDocs\Comparison\ApiTests;

use GroupDocs\Comparison\ChangesApi;
use Aspose\Storage\StorageApi;

use GroupDocs\Comparison\Configuration;
use GroupDocs\Comparison\Model\Color;
use GroupDocs\Comparison\Model\ComparisonChange;
use GroupDocs\Comparison\Model\ComparisonFileInfo;
use GroupDocs\Comparison\Model\ComparisonMetadataValues;
use GroupDocs\Comparison\Model\ComparisonRequest;
use GroupDocs\Comparison\Model\ComparisonRequestSettings;
use GroupDocs\Comparison\Model\ComparisonStyleChange;
use GroupDocs\Comparison\Model\Requests;
use GroupDocs\Comparison\ApiTests\Internal;
use GroupDocs\Comparison\Model\StyleSettingsValues;

class ChangesApiTest extends \PHPUnit_Framework_TestCase
{
    protected static $ChangesApi;
    protected static $StorageApi;
    
    protected static $fontsFolder = "fonts";
    protected static $fromUrlFolder = "tests\\from_url";
    protected static $fromContentFolder = "tests\\from_content";

    private static $testFilesUploaded;
	
    /**
     * Cleanup after each test case
     */
    public function tearDown()
    {
        //self::_removeTempFiles();
    }

    private static function _removeTempFiles()
    {
        self::$StorageApi->DeleteFolder("cache", null, "true");
        self::$StorageApi->DeleteFolder("tests", null, "true");
    }

    /**
     * Setup before each test suite
     */
    public static function setUpBeforeClass()
    {
        self::_initTests();
    }

    private static function _initTests()
    {
        $config = self::_getConfig();

        //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud 
        //      (free registration is required).
        $appSid = $config["AppSID"];
        $appKey = $config["AppKey"];
        $apiBaseUrl = $config["ApiBaseUrl"];

        self::$StorageApi = new StorageApi();
        self::$StorageApi->apiClient->appSid = $appSid;
        self::$StorageApi->apiClient->apiKey = $appKey;
        self::$StorageApi->apiClient->apiServer = $apiBaseUrl . "/v1";

        $configuration = new Configuration();
        $configuration->setAppSid($appSid);
        $configuration->setAppKey($appKey);
        $configuration->setHost($apiBaseUrl);
        self::$ChangesApi = new ChangesApi($configuration);

        self::_uploadTestFiles();
    }

    private static function _getConfig()
    {
        $contents = file_get_contents(realpath(__DIR__ . "/../config.json"));
        $config = \GuzzleHttp\json_decode($contents, true);

        return $config;
    }

    private static function _uploadTestFiles()
    {
        if (self::$testFilesUploaded) {
            return;
        }

        $folder = self::_getTestDataPath();
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);

        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();

                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                $filePathInStorage = str_replace("\\", "/", $filePathInStorage);

                $response = self::$StorageApi->GetIsExist($filePathInStorage);
                if (!$response->fileExist->isExist) {
                    self::$StorageApi->PutCreate($filePathInStorage, null, null, $filePath);
                }
            }
        }

        self::$testFilesUploaded = true;
    }

    private static function _getTestDataPath()
    {
        return realpath(__DIR__ . '/../Resources/TestData/');
    }

    /**
     * Serializes object as JSON
     */
    protected static function serializeObject($obj)
    {
        $optionsFile = tmpfile();
        $optionsFilePath = stream_get_meta_data($optionsFile)['uri'];
        fwrite($optionsFile, $obj->__toString());

        return [$optionsFile, $optionsFilePath];
    }

    /**
     * Returns path to test file
     */
    protected static function getTestFilePath($file)
    {
        return realpath(self::_getTestDataPath() . DIRECTORY_SEPARATOR .  $file->folder . DIRECTORY_SEPARATOR . $file->fileName);
    }


    /**
     * Test case for postCategoriesChanges
     *
     * Posts the categories changes.
     * @param $sourceNAme
     * @param array $targetNames
     * @return ComparisonRequest
     */

    public  function  GetComparisonRequest($sourceNAme, array $targetNames){

        $targetArray = array();
        foreach ($targetNames as $targetName){
          array_push($targetArray,new ComparisonFileInfo(
              [
                  'folder' => '',
                  'name' => $targetName,
                  'password' => ''
              ]
          ));
        }

       return  new ComparisonRequest([
                'sourceFile'=>new ComparisonFileInfo(
                    [
                        'folder' => '',
                        'name' => $sourceNAme,
                        'password' => ''
                    ]
                ),
                'targetFiles'=> $targetArray,
                'settings'=> new ComparisonRequestSettings(
                    [
                        'generateSummaryPage'=>true,
                        'showDeletedContent'=>true,
                        'styleChangeDetection'=>true,
                        'insertedItemsStyle' => new StyleSettingsValues(
                            [
                                'color' => new Color([
                                    'blue'
                                ]),
                                'beginSeparatorString' => '',
                                'endSeparatorString' => ''
                            ]
                        ),
                        'deletedItemsStyle' => new StyleSettingsValues(
                            [
                                'color' => new Color([
                                    'red'
                                ]),
                                'beginSeparatorString' => '',
                                'endSeparatorString' => ''
                            ]
                        ),
                        'styleChangedItemsStyle' => new StyleSettingsValues(
                            [
                                'color' => new Color([
                                    'green'
                                ]),
                                'beginSeparatorString' => '',
                                'endSeparatorString' => ''
                            ]
                        ),
                        'markDeletedInsertedContentDeep'=>true,
                        'calculateComponentCoordinates'=>true,
                        'useFramesForDelInsElements'=>true,
                        'wordsSeparatorChars' => array(),
                        'metaData' => new ComparisonMetadataValues(

                        ),
                        'cloneMetadata' => "Source",
                        'passwordSaveOption' => "User",
                        'password'=>"1111",
                        'detailLevel' => "Low",

                    ]
                ),
               'changes'=>array(new ComparisonChange([
                   'id' => 0,
                   'action' => 'Accept'
               ]))
           ]

       );
    }

    public function testPostCategoriesChanges()
    {
        $request = new Requests\PostCategoriesChangesRequest( $this->GetComparisonRequest('source.docx',array('source.docx')),'ByNodeType');
		
        $result = self::$ChangesApi->postCategoriesChanges($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for postChanges
     *
     * Returns json result with set of changes between documents
     *
     */
    public function testPostChanges()
    {
       /* $request = new Requests\PostChangesRequest();*/
        $request = new Requests\PostChangesRequest( $this->GetComparisonRequest('source.docx',array('source.docx')));
        $result = self::$ChangesApi->postChanges($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for putChangesDocument
     *
     * Applies changes to the document and returns document with the result of comparison
     *
     */
    public function testPutChangesDocument()
    {
      //  $request = new Requests\PutChangesDocumentRequest();
        $request = new Requests\PutChangesDocumentRequest( $this->GetComparisonRequest('source.docx',array('source.docx')),'ByNodeType');
        $result = self::$ChangesApi->putChangesDocument($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for putChangesDocumentStream
     *
     * Applies changes to the document and returns stream of document with the result of comparison
     *
     */
    public function testPutChangesDocumentStream()
    {
       // $request = new Requests\PutChangesDocumentStreamRequest();
        $request = new Requests\PutChangesDocumentStreamRequest( $this->GetComparisonRequest('source.docx',array('source.docx')));
        $result = self::$ChangesApi->putChangesDocumentStream($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for putChangesImages
     *
     * Applies changes to the document and returns images of document with the result of comparison
     *
     */
    public function testPutChangesImages()
    {
       // $request = new Requests\PutChangesImagesRequest();
        $request = new Requests\PutChangesImagesRequest( $this->GetComparisonRequest('source.docx',array('source.docx')),'ByNodeType');
        $result = self::$ChangesApi->putChangesImages($request);
		
        $this->assertNotNull($result);
    }

    /**
     * Test case for putChangesImagesStream
     *
     * Applies changes to the document and returns image's streams of document with the result of comparison
     *
     */
    public function testPutChangesImagesStream()
    {
       // $request = new Requests\PutChangesImagesStreamRequest();
        $request = new Requests\PutChangesImagesStreamRequest( $this->GetComparisonRequest('source.docx',array('source.docx')));
        $result = self::$ChangesApi->putChangesImagesStream($request);
		
        $this->assertNotNull($result);
    }
}
