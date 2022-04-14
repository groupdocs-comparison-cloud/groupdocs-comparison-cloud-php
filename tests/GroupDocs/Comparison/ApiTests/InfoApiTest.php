<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="InfoApiTest.php">
*   Copyright (c) 2003-2022 Aspose Pty Ltd
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

use GroupDocs\Comparison\Model\Requests;
use GroupDocs\Viewer\ApiTests\Internal\TestFiles;

require_once "BaseApiTest.php";
require_once "Internal\TestFile.php";

class InfoApiTest extends BaseApiTest
{
    /**
     * Test case for getSupportedFileFormats
     *
     * Retrieves list of supported file formats.
     *
     */
    public function testGetSupportedFileFormats()
    {
        $response = self::$infoApi->getSupportedFileFormats();
       
        $formats = $response->getFormats();
        
        $this->assertFalse(empty($formats));
        foreach ($formats as $key => $format) {
            $this->assertNotEmpty($format->getExtension());
            $this->assertNotEmpty($format->getFileFormat());
        }
    }

    public function testGetInfoReturnsFileNotFound()
    {
        $this->setExpectedException(
            \GroupDocs\Comparison\ApiException::class, "Can't find file located at 'some-folder\\NotExist.docx'.");

        $fileInfo = TestFiles::$NotExist->ToFileInfo();
        $request = new Requests\getDocumentInfoRequest($fileInfo);
       
        $response = self::$infoApi->getDocumentInfo($request);
    }

    public function testGetInfo()
    {
        $fileInfo = TestFiles::$SourceWord->ToFileInfo();
        $request = new Requests\getDocumentInfoRequest($fileInfo);
       
        $response = self::$infoApi->getDocumentInfo($request);
        $this->assertFalse(empty($response));
        $this->assertEquals(1, $response->getPageCount());
    }    
}
