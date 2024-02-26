<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2024 Aspose Pty Ltd
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
use GroupDocs\Comparison\Model\ApplyRevisionsOptions;
use GroupDocs\Comparison\Model\RevisionInfo;
use GroupDocs\Viewer\ApiTests\Internal\TestFiles;

require_once "BaseApiTestCase.php";
require_once "Internal\TestFile.php";

class ReviewApiTest extends BaseApiTestCase
{
    public function testGetRevisions()
    {           
        $response = self::$reviewApi->getRevisions(new Requests\getRevisionsRequest(TestFiles::$SourceWithRevs->ToFileInfo()));
        $this->assertEquals(count($response), 2);
    }    

    public function testApplyRevisions()
    {           
        $options = new ApplyRevisionsOptions();        
        $options->setSourceFile(TestFiles::$SourceWithRevs->ToFileInfo());        
        $options->setOutputPath("/resultFilePath/result.docx");
        $rev1 = new RevisionInfo();
        $rev1->setId(0);
        $rev1->setAction(RevisionInfo::ACTION_ACCEPT);
        $rev2 = new RevisionInfo();
        $rev2->setId(1);
        $rev2->setAction(RevisionInfo::ACTION_REJECT);
        $options->setRevisions([$rev1, $rev2]);

        $response = self::$reviewApi->applyRevisions(new Requests\applyRevisionsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testAcceptAllRevisions()
    {           
        $options = new ApplyRevisionsOptions();        
        $options->setSourceFile(TestFiles::$SourceWithRevs->ToFileInfo());        
        $options->setOutputPath("/resultFilePath/result.docx");      
        $options->setAcceptAll(true);

        $response = self::$reviewApi->applyRevisions(new Requests\applyRevisionsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }

    public function testRejectAllRevisions()
    {           
        $options = new ApplyRevisionsOptions();        
        $options->setSourceFile(TestFiles::$SourceWithRevs->ToFileInfo());        
        $options->setOutputPath("/resultFilePath/result.docx");      
        $options->setRejectAll(true);

        $response = self::$reviewApi->applyRevisions(new Requests\applyRevisionsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }    
}
