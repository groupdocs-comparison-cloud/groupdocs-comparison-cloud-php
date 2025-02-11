<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFiles.php">
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

namespace GroupDocs\Viewer\ApiTests\Internal;

require_once "TestFile.php";

 /*
 * Describes file for tests.
 */
class TestFiles
{
    public static $SourceCell;
    public static $SourceDiagram;
    public static $SourceEmail;
    public static $SourceHtml;
    public static $SourceImage;
    public static $SourceNote;
    public static $SourcePdf;
    public static $SourceSlide;
    public static $SourceText;
    public static $SourceWord;
    public static $SourceWithRevs;

    public static $SourceCellProtected;
    public static $SourceNoteProtected;
    public static $SourcePdfProtected;
    public static $SourceSlideProtected;
    public static $SourceWordProtected;

    public static $TargetCell;
    public static $TargetDiagram;
    public static $TargetEmail;
    public static $TargetHtml;
    public static $TargetImage;
    public static $TargetNote;
    public static $TargetPdf;
    public static $TargetSlide;
    public static $TargetText;
    public static $TargetWord;

    public static $TargetCellProtected;
    public static $TargetNoteProtected;
    public static $TargetPdfProtected;
    public static $TargetSlideProtected;
    public static $TargetWordProtected;

    public static $TargetSlide1;
    public static $TargetSlide2;
    public static $TargetSlide1Protected;
    public static $TargetSlide2Protected;
    public static $TargetWord1;
    public static $TargetWord2;
    public static $TargetWord1Protected;
    public static $TargetWord2Protected;

    public static $NotExist;
    
    public static function init()
    {        
        self::$SourceCell = new TestFile("source.xlsx", "source_files\\cell\\");
        self::$SourceDiagram = new TestFile("source.vsdx", "source_files\\diagram\\");
        self::$SourceEmail = new TestFile("source.eml", "source_files\\email\\");
        self::$SourceHtml = new TestFile("source.html", "source_files\\html\\");
        self::$SourceImage = new TestFile("source.png", "source_files\\image\\");
        self::$SourceNote = new TestFile("source.one", "source_files\\note\\");
        self::$SourcePdf = new TestFile("source.pdf", "source_files\\pdf\\");
        self::$SourceSlide = new TestFile("source.pptx", "source_files\\slide\\");
        self::$SourceText = new TestFile("source.txt", "source_files\\text\\");
        self::$SourceWord = new TestFile("source.docx", "source_files\\word\\");
        self::$SourceWithRevs = new TestFile("source_with_revs.docx", "source_files\\word\\");
    
        self::$SourceCellProtected = new TestFile("source_protected.xlsx", "source_files\\cell\\", "1231");
        self::$SourceNoteProtected = new TestFile("source_protected.one", "source_files\\note\\", "123");
        self::$SourcePdfProtected = new TestFile("source_protected.pdf", "source_files\\pdf\\", "12345678");
        self::$SourceSlideProtected = new TestFile("source_protected.pptx", "source_files\\slide\\", "1231");
        self::$SourceWordProtected = new TestFile("source_protected.docx", "source_files\\word\\", "1231");

        self::$TargetCell = new TestFile("target.xlsx", "target_files\\cell\\");
        self::$TargetDiagram = new TestFile("target.vsdx", "target_files\\diagram\\");
        self::$TargetEmail = new TestFile("target.eml", "target_files\\email\\");
        self::$TargetHtml = new TestFile("target.html", "target_files\\html\\");
        self::$TargetImage = new TestFile("target.png", "target_files\\image\\");
        self::$TargetNote = new TestFile("target.one", "target_files\\note\\");
        self::$TargetPdf = new TestFile("target.pdf", "target_files\\pdf\\");
        self::$TargetSlide = new TestFile("target.pptx", "target_files\\slide\\");
        self::$TargetText = new TestFile("target.txt", "target_files\\text\\");
        self::$TargetWord = new TestFile("target.docx", "target_files\\word\\");

        self::$TargetCellProtected = new TestFile("target_protected.xlsx", "target_files\\cell\\", "1471");
        self::$TargetNoteProtected = new TestFile("target_protected.one", "target_files\\note\\", "123");
        self::$TargetPdfProtected = new TestFile("target_protected.pdf", "target_files\\pdf\\", "0987654");
        self::$TargetSlideProtected = new TestFile("target_protected.pptx", "target_files\\slide\\", "1471");
        self::$TargetWordProtected = new TestFile("target_protected.docx", "target_files\\word\\", "5784");

        self::$TargetSlide1 = new TestFile("target_1.pptx", "target_files\\slide\\");
        self::$TargetSlide2 = new TestFile("target_2.pptx", "target_files\\slide\\");
        self::$TargetSlide1Protected = new TestFile("target_1_protected.pptx", "target_files\\slide\\", "1471");
        self::$TargetSlide2Protected = new TestFile("target_2_protected.pptx", "target_files\\slide\\", "1471");
        self::$TargetWord1 = new TestFile("target_1.docx", "target_files\\word\\");
        self::$TargetWord2 = new TestFile("target_2.docx", "target_files\\word\\");
        self::$TargetWord1Protected = new TestFile("target_1_protected.docx", "target_files\\word\\", "5784");
        self::$TargetWord2Protected = new TestFile("target_2_protected.docx", "target_files\\word\\", "5784");

        self::$NotExist = new TestFile("NotExist.docx", "some-folder\\");
    }  

    public static function getTestFilesList()
    {        
        return array(
            self::$SourceCell,
            self::$SourceDiagram,
            self::$SourceEmail,
            self::$SourceHtml,
            self::$SourceImage,
            self::$SourceNote,
            self::$SourcePdf,
            self::$SourceSlide,
            self::$SourceText,
            self::$SourceWord,
            self::$SourceWithRevs,
        
            self::$SourceCellProtected,
            self::$SourceNoteProtected,
            self::$SourcePdfProtected,
            self::$SourceSlideProtected,
            self::$SourceWordProtected,
        
            self::$TargetCell,
            self::$TargetDiagram,
            self::$TargetEmail,
            self::$TargetHtml,
            self::$TargetImage,
            self::$TargetNote,
            self::$TargetPdf,
            self::$TargetSlide,
            self::$TargetText,
            self::$TargetWord,
        
            self::$TargetCellProtected,
            self::$TargetNoteProtected,
            self::$TargetPdfProtected,
            self::$TargetSlideProtected,
            self::$TargetWordProtected,
        
            self::$TargetSlide1,
            self::$TargetSlide2,
            self::$TargetSlide1Protected,
            self::$TargetSlide2Protected,
            self::$TargetWord1,
            self::$TargetWord2,
            self::$TargetWord1Protected,
            self::$TargetWord2Protected
        );
    }      
}
