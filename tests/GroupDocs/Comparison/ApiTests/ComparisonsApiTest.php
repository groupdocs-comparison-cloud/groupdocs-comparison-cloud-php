<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2020 Aspose Pty Ltd
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
use GroupDocs\Comparison\Model\ComparisonOptions;
use GroupDocs\Comparison\Model\Settings;
use GroupDocs\Comparison\Model\ItemsStyle;
use GroupDocs\Viewer\ApiTests\Internal\TestFiles;

require_once "BaseApiTest.php";
require_once "Internal\TestFile.php";

class ComparisonsApiTest extends BaseApiTest
{
    public function testComparisonsCell()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceCell, TestFiles::$TargetCell);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }    

    public function testComparisonsDiagram()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceDiagram, TestFiles::$TargetDiagram);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsEmail()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceEmail, TestFiles::$TargetEmail);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsHtml()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceHtml, TestFiles::$TargetHtml);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsImage()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceImage, TestFiles::$TargetImage);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsNote()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceNote, TestFiles::$TargetNote);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsNoteProtected()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceNoteProtected, TestFiles::$TargetNoteProtected);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }    
    
    public function testComparisonsPdf()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourcePdf, TestFiles::$TargetPdf);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsPdfProtected()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourcePdfProtected, TestFiles::$TargetPdfProtected);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }
    
    public function testComparisonsText()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceText, TestFiles::$TargetText);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsWord()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceWord, TestFiles::$TargetWord);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }  
    
    public function testComparisonsWordProtected()
    {           
        $options = $this->GetComparisonOptions(TestFiles::$SourceWordProtected, TestFiles::$TargetWordProtected);
        $response = self::$compareApi->comparisons(new Requests\comparisonsRequest($options));
        $this->assertEquals($response->getRel(), $options->getOutputPath());
    }       

    private function GetComparisonOptions($sourceFile, $targetFile)
    {
        $options = new ComparisonOptions();        
        $options->setSourceFile($sourceFile->ToFileInfo());
        $options->setTargetFiles([$targetFile->ToFileInfo()]);
        $options->setOutputPath("/resultFilePath/" . $sourceFile->fileName);
        $settings = new Settings();            
        $settings->setGenerateSummaryPage(true);
        $settings->setShowDeletedContent(true);
        $settings->setStyleChangeDetection(true);
        $settings->setUseFramesForDelInsElements(false);
        $settings->setMetaData(null);
        $settings->setDetailsLevel(Settings::DETAILS_LEVEL_LOW);
        $settings->setDiagramMasterSetting(null);
        $settings->setCalculateComponentCoordinates(false);
        $settings->setCloneMetadata(Settings::CLONE_METADATA__DEFAULT);
        $settings->setPassword("1111");
        $settings->setPasswordSaveOption(Settings::PASSWORD_SAVE_OPTION_USER);        
        $deletedItemsStyle = new ItemsStyle();                
        $deletedItemsStyle->setBeginSeparatorString("");
        $deletedItemsStyle->setEndSeparatorString("");
        $deletedItemsStyle->setFontColor("16711680");
        $deletedItemsStyle->setHighlightColor("16711680");
        $deletedItemsStyle->setBold(false);
        $deletedItemsStyle->setItalic(false);
        $deletedItemsStyle->setStrikeThrough(false);
        $settings->setDeletedItemsStyle($deletedItemsStyle);
        $insertedItemsStyle = new ItemsStyle();                
        $insertedItemsStyle->setBeginSeparatorString("");
        $insertedItemsStyle->setEndSeparatorString("");
        $insertedItemsStyle->setFontColor("255");
        $insertedItemsStyle->setHighlightColor("255");
        $insertedItemsStyle->setBold(false);
        $insertedItemsStyle->setItalic(false);
        $insertedItemsStyle->setStrikeThrough(false);
        $settings->setInsertedItemsStyle($insertedItemsStyle);        
        $styleChangedItemsStyle = new ItemsStyle();                
        $styleChangedItemsStyle->setBeginSeparatorString("");
        $styleChangedItemsStyle->setEndSeparatorString("");
        $styleChangedItemsStyle->setFontColor("65280");
        $styleChangedItemsStyle->setHighlightColor("65280");
        $styleChangedItemsStyle->setBold(false);
        $styleChangedItemsStyle->setItalic(false);
        $styleChangedItemsStyle->setStrikeThrough(false);
        $settings->setChangedItemsStyle($styleChangedItemsStyle); 

        $options->setSettings($settings);

        return $options;
    }    
}
