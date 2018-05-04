<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="Color.php">
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
 * Color
 */

namespace GroupDocs\Comparison\Model;
use \GroupDocs\Comparison\ObjectSerializer;

/*
 * Color
 *
 */
class Color extends ValueType 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Color";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'transparent' => '\GroupDocs\Comparison\Model\Color',
        'aliceBlue' => '\GroupDocs\Comparison\Model\Color',
        'antiqueWhite' => '\GroupDocs\Comparison\Model\Color',
        'aqua' => '\GroupDocs\Comparison\Model\Color',
        'aquamarine' => '\GroupDocs\Comparison\Model\Color',
        'azure' => '\GroupDocs\Comparison\Model\Color',
        'beige' => '\GroupDocs\Comparison\Model\Color',
        'bisque' => '\GroupDocs\Comparison\Model\Color',
        'black' => '\GroupDocs\Comparison\Model\Color',
        'blanchedAlmond' => '\GroupDocs\Comparison\Model\Color',
        'blue' => '\GroupDocs\Comparison\Model\Color',
        'blueViolet' => '\GroupDocs\Comparison\Model\Color',
        'brown' => '\GroupDocs\Comparison\Model\Color',
        'burlyWood' => '\GroupDocs\Comparison\Model\Color',
        'cadetBlue' => '\GroupDocs\Comparison\Model\Color',
        'chartreuse' => '\GroupDocs\Comparison\Model\Color',
        'chocolate' => '\GroupDocs\Comparison\Model\Color',
        'coral' => '\GroupDocs\Comparison\Model\Color',
        'cornflowerBlue' => '\GroupDocs\Comparison\Model\Color',
        'cornsilk' => '\GroupDocs\Comparison\Model\Color',
        'crimson' => '\GroupDocs\Comparison\Model\Color',
        'cyan' => '\GroupDocs\Comparison\Model\Color',
        'darkBlue' => '\GroupDocs\Comparison\Model\Color',
        'darkCyan' => '\GroupDocs\Comparison\Model\Color',
        'darkGoldenrod' => '\GroupDocs\Comparison\Model\Color',
        'darkGray' => '\GroupDocs\Comparison\Model\Color',
        'darkGreen' => '\GroupDocs\Comparison\Model\Color',
        'darkKhaki' => '\GroupDocs\Comparison\Model\Color',
        'darkMagenta' => '\GroupDocs\Comparison\Model\Color',
        'darkOliveGreen' => '\GroupDocs\Comparison\Model\Color',
        'darkOrange' => '\GroupDocs\Comparison\Model\Color',
        'darkOrchid' => '\GroupDocs\Comparison\Model\Color',
        'darkRed' => '\GroupDocs\Comparison\Model\Color',
        'darkSalmon' => '\GroupDocs\Comparison\Model\Color',
        'darkSeaGreen' => '\GroupDocs\Comparison\Model\Color',
        'darkSlateBlue' => '\GroupDocs\Comparison\Model\Color',
        'darkSlateGray' => '\GroupDocs\Comparison\Model\Color',
        'darkTurquoise' => '\GroupDocs\Comparison\Model\Color',
        'darkViolet' => '\GroupDocs\Comparison\Model\Color',
        'deepPink' => '\GroupDocs\Comparison\Model\Color',
        'deepSkyBlue' => '\GroupDocs\Comparison\Model\Color',
        'dimGray' => '\GroupDocs\Comparison\Model\Color',
        'dodgerBlue' => '\GroupDocs\Comparison\Model\Color',
        'firebrick' => '\GroupDocs\Comparison\Model\Color',
        'floralWhite' => '\GroupDocs\Comparison\Model\Color',
        'forestGreen' => '\GroupDocs\Comparison\Model\Color',
        'fuchsia' => '\GroupDocs\Comparison\Model\Color',
        'gainsboro' => '\GroupDocs\Comparison\Model\Color',
        'ghostWhite' => '\GroupDocs\Comparison\Model\Color',
        'gold' => '\GroupDocs\Comparison\Model\Color',
        'goldenrod' => '\GroupDocs\Comparison\Model\Color',
        'gray' => '\GroupDocs\Comparison\Model\Color',
        'green' => '\GroupDocs\Comparison\Model\Color',
        'greenYellow' => '\GroupDocs\Comparison\Model\Color',
        'honeydew' => '\GroupDocs\Comparison\Model\Color',
        'hotPink' => '\GroupDocs\Comparison\Model\Color',
        'indianRed' => '\GroupDocs\Comparison\Model\Color',
        'indigo' => '\GroupDocs\Comparison\Model\Color',
        'ivory' => '\GroupDocs\Comparison\Model\Color',
        'khaki' => '\GroupDocs\Comparison\Model\Color',
        'lavender' => '\GroupDocs\Comparison\Model\Color',
        'lavenderBlush' => '\GroupDocs\Comparison\Model\Color',
        'lawnGreen' => '\GroupDocs\Comparison\Model\Color',
        'lemonChiffon' => '\GroupDocs\Comparison\Model\Color',
        'lightBlue' => '\GroupDocs\Comparison\Model\Color',
        'lightCoral' => '\GroupDocs\Comparison\Model\Color',
        'lightCyan' => '\GroupDocs\Comparison\Model\Color',
        'lightGoldenrodYellow' => '\GroupDocs\Comparison\Model\Color',
        'lightGreen' => '\GroupDocs\Comparison\Model\Color',
        'lightGray' => '\GroupDocs\Comparison\Model\Color',
        'lightPink' => '\GroupDocs\Comparison\Model\Color',
        'lightSalmon' => '\GroupDocs\Comparison\Model\Color',
        'lightSeaGreen' => '\GroupDocs\Comparison\Model\Color',
        'lightSkyBlue' => '\GroupDocs\Comparison\Model\Color',
        'lightSlateGray' => '\GroupDocs\Comparison\Model\Color',
        'lightSteelBlue' => '\GroupDocs\Comparison\Model\Color',
        'lightYellow' => '\GroupDocs\Comparison\Model\Color',
        'lime' => '\GroupDocs\Comparison\Model\Color',
        'limeGreen' => '\GroupDocs\Comparison\Model\Color',
        'linen' => '\GroupDocs\Comparison\Model\Color',
        'magenta' => '\GroupDocs\Comparison\Model\Color',
        'maroon' => '\GroupDocs\Comparison\Model\Color',
        'mediumAquamarine' => '\GroupDocs\Comparison\Model\Color',
        'mediumBlue' => '\GroupDocs\Comparison\Model\Color',
        'mediumOrchid' => '\GroupDocs\Comparison\Model\Color',
        'mediumPurple' => '\GroupDocs\Comparison\Model\Color',
        'mediumSeaGreen' => '\GroupDocs\Comparison\Model\Color',
        'mediumSlateBlue' => '\GroupDocs\Comparison\Model\Color',
        'mediumSpringGreen' => '\GroupDocs\Comparison\Model\Color',
        'mediumTurquoise' => '\GroupDocs\Comparison\Model\Color',
        'mediumVioletRed' => '\GroupDocs\Comparison\Model\Color',
        'midnightBlue' => '\GroupDocs\Comparison\Model\Color',
        'mintCream' => '\GroupDocs\Comparison\Model\Color',
        'mistyRose' => '\GroupDocs\Comparison\Model\Color',
        'moccasin' => '\GroupDocs\Comparison\Model\Color',
        'navajoWhite' => '\GroupDocs\Comparison\Model\Color',
        'navy' => '\GroupDocs\Comparison\Model\Color',
        'oldLace' => '\GroupDocs\Comparison\Model\Color',
        'olive' => '\GroupDocs\Comparison\Model\Color',
        'oliveDrab' => '\GroupDocs\Comparison\Model\Color',
        'orange' => '\GroupDocs\Comparison\Model\Color',
        'orangeRed' => '\GroupDocs\Comparison\Model\Color',
        'orchid' => '\GroupDocs\Comparison\Model\Color',
        'paleGoldenrod' => '\GroupDocs\Comparison\Model\Color',
        'paleGreen' => '\GroupDocs\Comparison\Model\Color',
        'paleTurquoise' => '\GroupDocs\Comparison\Model\Color',
        'paleVioletRed' => '\GroupDocs\Comparison\Model\Color',
        'papayaWhip' => '\GroupDocs\Comparison\Model\Color',
        'peachPuff' => '\GroupDocs\Comparison\Model\Color',
        'peru' => '\GroupDocs\Comparison\Model\Color',
        'pink' => '\GroupDocs\Comparison\Model\Color',
        'plum' => '\GroupDocs\Comparison\Model\Color',
        'powderBlue' => '\GroupDocs\Comparison\Model\Color',
        'purple' => '\GroupDocs\Comparison\Model\Color',
        'red' => '\GroupDocs\Comparison\Model\Color',
        'rosyBrown' => '\GroupDocs\Comparison\Model\Color',
        'royalBlue' => '\GroupDocs\Comparison\Model\Color',
        'saddleBrown' => '\GroupDocs\Comparison\Model\Color',
        'salmon' => '\GroupDocs\Comparison\Model\Color',
        'sandyBrown' => '\GroupDocs\Comparison\Model\Color',
        'seaGreen' => '\GroupDocs\Comparison\Model\Color',
        'seaShell' => '\GroupDocs\Comparison\Model\Color',
        'sienna' => '\GroupDocs\Comparison\Model\Color',
        'silver' => '\GroupDocs\Comparison\Model\Color',
        'skyBlue' => '\GroupDocs\Comparison\Model\Color',
        'slateBlue' => '\GroupDocs\Comparison\Model\Color',
        'slateGray' => '\GroupDocs\Comparison\Model\Color',
        'snow' => '\GroupDocs\Comparison\Model\Color',
        'springGreen' => '\GroupDocs\Comparison\Model\Color',
        'steelBlue' => '\GroupDocs\Comparison\Model\Color',
        'tan' => '\GroupDocs\Comparison\Model\Color',
        'teal' => '\GroupDocs\Comparison\Model\Color',
        'thistle' => '\GroupDocs\Comparison\Model\Color',
        'tomato' => '\GroupDocs\Comparison\Model\Color',
        'turquoise' => '\GroupDocs\Comparison\Model\Color',
        'violet' => '\GroupDocs\Comparison\Model\Color',
        'wheat' => '\GroupDocs\Comparison\Model\Color',
        'white' => '\GroupDocs\Comparison\Model\Color',
        'whiteSmoke' => '\GroupDocs\Comparison\Model\Color',
        'yellow' => '\GroupDocs\Comparison\Model\Color',
        'yellowGreen' => '\GroupDocs\Comparison\Model\Color',
        'r' => 'int',
        'g' => 'int',
        'b' => 'int',
        'a' => 'int',
        'isKnownColor' => 'bool',
        'isEmpty' => 'bool',
        'isNamedColor' => 'bool',
        'isSystemColor' => 'bool',
        'name' => 'string',
        'empty' => '\GroupDocs\Comparison\Model\Color'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'transparent' => null,
        'aliceBlue' => null,
        'antiqueWhite' => null,
        'aqua' => null,
        'aquamarine' => null,
        'azure' => null,
        'beige' => null,
        'bisque' => null,
        'black' => null,
        'blanchedAlmond' => null,
        'blue' => null,
        'blueViolet' => null,
        'brown' => null,
        'burlyWood' => null,
        'cadetBlue' => null,
        'chartreuse' => null,
        'chocolate' => null,
        'coral' => null,
        'cornflowerBlue' => null,
        'cornsilk' => null,
        'crimson' => null,
        'cyan' => null,
        'darkBlue' => null,
        'darkCyan' => null,
        'darkGoldenrod' => null,
        'darkGray' => null,
        'darkGreen' => null,
        'darkKhaki' => null,
        'darkMagenta' => null,
        'darkOliveGreen' => null,
        'darkOrange' => null,
        'darkOrchid' => null,
        'darkRed' => null,
        'darkSalmon' => null,
        'darkSeaGreen' => null,
        'darkSlateBlue' => null,
        'darkSlateGray' => null,
        'darkTurquoise' => null,
        'darkViolet' => null,
        'deepPink' => null,
        'deepSkyBlue' => null,
        'dimGray' => null,
        'dodgerBlue' => null,
        'firebrick' => null,
        'floralWhite' => null,
        'forestGreen' => null,
        'fuchsia' => null,
        'gainsboro' => null,
        'ghostWhite' => null,
        'gold' => null,
        'goldenrod' => null,
        'gray' => null,
        'green' => null,
        'greenYellow' => null,
        'honeydew' => null,
        'hotPink' => null,
        'indianRed' => null,
        'indigo' => null,
        'ivory' => null,
        'khaki' => null,
        'lavender' => null,
        'lavenderBlush' => null,
        'lawnGreen' => null,
        'lemonChiffon' => null,
        'lightBlue' => null,
        'lightCoral' => null,
        'lightCyan' => null,
        'lightGoldenrodYellow' => null,
        'lightGreen' => null,
        'lightGray' => null,
        'lightPink' => null,
        'lightSalmon' => null,
        'lightSeaGreen' => null,
        'lightSkyBlue' => null,
        'lightSlateGray' => null,
        'lightSteelBlue' => null,
        'lightYellow' => null,
        'lime' => null,
        'limeGreen' => null,
        'linen' => null,
        'magenta' => null,
        'maroon' => null,
        'mediumAquamarine' => null,
        'mediumBlue' => null,
        'mediumOrchid' => null,
        'mediumPurple' => null,
        'mediumSeaGreen' => null,
        'mediumSlateBlue' => null,
        'mediumSpringGreen' => null,
        'mediumTurquoise' => null,
        'mediumVioletRed' => null,
        'midnightBlue' => null,
        'mintCream' => null,
        'mistyRose' => null,
        'moccasin' => null,
        'navajoWhite' => null,
        'navy' => null,
        'oldLace' => null,
        'olive' => null,
        'oliveDrab' => null,
        'orange' => null,
        'orangeRed' => null,
        'orchid' => null,
        'paleGoldenrod' => null,
        'paleGreen' => null,
        'paleTurquoise' => null,
        'paleVioletRed' => null,
        'papayaWhip' => null,
        'peachPuff' => null,
        'peru' => null,
        'pink' => null,
        'plum' => null,
        'powderBlue' => null,
        'purple' => null,
        'red' => null,
        'rosyBrown' => null,
        'royalBlue' => null,
        'saddleBrown' => null,
        'salmon' => null,
        'sandyBrown' => null,
        'seaGreen' => null,
        'seaShell' => null,
        'sienna' => null,
        'silver' => null,
        'skyBlue' => null,
        'slateBlue' => null,
        'slateGray' => null,
        'snow' => null,
        'springGreen' => null,
        'steelBlue' => null,
        'tan' => null,
        'teal' => null,
        'thistle' => null,
        'tomato' => null,
        'turquoise' => null,
        'violet' => null,
        'wheat' => null,
        'white' => null,
        'whiteSmoke' => null,
        'yellow' => null,
        'yellowGreen' => null,
        'r' => 'byte',
        'g' => 'byte',
        'b' => 'byte',
        'a' => 'byte',
        'isKnownColor' => null,
        'isEmpty' => null,
        'isNamedColor' => null,
        'isSystemColor' => null,
        'name' => null,
        'empty' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transparent' => 'Transparent',
        'aliceBlue' => 'AliceBlue',
        'antiqueWhite' => 'AntiqueWhite',
        'aqua' => 'Aqua',
        'aquamarine' => 'Aquamarine',
        'azure' => 'Azure',
        'beige' => 'Beige',
        'bisque' => 'Bisque',
        'black' => 'Black',
        'blanchedAlmond' => 'BlanchedAlmond',
        'blue' => 'Blue',
        'blueViolet' => 'BlueViolet',
        'brown' => 'Brown',
        'burlyWood' => 'BurlyWood',
        'cadetBlue' => 'CadetBlue',
        'chartreuse' => 'Chartreuse',
        'chocolate' => 'Chocolate',
        'coral' => 'Coral',
        'cornflowerBlue' => 'CornflowerBlue',
        'cornsilk' => 'Cornsilk',
        'crimson' => 'Crimson',
        'cyan' => 'Cyan',
        'darkBlue' => 'DarkBlue',
        'darkCyan' => 'DarkCyan',
        'darkGoldenrod' => 'DarkGoldenrod',
        'darkGray' => 'DarkGray',
        'darkGreen' => 'DarkGreen',
        'darkKhaki' => 'DarkKhaki',
        'darkMagenta' => 'DarkMagenta',
        'darkOliveGreen' => 'DarkOliveGreen',
        'darkOrange' => 'DarkOrange',
        'darkOrchid' => 'DarkOrchid',
        'darkRed' => 'DarkRed',
        'darkSalmon' => 'DarkSalmon',
        'darkSeaGreen' => 'DarkSeaGreen',
        'darkSlateBlue' => 'DarkSlateBlue',
        'darkSlateGray' => 'DarkSlateGray',
        'darkTurquoise' => 'DarkTurquoise',
        'darkViolet' => 'DarkViolet',
        'deepPink' => 'DeepPink',
        'deepSkyBlue' => 'DeepSkyBlue',
        'dimGray' => 'DimGray',
        'dodgerBlue' => 'DodgerBlue',
        'firebrick' => 'Firebrick',
        'floralWhite' => 'FloralWhite',
        'forestGreen' => 'ForestGreen',
        'fuchsia' => 'Fuchsia',
        'gainsboro' => 'Gainsboro',
        'ghostWhite' => 'GhostWhite',
        'gold' => 'Gold',
        'goldenrod' => 'Goldenrod',
        'gray' => 'Gray',
        'green' => 'Green',
        'greenYellow' => 'GreenYellow',
        'honeydew' => 'Honeydew',
        'hotPink' => 'HotPink',
        'indianRed' => 'IndianRed',
        'indigo' => 'Indigo',
        'ivory' => 'Ivory',
        'khaki' => 'Khaki',
        'lavender' => 'Lavender',
        'lavenderBlush' => 'LavenderBlush',
        'lawnGreen' => 'LawnGreen',
        'lemonChiffon' => 'LemonChiffon',
        'lightBlue' => 'LightBlue',
        'lightCoral' => 'LightCoral',
        'lightCyan' => 'LightCyan',
        'lightGoldenrodYellow' => 'LightGoldenrodYellow',
        'lightGreen' => 'LightGreen',
        'lightGray' => 'LightGray',
        'lightPink' => 'LightPink',
        'lightSalmon' => 'LightSalmon',
        'lightSeaGreen' => 'LightSeaGreen',
        'lightSkyBlue' => 'LightSkyBlue',
        'lightSlateGray' => 'LightSlateGray',
        'lightSteelBlue' => 'LightSteelBlue',
        'lightYellow' => 'LightYellow',
        'lime' => 'Lime',
        'limeGreen' => 'LimeGreen',
        'linen' => 'Linen',
        'magenta' => 'Magenta',
        'maroon' => 'Maroon',
        'mediumAquamarine' => 'MediumAquamarine',
        'mediumBlue' => 'MediumBlue',
        'mediumOrchid' => 'MediumOrchid',
        'mediumPurple' => 'MediumPurple',
        'mediumSeaGreen' => 'MediumSeaGreen',
        'mediumSlateBlue' => 'MediumSlateBlue',
        'mediumSpringGreen' => 'MediumSpringGreen',
        'mediumTurquoise' => 'MediumTurquoise',
        'mediumVioletRed' => 'MediumVioletRed',
        'midnightBlue' => 'MidnightBlue',
        'mintCream' => 'MintCream',
        'mistyRose' => 'MistyRose',
        'moccasin' => 'Moccasin',
        'navajoWhite' => 'NavajoWhite',
        'navy' => 'Navy',
        'oldLace' => 'OldLace',
        'olive' => 'Olive',
        'oliveDrab' => 'OliveDrab',
        'orange' => 'Orange',
        'orangeRed' => 'OrangeRed',
        'orchid' => 'Orchid',
        'paleGoldenrod' => 'PaleGoldenrod',
        'paleGreen' => 'PaleGreen',
        'paleTurquoise' => 'PaleTurquoise',
        'paleVioletRed' => 'PaleVioletRed',
        'papayaWhip' => 'PapayaWhip',
        'peachPuff' => 'PeachPuff',
        'peru' => 'Peru',
        'pink' => 'Pink',
        'plum' => 'Plum',
        'powderBlue' => 'PowderBlue',
        'purple' => 'Purple',
        'red' => 'Red',
        'rosyBrown' => 'RosyBrown',
        'royalBlue' => 'RoyalBlue',
        'saddleBrown' => 'SaddleBrown',
        'salmon' => 'Salmon',
        'sandyBrown' => 'SandyBrown',
        'seaGreen' => 'SeaGreen',
        'seaShell' => 'SeaShell',
        'sienna' => 'Sienna',
        'silver' => 'Silver',
        'skyBlue' => 'SkyBlue',
        'slateBlue' => 'SlateBlue',
        'slateGray' => 'SlateGray',
        'snow' => 'Snow',
        'springGreen' => 'SpringGreen',
        'steelBlue' => 'SteelBlue',
        'tan' => 'Tan',
        'teal' => 'Teal',
        'thistle' => 'Thistle',
        'tomato' => 'Tomato',
        'turquoise' => 'Turquoise',
        'violet' => 'Violet',
        'wheat' => 'Wheat',
        'white' => 'White',
        'whiteSmoke' => 'WhiteSmoke',
        'yellow' => 'Yellow',
        'yellowGreen' => 'YellowGreen',
        'r' => 'R',
        'g' => 'G',
        'b' => 'B',
        'a' => 'A',
        'isKnownColor' => 'IsKnownColor',
        'isEmpty' => 'IsEmpty',
        'isNamedColor' => 'IsNamedColor',
        'isSystemColor' => 'IsSystemColor',
        'name' => 'Name',
        'empty' => 'Empty'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transparent' => 'setTransparent',
        'aliceBlue' => 'setAliceBlue',
        'antiqueWhite' => 'setAntiqueWhite',
        'aqua' => 'setAqua',
        'aquamarine' => 'setAquamarine',
        'azure' => 'setAzure',
        'beige' => 'setBeige',
        'bisque' => 'setBisque',
        'black' => 'setBlack',
        'blanchedAlmond' => 'setBlanchedAlmond',
        'blue' => 'setBlue',
        'blueViolet' => 'setBlueViolet',
        'brown' => 'setBrown',
        'burlyWood' => 'setBurlyWood',
        'cadetBlue' => 'setCadetBlue',
        'chartreuse' => 'setChartreuse',
        'chocolate' => 'setChocolate',
        'coral' => 'setCoral',
        'cornflowerBlue' => 'setCornflowerBlue',
        'cornsilk' => 'setCornsilk',
        'crimson' => 'setCrimson',
        'cyan' => 'setCyan',
        'darkBlue' => 'setDarkBlue',
        'darkCyan' => 'setDarkCyan',
        'darkGoldenrod' => 'setDarkGoldenrod',
        'darkGray' => 'setDarkGray',
        'darkGreen' => 'setDarkGreen',
        'darkKhaki' => 'setDarkKhaki',
        'darkMagenta' => 'setDarkMagenta',
        'darkOliveGreen' => 'setDarkOliveGreen',
        'darkOrange' => 'setDarkOrange',
        'darkOrchid' => 'setDarkOrchid',
        'darkRed' => 'setDarkRed',
        'darkSalmon' => 'setDarkSalmon',
        'darkSeaGreen' => 'setDarkSeaGreen',
        'darkSlateBlue' => 'setDarkSlateBlue',
        'darkSlateGray' => 'setDarkSlateGray',
        'darkTurquoise' => 'setDarkTurquoise',
        'darkViolet' => 'setDarkViolet',
        'deepPink' => 'setDeepPink',
        'deepSkyBlue' => 'setDeepSkyBlue',
        'dimGray' => 'setDimGray',
        'dodgerBlue' => 'setDodgerBlue',
        'firebrick' => 'setFirebrick',
        'floralWhite' => 'setFloralWhite',
        'forestGreen' => 'setForestGreen',
        'fuchsia' => 'setFuchsia',
        'gainsboro' => 'setGainsboro',
        'ghostWhite' => 'setGhostWhite',
        'gold' => 'setGold',
        'goldenrod' => 'setGoldenrod',
        'gray' => 'setGray',
        'green' => 'setGreen',
        'greenYellow' => 'setGreenYellow',
        'honeydew' => 'setHoneydew',
        'hotPink' => 'setHotPink',
        'indianRed' => 'setIndianRed',
        'indigo' => 'setIndigo',
        'ivory' => 'setIvory',
        'khaki' => 'setKhaki',
        'lavender' => 'setLavender',
        'lavenderBlush' => 'setLavenderBlush',
        'lawnGreen' => 'setLawnGreen',
        'lemonChiffon' => 'setLemonChiffon',
        'lightBlue' => 'setLightBlue',
        'lightCoral' => 'setLightCoral',
        'lightCyan' => 'setLightCyan',
        'lightGoldenrodYellow' => 'setLightGoldenrodYellow',
        'lightGreen' => 'setLightGreen',
        'lightGray' => 'setLightGray',
        'lightPink' => 'setLightPink',
        'lightSalmon' => 'setLightSalmon',
        'lightSeaGreen' => 'setLightSeaGreen',
        'lightSkyBlue' => 'setLightSkyBlue',
        'lightSlateGray' => 'setLightSlateGray',
        'lightSteelBlue' => 'setLightSteelBlue',
        'lightYellow' => 'setLightYellow',
        'lime' => 'setLime',
        'limeGreen' => 'setLimeGreen',
        'linen' => 'setLinen',
        'magenta' => 'setMagenta',
        'maroon' => 'setMaroon',
        'mediumAquamarine' => 'setMediumAquamarine',
        'mediumBlue' => 'setMediumBlue',
        'mediumOrchid' => 'setMediumOrchid',
        'mediumPurple' => 'setMediumPurple',
        'mediumSeaGreen' => 'setMediumSeaGreen',
        'mediumSlateBlue' => 'setMediumSlateBlue',
        'mediumSpringGreen' => 'setMediumSpringGreen',
        'mediumTurquoise' => 'setMediumTurquoise',
        'mediumVioletRed' => 'setMediumVioletRed',
        'midnightBlue' => 'setMidnightBlue',
        'mintCream' => 'setMintCream',
        'mistyRose' => 'setMistyRose',
        'moccasin' => 'setMoccasin',
        'navajoWhite' => 'setNavajoWhite',
        'navy' => 'setNavy',
        'oldLace' => 'setOldLace',
        'olive' => 'setOlive',
        'oliveDrab' => 'setOliveDrab',
        'orange' => 'setOrange',
        'orangeRed' => 'setOrangeRed',
        'orchid' => 'setOrchid',
        'paleGoldenrod' => 'setPaleGoldenrod',
        'paleGreen' => 'setPaleGreen',
        'paleTurquoise' => 'setPaleTurquoise',
        'paleVioletRed' => 'setPaleVioletRed',
        'papayaWhip' => 'setPapayaWhip',
        'peachPuff' => 'setPeachPuff',
        'peru' => 'setPeru',
        'pink' => 'setPink',
        'plum' => 'setPlum',
        'powderBlue' => 'setPowderBlue',
        'purple' => 'setPurple',
        'red' => 'setRed',
        'rosyBrown' => 'setRosyBrown',
        'royalBlue' => 'setRoyalBlue',
        'saddleBrown' => 'setSaddleBrown',
        'salmon' => 'setSalmon',
        'sandyBrown' => 'setSandyBrown',
        'seaGreen' => 'setSeaGreen',
        'seaShell' => 'setSeaShell',
        'sienna' => 'setSienna',
        'silver' => 'setSilver',
        'skyBlue' => 'setSkyBlue',
        'slateBlue' => 'setSlateBlue',
        'slateGray' => 'setSlateGray',
        'snow' => 'setSnow',
        'springGreen' => 'setSpringGreen',
        'steelBlue' => 'setSteelBlue',
        'tan' => 'setTan',
        'teal' => 'setTeal',
        'thistle' => 'setThistle',
        'tomato' => 'setTomato',
        'turquoise' => 'setTurquoise',
        'violet' => 'setViolet',
        'wheat' => 'setWheat',
        'white' => 'setWhite',
        'whiteSmoke' => 'setWhiteSmoke',
        'yellow' => 'setYellow',
        'yellowGreen' => 'setYellowGreen',
        'r' => 'setR',
        'g' => 'setG',
        'b' => 'setB',
        'a' => 'setA',
        'isKnownColor' => 'setIsKnownColor',
        'isEmpty' => 'setIsEmpty',
        'isNamedColor' => 'setIsNamedColor',
        'isSystemColor' => 'setIsSystemColor',
        'name' => 'setName',
        'empty' => 'setEmpty'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transparent' => 'getTransparent',
        'aliceBlue' => 'getAliceBlue',
        'antiqueWhite' => 'getAntiqueWhite',
        'aqua' => 'getAqua',
        'aquamarine' => 'getAquamarine',
        'azure' => 'getAzure',
        'beige' => 'getBeige',
        'bisque' => 'getBisque',
        'black' => 'getBlack',
        'blanchedAlmond' => 'getBlanchedAlmond',
        'blue' => 'getBlue',
        'blueViolet' => 'getBlueViolet',
        'brown' => 'getBrown',
        'burlyWood' => 'getBurlyWood',
        'cadetBlue' => 'getCadetBlue',
        'chartreuse' => 'getChartreuse',
        'chocolate' => 'getChocolate',
        'coral' => 'getCoral',
        'cornflowerBlue' => 'getCornflowerBlue',
        'cornsilk' => 'getCornsilk',
        'crimson' => 'getCrimson',
        'cyan' => 'getCyan',
        'darkBlue' => 'getDarkBlue',
        'darkCyan' => 'getDarkCyan',
        'darkGoldenrod' => 'getDarkGoldenrod',
        'darkGray' => 'getDarkGray',
        'darkGreen' => 'getDarkGreen',
        'darkKhaki' => 'getDarkKhaki',
        'darkMagenta' => 'getDarkMagenta',
        'darkOliveGreen' => 'getDarkOliveGreen',
        'darkOrange' => 'getDarkOrange',
        'darkOrchid' => 'getDarkOrchid',
        'darkRed' => 'getDarkRed',
        'darkSalmon' => 'getDarkSalmon',
        'darkSeaGreen' => 'getDarkSeaGreen',
        'darkSlateBlue' => 'getDarkSlateBlue',
        'darkSlateGray' => 'getDarkSlateGray',
        'darkTurquoise' => 'getDarkTurquoise',
        'darkViolet' => 'getDarkViolet',
        'deepPink' => 'getDeepPink',
        'deepSkyBlue' => 'getDeepSkyBlue',
        'dimGray' => 'getDimGray',
        'dodgerBlue' => 'getDodgerBlue',
        'firebrick' => 'getFirebrick',
        'floralWhite' => 'getFloralWhite',
        'forestGreen' => 'getForestGreen',
        'fuchsia' => 'getFuchsia',
        'gainsboro' => 'getGainsboro',
        'ghostWhite' => 'getGhostWhite',
        'gold' => 'getGold',
        'goldenrod' => 'getGoldenrod',
        'gray' => 'getGray',
        'green' => 'getGreen',
        'greenYellow' => 'getGreenYellow',
        'honeydew' => 'getHoneydew',
        'hotPink' => 'getHotPink',
        'indianRed' => 'getIndianRed',
        'indigo' => 'getIndigo',
        'ivory' => 'getIvory',
        'khaki' => 'getKhaki',
        'lavender' => 'getLavender',
        'lavenderBlush' => 'getLavenderBlush',
        'lawnGreen' => 'getLawnGreen',
        'lemonChiffon' => 'getLemonChiffon',
        'lightBlue' => 'getLightBlue',
        'lightCoral' => 'getLightCoral',
        'lightCyan' => 'getLightCyan',
        'lightGoldenrodYellow' => 'getLightGoldenrodYellow',
        'lightGreen' => 'getLightGreen',
        'lightGray' => 'getLightGray',
        'lightPink' => 'getLightPink',
        'lightSalmon' => 'getLightSalmon',
        'lightSeaGreen' => 'getLightSeaGreen',
        'lightSkyBlue' => 'getLightSkyBlue',
        'lightSlateGray' => 'getLightSlateGray',
        'lightSteelBlue' => 'getLightSteelBlue',
        'lightYellow' => 'getLightYellow',
        'lime' => 'getLime',
        'limeGreen' => 'getLimeGreen',
        'linen' => 'getLinen',
        'magenta' => 'getMagenta',
        'maroon' => 'getMaroon',
        'mediumAquamarine' => 'getMediumAquamarine',
        'mediumBlue' => 'getMediumBlue',
        'mediumOrchid' => 'getMediumOrchid',
        'mediumPurple' => 'getMediumPurple',
        'mediumSeaGreen' => 'getMediumSeaGreen',
        'mediumSlateBlue' => 'getMediumSlateBlue',
        'mediumSpringGreen' => 'getMediumSpringGreen',
        'mediumTurquoise' => 'getMediumTurquoise',
        'mediumVioletRed' => 'getMediumVioletRed',
        'midnightBlue' => 'getMidnightBlue',
        'mintCream' => 'getMintCream',
        'mistyRose' => 'getMistyRose',
        'moccasin' => 'getMoccasin',
        'navajoWhite' => 'getNavajoWhite',
        'navy' => 'getNavy',
        'oldLace' => 'getOldLace',
        'olive' => 'getOlive',
        'oliveDrab' => 'getOliveDrab',
        'orange' => 'getOrange',
        'orangeRed' => 'getOrangeRed',
        'orchid' => 'getOrchid',
        'paleGoldenrod' => 'getPaleGoldenrod',
        'paleGreen' => 'getPaleGreen',
        'paleTurquoise' => 'getPaleTurquoise',
        'paleVioletRed' => 'getPaleVioletRed',
        'papayaWhip' => 'getPapayaWhip',
        'peachPuff' => 'getPeachPuff',
        'peru' => 'getPeru',
        'pink' => 'getPink',
        'plum' => 'getPlum',
        'powderBlue' => 'getPowderBlue',
        'purple' => 'getPurple',
        'red' => 'getRed',
        'rosyBrown' => 'getRosyBrown',
        'royalBlue' => 'getRoyalBlue',
        'saddleBrown' => 'getSaddleBrown',
        'salmon' => 'getSalmon',
        'sandyBrown' => 'getSandyBrown',
        'seaGreen' => 'getSeaGreen',
        'seaShell' => 'getSeaShell',
        'sienna' => 'getSienna',
        'silver' => 'getSilver',
        'skyBlue' => 'getSkyBlue',
        'slateBlue' => 'getSlateBlue',
        'slateGray' => 'getSlateGray',
        'snow' => 'getSnow',
        'springGreen' => 'getSpringGreen',
        'steelBlue' => 'getSteelBlue',
        'tan' => 'getTan',
        'teal' => 'getTeal',
        'thistle' => 'getThistle',
        'tomato' => 'getTomato',
        'turquoise' => 'getTurquoise',
        'violet' => 'getViolet',
        'wheat' => 'getWheat',
        'white' => 'getWhite',
        'whiteSmoke' => 'getWhiteSmoke',
        'yellow' => 'getYellow',
        'yellowGreen' => 'getYellowGreen',
        'r' => 'getR',
        'g' => 'getG',
        'b' => 'getB',
        'a' => 'getA',
        'isKnownColor' => 'getIsKnownColor',
        'isEmpty' => 'getIsEmpty',
        'isNamedColor' => 'getIsNamedColor',
        'isSystemColor' => 'getIsSystemColor',
        'name' => 'getName',
        'empty' => 'getEmpty'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['transparent'] = isset($data['transparent']) ? $data['transparent'] : null;
        $this->container['aliceBlue'] = isset($data['aliceBlue']) ? $data['aliceBlue'] : null;
        $this->container['antiqueWhite'] = isset($data['antiqueWhite']) ? $data['antiqueWhite'] : null;
        $this->container['aqua'] = isset($data['aqua']) ? $data['aqua'] : null;
        $this->container['aquamarine'] = isset($data['aquamarine']) ? $data['aquamarine'] : null;
        $this->container['azure'] = isset($data['azure']) ? $data['azure'] : null;
        $this->container['beige'] = isset($data['beige']) ? $data['beige'] : null;
        $this->container['bisque'] = isset($data['bisque']) ? $data['bisque'] : null;
        $this->container['black'] = isset($data['black']) ? $data['black'] : null;
        $this->container['blanchedAlmond'] = isset($data['blanchedAlmond']) ? $data['blanchedAlmond'] : null;
        $this->container['blue'] = isset($data['blue']) ? $data['blue'] : null;
        $this->container['blueViolet'] = isset($data['blueViolet']) ? $data['blueViolet'] : null;
        $this->container['brown'] = isset($data['brown']) ? $data['brown'] : null;
        $this->container['burlyWood'] = isset($data['burlyWood']) ? $data['burlyWood'] : null;
        $this->container['cadetBlue'] = isset($data['cadetBlue']) ? $data['cadetBlue'] : null;
        $this->container['chartreuse'] = isset($data['chartreuse']) ? $data['chartreuse'] : null;
        $this->container['chocolate'] = isset($data['chocolate']) ? $data['chocolate'] : null;
        $this->container['coral'] = isset($data['coral']) ? $data['coral'] : null;
        $this->container['cornflowerBlue'] = isset($data['cornflowerBlue']) ? $data['cornflowerBlue'] : null;
        $this->container['cornsilk'] = isset($data['cornsilk']) ? $data['cornsilk'] : null;
        $this->container['crimson'] = isset($data['crimson']) ? $data['crimson'] : null;
        $this->container['cyan'] = isset($data['cyan']) ? $data['cyan'] : null;
        $this->container['darkBlue'] = isset($data['darkBlue']) ? $data['darkBlue'] : null;
        $this->container['darkCyan'] = isset($data['darkCyan']) ? $data['darkCyan'] : null;
        $this->container['darkGoldenrod'] = isset($data['darkGoldenrod']) ? $data['darkGoldenrod'] : null;
        $this->container['darkGray'] = isset($data['darkGray']) ? $data['darkGray'] : null;
        $this->container['darkGreen'] = isset($data['darkGreen']) ? $data['darkGreen'] : null;
        $this->container['darkKhaki'] = isset($data['darkKhaki']) ? $data['darkKhaki'] : null;
        $this->container['darkMagenta'] = isset($data['darkMagenta']) ? $data['darkMagenta'] : null;
        $this->container['darkOliveGreen'] = isset($data['darkOliveGreen']) ? $data['darkOliveGreen'] : null;
        $this->container['darkOrange'] = isset($data['darkOrange']) ? $data['darkOrange'] : null;
        $this->container['darkOrchid'] = isset($data['darkOrchid']) ? $data['darkOrchid'] : null;
        $this->container['darkRed'] = isset($data['darkRed']) ? $data['darkRed'] : null;
        $this->container['darkSalmon'] = isset($data['darkSalmon']) ? $data['darkSalmon'] : null;
        $this->container['darkSeaGreen'] = isset($data['darkSeaGreen']) ? $data['darkSeaGreen'] : null;
        $this->container['darkSlateBlue'] = isset($data['darkSlateBlue']) ? $data['darkSlateBlue'] : null;
        $this->container['darkSlateGray'] = isset($data['darkSlateGray']) ? $data['darkSlateGray'] : null;
        $this->container['darkTurquoise'] = isset($data['darkTurquoise']) ? $data['darkTurquoise'] : null;
        $this->container['darkViolet'] = isset($data['darkViolet']) ? $data['darkViolet'] : null;
        $this->container['deepPink'] = isset($data['deepPink']) ? $data['deepPink'] : null;
        $this->container['deepSkyBlue'] = isset($data['deepSkyBlue']) ? $data['deepSkyBlue'] : null;
        $this->container['dimGray'] = isset($data['dimGray']) ? $data['dimGray'] : null;
        $this->container['dodgerBlue'] = isset($data['dodgerBlue']) ? $data['dodgerBlue'] : null;
        $this->container['firebrick'] = isset($data['firebrick']) ? $data['firebrick'] : null;
        $this->container['floralWhite'] = isset($data['floralWhite']) ? $data['floralWhite'] : null;
        $this->container['forestGreen'] = isset($data['forestGreen']) ? $data['forestGreen'] : null;
        $this->container['fuchsia'] = isset($data['fuchsia']) ? $data['fuchsia'] : null;
        $this->container['gainsboro'] = isset($data['gainsboro']) ? $data['gainsboro'] : null;
        $this->container['ghostWhite'] = isset($data['ghostWhite']) ? $data['ghostWhite'] : null;
        $this->container['gold'] = isset($data['gold']) ? $data['gold'] : null;
        $this->container['goldenrod'] = isset($data['goldenrod']) ? $data['goldenrod'] : null;
        $this->container['gray'] = isset($data['gray']) ? $data['gray'] : null;
        $this->container['green'] = isset($data['green']) ? $data['green'] : null;
        $this->container['greenYellow'] = isset($data['greenYellow']) ? $data['greenYellow'] : null;
        $this->container['honeydew'] = isset($data['honeydew']) ? $data['honeydew'] : null;
        $this->container['hotPink'] = isset($data['hotPink']) ? $data['hotPink'] : null;
        $this->container['indianRed'] = isset($data['indianRed']) ? $data['indianRed'] : null;
        $this->container['indigo'] = isset($data['indigo']) ? $data['indigo'] : null;
        $this->container['ivory'] = isset($data['ivory']) ? $data['ivory'] : null;
        $this->container['khaki'] = isset($data['khaki']) ? $data['khaki'] : null;
        $this->container['lavender'] = isset($data['lavender']) ? $data['lavender'] : null;
        $this->container['lavenderBlush'] = isset($data['lavenderBlush']) ? $data['lavenderBlush'] : null;
        $this->container['lawnGreen'] = isset($data['lawnGreen']) ? $data['lawnGreen'] : null;
        $this->container['lemonChiffon'] = isset($data['lemonChiffon']) ? $data['lemonChiffon'] : null;
        $this->container['lightBlue'] = isset($data['lightBlue']) ? $data['lightBlue'] : null;
        $this->container['lightCoral'] = isset($data['lightCoral']) ? $data['lightCoral'] : null;
        $this->container['lightCyan'] = isset($data['lightCyan']) ? $data['lightCyan'] : null;
        $this->container['lightGoldenrodYellow'] = isset($data['lightGoldenrodYellow']) ? $data['lightGoldenrodYellow'] : null;
        $this->container['lightGreen'] = isset($data['lightGreen']) ? $data['lightGreen'] : null;
        $this->container['lightGray'] = isset($data['lightGray']) ? $data['lightGray'] : null;
        $this->container['lightPink'] = isset($data['lightPink']) ? $data['lightPink'] : null;
        $this->container['lightSalmon'] = isset($data['lightSalmon']) ? $data['lightSalmon'] : null;
        $this->container['lightSeaGreen'] = isset($data['lightSeaGreen']) ? $data['lightSeaGreen'] : null;
        $this->container['lightSkyBlue'] = isset($data['lightSkyBlue']) ? $data['lightSkyBlue'] : null;
        $this->container['lightSlateGray'] = isset($data['lightSlateGray']) ? $data['lightSlateGray'] : null;
        $this->container['lightSteelBlue'] = isset($data['lightSteelBlue']) ? $data['lightSteelBlue'] : null;
        $this->container['lightYellow'] = isset($data['lightYellow']) ? $data['lightYellow'] : null;
        $this->container['lime'] = isset($data['lime']) ? $data['lime'] : null;
        $this->container['limeGreen'] = isset($data['limeGreen']) ? $data['limeGreen'] : null;
        $this->container['linen'] = isset($data['linen']) ? $data['linen'] : null;
        $this->container['magenta'] = isset($data['magenta']) ? $data['magenta'] : null;
        $this->container['maroon'] = isset($data['maroon']) ? $data['maroon'] : null;
        $this->container['mediumAquamarine'] = isset($data['mediumAquamarine']) ? $data['mediumAquamarine'] : null;
        $this->container['mediumBlue'] = isset($data['mediumBlue']) ? $data['mediumBlue'] : null;
        $this->container['mediumOrchid'] = isset($data['mediumOrchid']) ? $data['mediumOrchid'] : null;
        $this->container['mediumPurple'] = isset($data['mediumPurple']) ? $data['mediumPurple'] : null;
        $this->container['mediumSeaGreen'] = isset($data['mediumSeaGreen']) ? $data['mediumSeaGreen'] : null;
        $this->container['mediumSlateBlue'] = isset($data['mediumSlateBlue']) ? $data['mediumSlateBlue'] : null;
        $this->container['mediumSpringGreen'] = isset($data['mediumSpringGreen']) ? $data['mediumSpringGreen'] : null;
        $this->container['mediumTurquoise'] = isset($data['mediumTurquoise']) ? $data['mediumTurquoise'] : null;
        $this->container['mediumVioletRed'] = isset($data['mediumVioletRed']) ? $data['mediumVioletRed'] : null;
        $this->container['midnightBlue'] = isset($data['midnightBlue']) ? $data['midnightBlue'] : null;
        $this->container['mintCream'] = isset($data['mintCream']) ? $data['mintCream'] : null;
        $this->container['mistyRose'] = isset($data['mistyRose']) ? $data['mistyRose'] : null;
        $this->container['moccasin'] = isset($data['moccasin']) ? $data['moccasin'] : null;
        $this->container['navajoWhite'] = isset($data['navajoWhite']) ? $data['navajoWhite'] : null;
        $this->container['navy'] = isset($data['navy']) ? $data['navy'] : null;
        $this->container['oldLace'] = isset($data['oldLace']) ? $data['oldLace'] : null;
        $this->container['olive'] = isset($data['olive']) ? $data['olive'] : null;
        $this->container['oliveDrab'] = isset($data['oliveDrab']) ? $data['oliveDrab'] : null;
        $this->container['orange'] = isset($data['orange']) ? $data['orange'] : null;
        $this->container['orangeRed'] = isset($data['orangeRed']) ? $data['orangeRed'] : null;
        $this->container['orchid'] = isset($data['orchid']) ? $data['orchid'] : null;
        $this->container['paleGoldenrod'] = isset($data['paleGoldenrod']) ? $data['paleGoldenrod'] : null;
        $this->container['paleGreen'] = isset($data['paleGreen']) ? $data['paleGreen'] : null;
        $this->container['paleTurquoise'] = isset($data['paleTurquoise']) ? $data['paleTurquoise'] : null;
        $this->container['paleVioletRed'] = isset($data['paleVioletRed']) ? $data['paleVioletRed'] : null;
        $this->container['papayaWhip'] = isset($data['papayaWhip']) ? $data['papayaWhip'] : null;
        $this->container['peachPuff'] = isset($data['peachPuff']) ? $data['peachPuff'] : null;
        $this->container['peru'] = isset($data['peru']) ? $data['peru'] : null;
        $this->container['pink'] = isset($data['pink']) ? $data['pink'] : null;
        $this->container['plum'] = isset($data['plum']) ? $data['plum'] : null;
        $this->container['powderBlue'] = isset($data['powderBlue']) ? $data['powderBlue'] : null;
        $this->container['purple'] = isset($data['purple']) ? $data['purple'] : null;
        $this->container['red'] = isset($data['red']) ? $data['red'] : null;
        $this->container['rosyBrown'] = isset($data['rosyBrown']) ? $data['rosyBrown'] : null;
        $this->container['royalBlue'] = isset($data['royalBlue']) ? $data['royalBlue'] : null;
        $this->container['saddleBrown'] = isset($data['saddleBrown']) ? $data['saddleBrown'] : null;
        $this->container['salmon'] = isset($data['salmon']) ? $data['salmon'] : null;
        $this->container['sandyBrown'] = isset($data['sandyBrown']) ? $data['sandyBrown'] : null;
        $this->container['seaGreen'] = isset($data['seaGreen']) ? $data['seaGreen'] : null;
        $this->container['seaShell'] = isset($data['seaShell']) ? $data['seaShell'] : null;
        $this->container['sienna'] = isset($data['sienna']) ? $data['sienna'] : null;
        $this->container['silver'] = isset($data['silver']) ? $data['silver'] : null;
        $this->container['skyBlue'] = isset($data['skyBlue']) ? $data['skyBlue'] : null;
        $this->container['slateBlue'] = isset($data['slateBlue']) ? $data['slateBlue'] : null;
        $this->container['slateGray'] = isset($data['slateGray']) ? $data['slateGray'] : null;
        $this->container['snow'] = isset($data['snow']) ? $data['snow'] : null;
        $this->container['springGreen'] = isset($data['springGreen']) ? $data['springGreen'] : null;
        $this->container['steelBlue'] = isset($data['steelBlue']) ? $data['steelBlue'] : null;
        $this->container['tan'] = isset($data['tan']) ? $data['tan'] : null;
        $this->container['teal'] = isset($data['teal']) ? $data['teal'] : null;
        $this->container['thistle'] = isset($data['thistle']) ? $data['thistle'] : null;
        $this->container['tomato'] = isset($data['tomato']) ? $data['tomato'] : null;
        $this->container['turquoise'] = isset($data['turquoise']) ? $data['turquoise'] : null;
        $this->container['violet'] = isset($data['violet']) ? $data['violet'] : null;
        $this->container['wheat'] = isset($data['wheat']) ? $data['wheat'] : null;
        $this->container['white'] = isset($data['white']) ? $data['white'] : null;
        $this->container['whiteSmoke'] = isset($data['whiteSmoke']) ? $data['whiteSmoke'] : null;
        $this->container['yellow'] = isset($data['yellow']) ? $data['yellow'] : null;
        $this->container['yellowGreen'] = isset($data['yellowGreen']) ? $data['yellowGreen'] : null;
        $this->container['r'] = isset($data['r']) ? $data['r'] : null;
        $this->container['g'] = isset($data['g']) ? $data['g'] : null;
        $this->container['b'] = isset($data['b']) ? $data['b'] : null;
        $this->container['a'] = isset($data['a']) ? $data['a'] : null;
        $this->container['isKnownColor'] = isset($data['isKnownColor']) ? $data['isKnownColor'] : null;
        $this->container['isEmpty'] = isset($data['isEmpty']) ? $data['isEmpty'] : null;
        $this->container['isNamedColor'] = isset($data['isNamedColor']) ? $data['isNamedColor'] : null;
        $this->container['isSystemColor'] = isset($data['isSystemColor']) ? $data['isSystemColor'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['empty'] = isset($data['empty']) ? $data['empty'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /*
     * Gets transparent
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getTransparent()
    {
        return $this->container['transparent'];
    }

    /*
     * Sets transparent
     *
     * @param \GroupDocs\Comparison\Model\Color $transparent transparent
     *
     * @return $this
     */
    public function setTransparent($transparent)
    {
        $this->container['transparent'] = $transparent;

        return $this;
    }

    /*
     * Gets aliceBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getAliceBlue()
    {
        return $this->container['aliceBlue'];
    }

    /*
     * Sets aliceBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $aliceBlue aliceBlue
     *
     * @return $this
     */
    public function setAliceBlue($aliceBlue)
    {
        $this->container['aliceBlue'] = $aliceBlue;

        return $this;
    }

    /*
     * Gets antiqueWhite
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getAntiqueWhite()
    {
        return $this->container['antiqueWhite'];
    }

    /*
     * Sets antiqueWhite
     *
     * @param \GroupDocs\Comparison\Model\Color $antiqueWhite antiqueWhite
     *
     * @return $this
     */
    public function setAntiqueWhite($antiqueWhite)
    {
        $this->container['antiqueWhite'] = $antiqueWhite;

        return $this;
    }

    /*
     * Gets aqua
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getAqua()
    {
        return $this->container['aqua'];
    }

    /*
     * Sets aqua
     *
     * @param \GroupDocs\Comparison\Model\Color $aqua aqua
     *
     * @return $this
     */
    public function setAqua($aqua)
    {
        $this->container['aqua'] = $aqua;

        return $this;
    }

    /*
     * Gets aquamarine
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getAquamarine()
    {
        return $this->container['aquamarine'];
    }

    /*
     * Sets aquamarine
     *
     * @param \GroupDocs\Comparison\Model\Color $aquamarine aquamarine
     *
     * @return $this
     */
    public function setAquamarine($aquamarine)
    {
        $this->container['aquamarine'] = $aquamarine;

        return $this;
    }

    /*
     * Gets azure
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getAzure()
    {
        return $this->container['azure'];
    }

    /*
     * Sets azure
     *
     * @param \GroupDocs\Comparison\Model\Color $azure azure
     *
     * @return $this
     */
    public function setAzure($azure)
    {
        $this->container['azure'] = $azure;

        return $this;
    }

    /*
     * Gets beige
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBeige()
    {
        return $this->container['beige'];
    }

    /*
     * Sets beige
     *
     * @param \GroupDocs\Comparison\Model\Color $beige beige
     *
     * @return $this
     */
    public function setBeige($beige)
    {
        $this->container['beige'] = $beige;

        return $this;
    }

    /*
     * Gets bisque
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBisque()
    {
        return $this->container['bisque'];
    }

    /*
     * Sets bisque
     *
     * @param \GroupDocs\Comparison\Model\Color $bisque bisque
     *
     * @return $this
     */
    public function setBisque($bisque)
    {
        $this->container['bisque'] = $bisque;

        return $this;
    }

    /*
     * Gets black
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBlack()
    {
        return $this->container['black'];
    }

    /*
     * Sets black
     *
     * @param \GroupDocs\Comparison\Model\Color $black black
     *
     * @return $this
     */
    public function setBlack($black)
    {
        $this->container['black'] = $black;

        return $this;
    }

    /*
     * Gets blanchedAlmond
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBlanchedAlmond()
    {
        return $this->container['blanchedAlmond'];
    }

    /*
     * Sets blanchedAlmond
     *
     * @param \GroupDocs\Comparison\Model\Color $blanchedAlmond blanchedAlmond
     *
     * @return $this
     */
    public function setBlanchedAlmond($blanchedAlmond)
    {
        $this->container['blanchedAlmond'] = $blanchedAlmond;

        return $this;
    }

    /*
     * Gets blue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBlue()
    {
        return $this->container['blue'];
    }

    /*
     * Sets blue
     *
     * @param \GroupDocs\Comparison\Model\Color $blue blue
     *
     * @return $this
     */
    public function setBlue($blue)
    {
        $this->container['blue'] = $blue;

        return $this;
    }

    /*
     * Gets blueViolet
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBlueViolet()
    {
        return $this->container['blueViolet'];
    }

    /*
     * Sets blueViolet
     *
     * @param \GroupDocs\Comparison\Model\Color $blueViolet blueViolet
     *
     * @return $this
     */
    public function setBlueViolet($blueViolet)
    {
        $this->container['blueViolet'] = $blueViolet;

        return $this;
    }

    /*
     * Gets brown
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBrown()
    {
        return $this->container['brown'];
    }

    /*
     * Sets brown
     *
     * @param \GroupDocs\Comparison\Model\Color $brown brown
     *
     * @return $this
     */
    public function setBrown($brown)
    {
        $this->container['brown'] = $brown;

        return $this;
    }

    /*
     * Gets burlyWood
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getBurlyWood()
    {
        return $this->container['burlyWood'];
    }

    /*
     * Sets burlyWood
     *
     * @param \GroupDocs\Comparison\Model\Color $burlyWood burlyWood
     *
     * @return $this
     */
    public function setBurlyWood($burlyWood)
    {
        $this->container['burlyWood'] = $burlyWood;

        return $this;
    }

    /*
     * Gets cadetBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getCadetBlue()
    {
        return $this->container['cadetBlue'];
    }

    /*
     * Sets cadetBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $cadetBlue cadetBlue
     *
     * @return $this
     */
    public function setCadetBlue($cadetBlue)
    {
        $this->container['cadetBlue'] = $cadetBlue;

        return $this;
    }

    /*
     * Gets chartreuse
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getChartreuse()
    {
        return $this->container['chartreuse'];
    }

    /*
     * Sets chartreuse
     *
     * @param \GroupDocs\Comparison\Model\Color $chartreuse chartreuse
     *
     * @return $this
     */
    public function setChartreuse($chartreuse)
    {
        $this->container['chartreuse'] = $chartreuse;

        return $this;
    }

    /*
     * Gets chocolate
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getChocolate()
    {
        return $this->container['chocolate'];
    }

    /*
     * Sets chocolate
     *
     * @param \GroupDocs\Comparison\Model\Color $chocolate chocolate
     *
     * @return $this
     */
    public function setChocolate($chocolate)
    {
        $this->container['chocolate'] = $chocolate;

        return $this;
    }

    /*
     * Gets coral
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getCoral()
    {
        return $this->container['coral'];
    }

    /*
     * Sets coral
     *
     * @param \GroupDocs\Comparison\Model\Color $coral coral
     *
     * @return $this
     */
    public function setCoral($coral)
    {
        $this->container['coral'] = $coral;

        return $this;
    }

    /*
     * Gets cornflowerBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getCornflowerBlue()
    {
        return $this->container['cornflowerBlue'];
    }

    /*
     * Sets cornflowerBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $cornflowerBlue cornflowerBlue
     *
     * @return $this
     */
    public function setCornflowerBlue($cornflowerBlue)
    {
        $this->container['cornflowerBlue'] = $cornflowerBlue;

        return $this;
    }

    /*
     * Gets cornsilk
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getCornsilk()
    {
        return $this->container['cornsilk'];
    }

    /*
     * Sets cornsilk
     *
     * @param \GroupDocs\Comparison\Model\Color $cornsilk cornsilk
     *
     * @return $this
     */
    public function setCornsilk($cornsilk)
    {
        $this->container['cornsilk'] = $cornsilk;

        return $this;
    }

    /*
     * Gets crimson
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getCrimson()
    {
        return $this->container['crimson'];
    }

    /*
     * Sets crimson
     *
     * @param \GroupDocs\Comparison\Model\Color $crimson crimson
     *
     * @return $this
     */
    public function setCrimson($crimson)
    {
        $this->container['crimson'] = $crimson;

        return $this;
    }

    /*
     * Gets cyan
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getCyan()
    {
        return $this->container['cyan'];
    }

    /*
     * Sets cyan
     *
     * @param \GroupDocs\Comparison\Model\Color $cyan cyan
     *
     * @return $this
     */
    public function setCyan($cyan)
    {
        $this->container['cyan'] = $cyan;

        return $this;
    }

    /*
     * Gets darkBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkBlue()
    {
        return $this->container['darkBlue'];
    }

    /*
     * Sets darkBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $darkBlue darkBlue
     *
     * @return $this
     */
    public function setDarkBlue($darkBlue)
    {
        $this->container['darkBlue'] = $darkBlue;

        return $this;
    }

    /*
     * Gets darkCyan
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkCyan()
    {
        return $this->container['darkCyan'];
    }

    /*
     * Sets darkCyan
     *
     * @param \GroupDocs\Comparison\Model\Color $darkCyan darkCyan
     *
     * @return $this
     */
    public function setDarkCyan($darkCyan)
    {
        $this->container['darkCyan'] = $darkCyan;

        return $this;
    }

    /*
     * Gets darkGoldenrod
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkGoldenrod()
    {
        return $this->container['darkGoldenrod'];
    }

    /*
     * Sets darkGoldenrod
     *
     * @param \GroupDocs\Comparison\Model\Color $darkGoldenrod darkGoldenrod
     *
     * @return $this
     */
    public function setDarkGoldenrod($darkGoldenrod)
    {
        $this->container['darkGoldenrod'] = $darkGoldenrod;

        return $this;
    }

    /*
     * Gets darkGray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkGray()
    {
        return $this->container['darkGray'];
    }

    /*
     * Sets darkGray
     *
     * @param \GroupDocs\Comparison\Model\Color $darkGray darkGray
     *
     * @return $this
     */
    public function setDarkGray($darkGray)
    {
        $this->container['darkGray'] = $darkGray;

        return $this;
    }

    /*
     * Gets darkGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkGreen()
    {
        return $this->container['darkGreen'];
    }

    /*
     * Sets darkGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $darkGreen darkGreen
     *
     * @return $this
     */
    public function setDarkGreen($darkGreen)
    {
        $this->container['darkGreen'] = $darkGreen;

        return $this;
    }

    /*
     * Gets darkKhaki
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkKhaki()
    {
        return $this->container['darkKhaki'];
    }

    /*
     * Sets darkKhaki
     *
     * @param \GroupDocs\Comparison\Model\Color $darkKhaki darkKhaki
     *
     * @return $this
     */
    public function setDarkKhaki($darkKhaki)
    {
        $this->container['darkKhaki'] = $darkKhaki;

        return $this;
    }

    /*
     * Gets darkMagenta
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkMagenta()
    {
        return $this->container['darkMagenta'];
    }

    /*
     * Sets darkMagenta
     *
     * @param \GroupDocs\Comparison\Model\Color $darkMagenta darkMagenta
     *
     * @return $this
     */
    public function setDarkMagenta($darkMagenta)
    {
        $this->container['darkMagenta'] = $darkMagenta;

        return $this;
    }

    /*
     * Gets darkOliveGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkOliveGreen()
    {
        return $this->container['darkOliveGreen'];
    }

    /*
     * Sets darkOliveGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $darkOliveGreen darkOliveGreen
     *
     * @return $this
     */
    public function setDarkOliveGreen($darkOliveGreen)
    {
        $this->container['darkOliveGreen'] = $darkOliveGreen;

        return $this;
    }

    /*
     * Gets darkOrange
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkOrange()
    {
        return $this->container['darkOrange'];
    }

    /*
     * Sets darkOrange
     *
     * @param \GroupDocs\Comparison\Model\Color $darkOrange darkOrange
     *
     * @return $this
     */
    public function setDarkOrange($darkOrange)
    {
        $this->container['darkOrange'] = $darkOrange;

        return $this;
    }

    /*
     * Gets darkOrchid
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkOrchid()
    {
        return $this->container['darkOrchid'];
    }

    /*
     * Sets darkOrchid
     *
     * @param \GroupDocs\Comparison\Model\Color $darkOrchid darkOrchid
     *
     * @return $this
     */
    public function setDarkOrchid($darkOrchid)
    {
        $this->container['darkOrchid'] = $darkOrchid;

        return $this;
    }

    /*
     * Gets darkRed
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkRed()
    {
        return $this->container['darkRed'];
    }

    /*
     * Sets darkRed
     *
     * @param \GroupDocs\Comparison\Model\Color $darkRed darkRed
     *
     * @return $this
     */
    public function setDarkRed($darkRed)
    {
        $this->container['darkRed'] = $darkRed;

        return $this;
    }

    /*
     * Gets darkSalmon
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkSalmon()
    {
        return $this->container['darkSalmon'];
    }

    /*
     * Sets darkSalmon
     *
     * @param \GroupDocs\Comparison\Model\Color $darkSalmon darkSalmon
     *
     * @return $this
     */
    public function setDarkSalmon($darkSalmon)
    {
        $this->container['darkSalmon'] = $darkSalmon;

        return $this;
    }

    /*
     * Gets darkSeaGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkSeaGreen()
    {
        return $this->container['darkSeaGreen'];
    }

    /*
     * Sets darkSeaGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $darkSeaGreen darkSeaGreen
     *
     * @return $this
     */
    public function setDarkSeaGreen($darkSeaGreen)
    {
        $this->container['darkSeaGreen'] = $darkSeaGreen;

        return $this;
    }

    /*
     * Gets darkSlateBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkSlateBlue()
    {
        return $this->container['darkSlateBlue'];
    }

    /*
     * Sets darkSlateBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $darkSlateBlue darkSlateBlue
     *
     * @return $this
     */
    public function setDarkSlateBlue($darkSlateBlue)
    {
        $this->container['darkSlateBlue'] = $darkSlateBlue;

        return $this;
    }

    /*
     * Gets darkSlateGray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkSlateGray()
    {
        return $this->container['darkSlateGray'];
    }

    /*
     * Sets darkSlateGray
     *
     * @param \GroupDocs\Comparison\Model\Color $darkSlateGray darkSlateGray
     *
     * @return $this
     */
    public function setDarkSlateGray($darkSlateGray)
    {
        $this->container['darkSlateGray'] = $darkSlateGray;

        return $this;
    }

    /*
     * Gets darkTurquoise
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkTurquoise()
    {
        return $this->container['darkTurquoise'];
    }

    /*
     * Sets darkTurquoise
     *
     * @param \GroupDocs\Comparison\Model\Color $darkTurquoise darkTurquoise
     *
     * @return $this
     */
    public function setDarkTurquoise($darkTurquoise)
    {
        $this->container['darkTurquoise'] = $darkTurquoise;

        return $this;
    }

    /*
     * Gets darkViolet
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDarkViolet()
    {
        return $this->container['darkViolet'];
    }

    /*
     * Sets darkViolet
     *
     * @param \GroupDocs\Comparison\Model\Color $darkViolet darkViolet
     *
     * @return $this
     */
    public function setDarkViolet($darkViolet)
    {
        $this->container['darkViolet'] = $darkViolet;

        return $this;
    }

    /*
     * Gets deepPink
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDeepPink()
    {
        return $this->container['deepPink'];
    }

    /*
     * Sets deepPink
     *
     * @param \GroupDocs\Comparison\Model\Color $deepPink deepPink
     *
     * @return $this
     */
    public function setDeepPink($deepPink)
    {
        $this->container['deepPink'] = $deepPink;

        return $this;
    }

    /*
     * Gets deepSkyBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDeepSkyBlue()
    {
        return $this->container['deepSkyBlue'];
    }

    /*
     * Sets deepSkyBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $deepSkyBlue deepSkyBlue
     *
     * @return $this
     */
    public function setDeepSkyBlue($deepSkyBlue)
    {
        $this->container['deepSkyBlue'] = $deepSkyBlue;

        return $this;
    }

    /*
     * Gets dimGray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDimGray()
    {
        return $this->container['dimGray'];
    }

    /*
     * Sets dimGray
     *
     * @param \GroupDocs\Comparison\Model\Color $dimGray dimGray
     *
     * @return $this
     */
    public function setDimGray($dimGray)
    {
        $this->container['dimGray'] = $dimGray;

        return $this;
    }

    /*
     * Gets dodgerBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getDodgerBlue()
    {
        return $this->container['dodgerBlue'];
    }

    /*
     * Sets dodgerBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $dodgerBlue dodgerBlue
     *
     * @return $this
     */
    public function setDodgerBlue($dodgerBlue)
    {
        $this->container['dodgerBlue'] = $dodgerBlue;

        return $this;
    }

    /*
     * Gets firebrick
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getFirebrick()
    {
        return $this->container['firebrick'];
    }

    /*
     * Sets firebrick
     *
     * @param \GroupDocs\Comparison\Model\Color $firebrick firebrick
     *
     * @return $this
     */
    public function setFirebrick($firebrick)
    {
        $this->container['firebrick'] = $firebrick;

        return $this;
    }

    /*
     * Gets floralWhite
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getFloralWhite()
    {
        return $this->container['floralWhite'];
    }

    /*
     * Sets floralWhite
     *
     * @param \GroupDocs\Comparison\Model\Color $floralWhite floralWhite
     *
     * @return $this
     */
    public function setFloralWhite($floralWhite)
    {
        $this->container['floralWhite'] = $floralWhite;

        return $this;
    }

    /*
     * Gets forestGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getForestGreen()
    {
        return $this->container['forestGreen'];
    }

    /*
     * Sets forestGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $forestGreen forestGreen
     *
     * @return $this
     */
    public function setForestGreen($forestGreen)
    {
        $this->container['forestGreen'] = $forestGreen;

        return $this;
    }

    /*
     * Gets fuchsia
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getFuchsia()
    {
        return $this->container['fuchsia'];
    }

    /*
     * Sets fuchsia
     *
     * @param \GroupDocs\Comparison\Model\Color $fuchsia fuchsia
     *
     * @return $this
     */
    public function setFuchsia($fuchsia)
    {
        $this->container['fuchsia'] = $fuchsia;

        return $this;
    }

    /*
     * Gets gainsboro
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGainsboro()
    {
        return $this->container['gainsboro'];
    }

    /*
     * Sets gainsboro
     *
     * @param \GroupDocs\Comparison\Model\Color $gainsboro gainsboro
     *
     * @return $this
     */
    public function setGainsboro($gainsboro)
    {
        $this->container['gainsboro'] = $gainsboro;

        return $this;
    }

    /*
     * Gets ghostWhite
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGhostWhite()
    {
        return $this->container['ghostWhite'];
    }

    /*
     * Sets ghostWhite
     *
     * @param \GroupDocs\Comparison\Model\Color $ghostWhite ghostWhite
     *
     * @return $this
     */
    public function setGhostWhite($ghostWhite)
    {
        $this->container['ghostWhite'] = $ghostWhite;

        return $this;
    }

    /*
     * Gets gold
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGold()
    {
        return $this->container['gold'];
    }

    /*
     * Sets gold
     *
     * @param \GroupDocs\Comparison\Model\Color $gold gold
     *
     * @return $this
     */
    public function setGold($gold)
    {
        $this->container['gold'] = $gold;

        return $this;
    }

    /*
     * Gets goldenrod
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGoldenrod()
    {
        return $this->container['goldenrod'];
    }

    /*
     * Sets goldenrod
     *
     * @param \GroupDocs\Comparison\Model\Color $goldenrod goldenrod
     *
     * @return $this
     */
    public function setGoldenrod($goldenrod)
    {
        $this->container['goldenrod'] = $goldenrod;

        return $this;
    }

    /*
     * Gets gray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGray()
    {
        return $this->container['gray'];
    }

    /*
     * Sets gray
     *
     * @param \GroupDocs\Comparison\Model\Color $gray gray
     *
     * @return $this
     */
    public function setGray($gray)
    {
        $this->container['gray'] = $gray;

        return $this;
    }

    /*
     * Gets green
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGreen()
    {
        return $this->container['green'];
    }

    /*
     * Sets green
     *
     * @param \GroupDocs\Comparison\Model\Color $green green
     *
     * @return $this
     */
    public function setGreen($green)
    {
        $this->container['green'] = $green;

        return $this;
    }

    /*
     * Gets greenYellow
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getGreenYellow()
    {
        return $this->container['greenYellow'];
    }

    /*
     * Sets greenYellow
     *
     * @param \GroupDocs\Comparison\Model\Color $greenYellow greenYellow
     *
     * @return $this
     */
    public function setGreenYellow($greenYellow)
    {
        $this->container['greenYellow'] = $greenYellow;

        return $this;
    }

    /*
     * Gets honeydew
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getHoneydew()
    {
        return $this->container['honeydew'];
    }

    /*
     * Sets honeydew
     *
     * @param \GroupDocs\Comparison\Model\Color $honeydew honeydew
     *
     * @return $this
     */
    public function setHoneydew($honeydew)
    {
        $this->container['honeydew'] = $honeydew;

        return $this;
    }

    /*
     * Gets hotPink
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getHotPink()
    {
        return $this->container['hotPink'];
    }

    /*
     * Sets hotPink
     *
     * @param \GroupDocs\Comparison\Model\Color $hotPink hotPink
     *
     * @return $this
     */
    public function setHotPink($hotPink)
    {
        $this->container['hotPink'] = $hotPink;

        return $this;
    }

    /*
     * Gets indianRed
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getIndianRed()
    {
        return $this->container['indianRed'];
    }

    /*
     * Sets indianRed
     *
     * @param \GroupDocs\Comparison\Model\Color $indianRed indianRed
     *
     * @return $this
     */
    public function setIndianRed($indianRed)
    {
        $this->container['indianRed'] = $indianRed;

        return $this;
    }

    /*
     * Gets indigo
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getIndigo()
    {
        return $this->container['indigo'];
    }

    /*
     * Sets indigo
     *
     * @param \GroupDocs\Comparison\Model\Color $indigo indigo
     *
     * @return $this
     */
    public function setIndigo($indigo)
    {
        $this->container['indigo'] = $indigo;

        return $this;
    }

    /*
     * Gets ivory
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getIvory()
    {
        return $this->container['ivory'];
    }

    /*
     * Sets ivory
     *
     * @param \GroupDocs\Comparison\Model\Color $ivory ivory
     *
     * @return $this
     */
    public function setIvory($ivory)
    {
        $this->container['ivory'] = $ivory;

        return $this;
    }

    /*
     * Gets khaki
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getKhaki()
    {
        return $this->container['khaki'];
    }

    /*
     * Sets khaki
     *
     * @param \GroupDocs\Comparison\Model\Color $khaki khaki
     *
     * @return $this
     */
    public function setKhaki($khaki)
    {
        $this->container['khaki'] = $khaki;

        return $this;
    }

    /*
     * Gets lavender
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLavender()
    {
        return $this->container['lavender'];
    }

    /*
     * Sets lavender
     *
     * @param \GroupDocs\Comparison\Model\Color $lavender lavender
     *
     * @return $this
     */
    public function setLavender($lavender)
    {
        $this->container['lavender'] = $lavender;

        return $this;
    }

    /*
     * Gets lavenderBlush
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLavenderBlush()
    {
        return $this->container['lavenderBlush'];
    }

    /*
     * Sets lavenderBlush
     *
     * @param \GroupDocs\Comparison\Model\Color $lavenderBlush lavenderBlush
     *
     * @return $this
     */
    public function setLavenderBlush($lavenderBlush)
    {
        $this->container['lavenderBlush'] = $lavenderBlush;

        return $this;
    }

    /*
     * Gets lawnGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLawnGreen()
    {
        return $this->container['lawnGreen'];
    }

    /*
     * Sets lawnGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $lawnGreen lawnGreen
     *
     * @return $this
     */
    public function setLawnGreen($lawnGreen)
    {
        $this->container['lawnGreen'] = $lawnGreen;

        return $this;
    }

    /*
     * Gets lemonChiffon
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLemonChiffon()
    {
        return $this->container['lemonChiffon'];
    }

    /*
     * Sets lemonChiffon
     *
     * @param \GroupDocs\Comparison\Model\Color $lemonChiffon lemonChiffon
     *
     * @return $this
     */
    public function setLemonChiffon($lemonChiffon)
    {
        $this->container['lemonChiffon'] = $lemonChiffon;

        return $this;
    }

    /*
     * Gets lightBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightBlue()
    {
        return $this->container['lightBlue'];
    }

    /*
     * Sets lightBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $lightBlue lightBlue
     *
     * @return $this
     */
    public function setLightBlue($lightBlue)
    {
        $this->container['lightBlue'] = $lightBlue;

        return $this;
    }

    /*
     * Gets lightCoral
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightCoral()
    {
        return $this->container['lightCoral'];
    }

    /*
     * Sets lightCoral
     *
     * @param \GroupDocs\Comparison\Model\Color $lightCoral lightCoral
     *
     * @return $this
     */
    public function setLightCoral($lightCoral)
    {
        $this->container['lightCoral'] = $lightCoral;

        return $this;
    }

    /*
     * Gets lightCyan
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightCyan()
    {
        return $this->container['lightCyan'];
    }

    /*
     * Sets lightCyan
     *
     * @param \GroupDocs\Comparison\Model\Color $lightCyan lightCyan
     *
     * @return $this
     */
    public function setLightCyan($lightCyan)
    {
        $this->container['lightCyan'] = $lightCyan;

        return $this;
    }

    /*
     * Gets lightGoldenrodYellow
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightGoldenrodYellow()
    {
        return $this->container['lightGoldenrodYellow'];
    }

    /*
     * Sets lightGoldenrodYellow
     *
     * @param \GroupDocs\Comparison\Model\Color $lightGoldenrodYellow lightGoldenrodYellow
     *
     * @return $this
     */
    public function setLightGoldenrodYellow($lightGoldenrodYellow)
    {
        $this->container['lightGoldenrodYellow'] = $lightGoldenrodYellow;

        return $this;
    }

    /*
     * Gets lightGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightGreen()
    {
        return $this->container['lightGreen'];
    }

    /*
     * Sets lightGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $lightGreen lightGreen
     *
     * @return $this
     */
    public function setLightGreen($lightGreen)
    {
        $this->container['lightGreen'] = $lightGreen;

        return $this;
    }

    /*
     * Gets lightGray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightGray()
    {
        return $this->container['lightGray'];
    }

    /*
     * Sets lightGray
     *
     * @param \GroupDocs\Comparison\Model\Color $lightGray lightGray
     *
     * @return $this
     */
    public function setLightGray($lightGray)
    {
        $this->container['lightGray'] = $lightGray;

        return $this;
    }

    /*
     * Gets lightPink
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightPink()
    {
        return $this->container['lightPink'];
    }

    /*
     * Sets lightPink
     *
     * @param \GroupDocs\Comparison\Model\Color $lightPink lightPink
     *
     * @return $this
     */
    public function setLightPink($lightPink)
    {
        $this->container['lightPink'] = $lightPink;

        return $this;
    }

    /*
     * Gets lightSalmon
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightSalmon()
    {
        return $this->container['lightSalmon'];
    }

    /*
     * Sets lightSalmon
     *
     * @param \GroupDocs\Comparison\Model\Color $lightSalmon lightSalmon
     *
     * @return $this
     */
    public function setLightSalmon($lightSalmon)
    {
        $this->container['lightSalmon'] = $lightSalmon;

        return $this;
    }

    /*
     * Gets lightSeaGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightSeaGreen()
    {
        return $this->container['lightSeaGreen'];
    }

    /*
     * Sets lightSeaGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $lightSeaGreen lightSeaGreen
     *
     * @return $this
     */
    public function setLightSeaGreen($lightSeaGreen)
    {
        $this->container['lightSeaGreen'] = $lightSeaGreen;

        return $this;
    }

    /*
     * Gets lightSkyBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightSkyBlue()
    {
        return $this->container['lightSkyBlue'];
    }

    /*
     * Sets lightSkyBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $lightSkyBlue lightSkyBlue
     *
     * @return $this
     */
    public function setLightSkyBlue($lightSkyBlue)
    {
        $this->container['lightSkyBlue'] = $lightSkyBlue;

        return $this;
    }

    /*
     * Gets lightSlateGray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightSlateGray()
    {
        return $this->container['lightSlateGray'];
    }

    /*
     * Sets lightSlateGray
     *
     * @param \GroupDocs\Comparison\Model\Color $lightSlateGray lightSlateGray
     *
     * @return $this
     */
    public function setLightSlateGray($lightSlateGray)
    {
        $this->container['lightSlateGray'] = $lightSlateGray;

        return $this;
    }

    /*
     * Gets lightSteelBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightSteelBlue()
    {
        return $this->container['lightSteelBlue'];
    }

    /*
     * Sets lightSteelBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $lightSteelBlue lightSteelBlue
     *
     * @return $this
     */
    public function setLightSteelBlue($lightSteelBlue)
    {
        $this->container['lightSteelBlue'] = $lightSteelBlue;

        return $this;
    }

    /*
     * Gets lightYellow
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLightYellow()
    {
        return $this->container['lightYellow'];
    }

    /*
     * Sets lightYellow
     *
     * @param \GroupDocs\Comparison\Model\Color $lightYellow lightYellow
     *
     * @return $this
     */
    public function setLightYellow($lightYellow)
    {
        $this->container['lightYellow'] = $lightYellow;

        return $this;
    }

    /*
     * Gets lime
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLime()
    {
        return $this->container['lime'];
    }

    /*
     * Sets lime
     *
     * @param \GroupDocs\Comparison\Model\Color $lime lime
     *
     * @return $this
     */
    public function setLime($lime)
    {
        $this->container['lime'] = $lime;

        return $this;
    }

    /*
     * Gets limeGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLimeGreen()
    {
        return $this->container['limeGreen'];
    }

    /*
     * Sets limeGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $limeGreen limeGreen
     *
     * @return $this
     */
    public function setLimeGreen($limeGreen)
    {
        $this->container['limeGreen'] = $limeGreen;

        return $this;
    }

    /*
     * Gets linen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getLinen()
    {
        return $this->container['linen'];
    }

    /*
     * Sets linen
     *
     * @param \GroupDocs\Comparison\Model\Color $linen linen
     *
     * @return $this
     */
    public function setLinen($linen)
    {
        $this->container['linen'] = $linen;

        return $this;
    }

    /*
     * Gets magenta
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMagenta()
    {
        return $this->container['magenta'];
    }

    /*
     * Sets magenta
     *
     * @param \GroupDocs\Comparison\Model\Color $magenta magenta
     *
     * @return $this
     */
    public function setMagenta($magenta)
    {
        $this->container['magenta'] = $magenta;

        return $this;
    }

    /*
     * Gets maroon
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMaroon()
    {
        return $this->container['maroon'];
    }

    /*
     * Sets maroon
     *
     * @param \GroupDocs\Comparison\Model\Color $maroon maroon
     *
     * @return $this
     */
    public function setMaroon($maroon)
    {
        $this->container['maroon'] = $maroon;

        return $this;
    }

    /*
     * Gets mediumAquamarine
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumAquamarine()
    {
        return $this->container['mediumAquamarine'];
    }

    /*
     * Sets mediumAquamarine
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumAquamarine mediumAquamarine
     *
     * @return $this
     */
    public function setMediumAquamarine($mediumAquamarine)
    {
        $this->container['mediumAquamarine'] = $mediumAquamarine;

        return $this;
    }

    /*
     * Gets mediumBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumBlue()
    {
        return $this->container['mediumBlue'];
    }

    /*
     * Sets mediumBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumBlue mediumBlue
     *
     * @return $this
     */
    public function setMediumBlue($mediumBlue)
    {
        $this->container['mediumBlue'] = $mediumBlue;

        return $this;
    }

    /*
     * Gets mediumOrchid
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumOrchid()
    {
        return $this->container['mediumOrchid'];
    }

    /*
     * Sets mediumOrchid
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumOrchid mediumOrchid
     *
     * @return $this
     */
    public function setMediumOrchid($mediumOrchid)
    {
        $this->container['mediumOrchid'] = $mediumOrchid;

        return $this;
    }

    /*
     * Gets mediumPurple
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumPurple()
    {
        return $this->container['mediumPurple'];
    }

    /*
     * Sets mediumPurple
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumPurple mediumPurple
     *
     * @return $this
     */
    public function setMediumPurple($mediumPurple)
    {
        $this->container['mediumPurple'] = $mediumPurple;

        return $this;
    }

    /*
     * Gets mediumSeaGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumSeaGreen()
    {
        return $this->container['mediumSeaGreen'];
    }

    /*
     * Sets mediumSeaGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumSeaGreen mediumSeaGreen
     *
     * @return $this
     */
    public function setMediumSeaGreen($mediumSeaGreen)
    {
        $this->container['mediumSeaGreen'] = $mediumSeaGreen;

        return $this;
    }

    /*
     * Gets mediumSlateBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumSlateBlue()
    {
        return $this->container['mediumSlateBlue'];
    }

    /*
     * Sets mediumSlateBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumSlateBlue mediumSlateBlue
     *
     * @return $this
     */
    public function setMediumSlateBlue($mediumSlateBlue)
    {
        $this->container['mediumSlateBlue'] = $mediumSlateBlue;

        return $this;
    }

    /*
     * Gets mediumSpringGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumSpringGreen()
    {
        return $this->container['mediumSpringGreen'];
    }

    /*
     * Sets mediumSpringGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumSpringGreen mediumSpringGreen
     *
     * @return $this
     */
    public function setMediumSpringGreen($mediumSpringGreen)
    {
        $this->container['mediumSpringGreen'] = $mediumSpringGreen;

        return $this;
    }

    /*
     * Gets mediumTurquoise
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumTurquoise()
    {
        return $this->container['mediumTurquoise'];
    }

    /*
     * Sets mediumTurquoise
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumTurquoise mediumTurquoise
     *
     * @return $this
     */
    public function setMediumTurquoise($mediumTurquoise)
    {
        $this->container['mediumTurquoise'] = $mediumTurquoise;

        return $this;
    }

    /*
     * Gets mediumVioletRed
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMediumVioletRed()
    {
        return $this->container['mediumVioletRed'];
    }

    /*
     * Sets mediumVioletRed
     *
     * @param \GroupDocs\Comparison\Model\Color $mediumVioletRed mediumVioletRed
     *
     * @return $this
     */
    public function setMediumVioletRed($mediumVioletRed)
    {
        $this->container['mediumVioletRed'] = $mediumVioletRed;

        return $this;
    }

    /*
     * Gets midnightBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMidnightBlue()
    {
        return $this->container['midnightBlue'];
    }

    /*
     * Sets midnightBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $midnightBlue midnightBlue
     *
     * @return $this
     */
    public function setMidnightBlue($midnightBlue)
    {
        $this->container['midnightBlue'] = $midnightBlue;

        return $this;
    }

    /*
     * Gets mintCream
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMintCream()
    {
        return $this->container['mintCream'];
    }

    /*
     * Sets mintCream
     *
     * @param \GroupDocs\Comparison\Model\Color $mintCream mintCream
     *
     * @return $this
     */
    public function setMintCream($mintCream)
    {
        $this->container['mintCream'] = $mintCream;

        return $this;
    }

    /*
     * Gets mistyRose
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMistyRose()
    {
        return $this->container['mistyRose'];
    }

    /*
     * Sets mistyRose
     *
     * @param \GroupDocs\Comparison\Model\Color $mistyRose mistyRose
     *
     * @return $this
     */
    public function setMistyRose($mistyRose)
    {
        $this->container['mistyRose'] = $mistyRose;

        return $this;
    }

    /*
     * Gets moccasin
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getMoccasin()
    {
        return $this->container['moccasin'];
    }

    /*
     * Sets moccasin
     *
     * @param \GroupDocs\Comparison\Model\Color $moccasin moccasin
     *
     * @return $this
     */
    public function setMoccasin($moccasin)
    {
        $this->container['moccasin'] = $moccasin;

        return $this;
    }

    /*
     * Gets navajoWhite
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getNavajoWhite()
    {
        return $this->container['navajoWhite'];
    }

    /*
     * Sets navajoWhite
     *
     * @param \GroupDocs\Comparison\Model\Color $navajoWhite navajoWhite
     *
     * @return $this
     */
    public function setNavajoWhite($navajoWhite)
    {
        $this->container['navajoWhite'] = $navajoWhite;

        return $this;
    }

    /*
     * Gets navy
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getNavy()
    {
        return $this->container['navy'];
    }

    /*
     * Sets navy
     *
     * @param \GroupDocs\Comparison\Model\Color $navy navy
     *
     * @return $this
     */
    public function setNavy($navy)
    {
        $this->container['navy'] = $navy;

        return $this;
    }

    /*
     * Gets oldLace
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getOldLace()
    {
        return $this->container['oldLace'];
    }

    /*
     * Sets oldLace
     *
     * @param \GroupDocs\Comparison\Model\Color $oldLace oldLace
     *
     * @return $this
     */
    public function setOldLace($oldLace)
    {
        $this->container['oldLace'] = $oldLace;

        return $this;
    }

    /*
     * Gets olive
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getOlive()
    {
        return $this->container['olive'];
    }

    /*
     * Sets olive
     *
     * @param \GroupDocs\Comparison\Model\Color $olive olive
     *
     * @return $this
     */
    public function setOlive($olive)
    {
        $this->container['olive'] = $olive;

        return $this;
    }

    /*
     * Gets oliveDrab
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getOliveDrab()
    {
        return $this->container['oliveDrab'];
    }

    /*
     * Sets oliveDrab
     *
     * @param \GroupDocs\Comparison\Model\Color $oliveDrab oliveDrab
     *
     * @return $this
     */
    public function setOliveDrab($oliveDrab)
    {
        $this->container['oliveDrab'] = $oliveDrab;

        return $this;
    }

    /*
     * Gets orange
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getOrange()
    {
        return $this->container['orange'];
    }

    /*
     * Sets orange
     *
     * @param \GroupDocs\Comparison\Model\Color $orange orange
     *
     * @return $this
     */
    public function setOrange($orange)
    {
        $this->container['orange'] = $orange;

        return $this;
    }

    /*
     * Gets orangeRed
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getOrangeRed()
    {
        return $this->container['orangeRed'];
    }

    /*
     * Sets orangeRed
     *
     * @param \GroupDocs\Comparison\Model\Color $orangeRed orangeRed
     *
     * @return $this
     */
    public function setOrangeRed($orangeRed)
    {
        $this->container['orangeRed'] = $orangeRed;

        return $this;
    }

    /*
     * Gets orchid
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getOrchid()
    {
        return $this->container['orchid'];
    }

    /*
     * Sets orchid
     *
     * @param \GroupDocs\Comparison\Model\Color $orchid orchid
     *
     * @return $this
     */
    public function setOrchid($orchid)
    {
        $this->container['orchid'] = $orchid;

        return $this;
    }

    /*
     * Gets paleGoldenrod
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPaleGoldenrod()
    {
        return $this->container['paleGoldenrod'];
    }

    /*
     * Sets paleGoldenrod
     *
     * @param \GroupDocs\Comparison\Model\Color $paleGoldenrod paleGoldenrod
     *
     * @return $this
     */
    public function setPaleGoldenrod($paleGoldenrod)
    {
        $this->container['paleGoldenrod'] = $paleGoldenrod;

        return $this;
    }

    /*
     * Gets paleGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPaleGreen()
    {
        return $this->container['paleGreen'];
    }

    /*
     * Sets paleGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $paleGreen paleGreen
     *
     * @return $this
     */
    public function setPaleGreen($paleGreen)
    {
        $this->container['paleGreen'] = $paleGreen;

        return $this;
    }

    /*
     * Gets paleTurquoise
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPaleTurquoise()
    {
        return $this->container['paleTurquoise'];
    }

    /*
     * Sets paleTurquoise
     *
     * @param \GroupDocs\Comparison\Model\Color $paleTurquoise paleTurquoise
     *
     * @return $this
     */
    public function setPaleTurquoise($paleTurquoise)
    {
        $this->container['paleTurquoise'] = $paleTurquoise;

        return $this;
    }

    /*
     * Gets paleVioletRed
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPaleVioletRed()
    {
        return $this->container['paleVioletRed'];
    }

    /*
     * Sets paleVioletRed
     *
     * @param \GroupDocs\Comparison\Model\Color $paleVioletRed paleVioletRed
     *
     * @return $this
     */
    public function setPaleVioletRed($paleVioletRed)
    {
        $this->container['paleVioletRed'] = $paleVioletRed;

        return $this;
    }

    /*
     * Gets papayaWhip
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPapayaWhip()
    {
        return $this->container['papayaWhip'];
    }

    /*
     * Sets papayaWhip
     *
     * @param \GroupDocs\Comparison\Model\Color $papayaWhip papayaWhip
     *
     * @return $this
     */
    public function setPapayaWhip($papayaWhip)
    {
        $this->container['papayaWhip'] = $papayaWhip;

        return $this;
    }

    /*
     * Gets peachPuff
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPeachPuff()
    {
        return $this->container['peachPuff'];
    }

    /*
     * Sets peachPuff
     *
     * @param \GroupDocs\Comparison\Model\Color $peachPuff peachPuff
     *
     * @return $this
     */
    public function setPeachPuff($peachPuff)
    {
        $this->container['peachPuff'] = $peachPuff;

        return $this;
    }

    /*
     * Gets peru
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPeru()
    {
        return $this->container['peru'];
    }

    /*
     * Sets peru
     *
     * @param \GroupDocs\Comparison\Model\Color $peru peru
     *
     * @return $this
     */
    public function setPeru($peru)
    {
        $this->container['peru'] = $peru;

        return $this;
    }

    /*
     * Gets pink
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPink()
    {
        return $this->container['pink'];
    }

    /*
     * Sets pink
     *
     * @param \GroupDocs\Comparison\Model\Color $pink pink
     *
     * @return $this
     */
    public function setPink($pink)
    {
        $this->container['pink'] = $pink;

        return $this;
    }

    /*
     * Gets plum
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPlum()
    {
        return $this->container['plum'];
    }

    /*
     * Sets plum
     *
     * @param \GroupDocs\Comparison\Model\Color $plum plum
     *
     * @return $this
     */
    public function setPlum($plum)
    {
        $this->container['plum'] = $plum;

        return $this;
    }

    /*
     * Gets powderBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPowderBlue()
    {
        return $this->container['powderBlue'];
    }

    /*
     * Sets powderBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $powderBlue powderBlue
     *
     * @return $this
     */
    public function setPowderBlue($powderBlue)
    {
        $this->container['powderBlue'] = $powderBlue;

        return $this;
    }

    /*
     * Gets purple
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getPurple()
    {
        return $this->container['purple'];
    }

    /*
     * Sets purple
     *
     * @param \GroupDocs\Comparison\Model\Color $purple purple
     *
     * @return $this
     */
    public function setPurple($purple)
    {
        $this->container['purple'] = $purple;

        return $this;
    }

    /*
     * Gets red
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getRed()
    {
        return $this->container['red'];
    }

    /*
     * Sets red
     *
     * @param \GroupDocs\Comparison\Model\Color $red red
     *
     * @return $this
     */
    public function setRed($red)
    {
        $this->container['red'] = $red;

        return $this;
    }

    /*
     * Gets rosyBrown
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getRosyBrown()
    {
        return $this->container['rosyBrown'];
    }

    /*
     * Sets rosyBrown
     *
     * @param \GroupDocs\Comparison\Model\Color $rosyBrown rosyBrown
     *
     * @return $this
     */
    public function setRosyBrown($rosyBrown)
    {
        $this->container['rosyBrown'] = $rosyBrown;

        return $this;
    }

    /*
     * Gets royalBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getRoyalBlue()
    {
        return $this->container['royalBlue'];
    }

    /*
     * Sets royalBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $royalBlue royalBlue
     *
     * @return $this
     */
    public function setRoyalBlue($royalBlue)
    {
        $this->container['royalBlue'] = $royalBlue;

        return $this;
    }

    /*
     * Gets saddleBrown
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSaddleBrown()
    {
        return $this->container['saddleBrown'];
    }

    /*
     * Sets saddleBrown
     *
     * @param \GroupDocs\Comparison\Model\Color $saddleBrown saddleBrown
     *
     * @return $this
     */
    public function setSaddleBrown($saddleBrown)
    {
        $this->container['saddleBrown'] = $saddleBrown;

        return $this;
    }

    /*
     * Gets salmon
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSalmon()
    {
        return $this->container['salmon'];
    }

    /*
     * Sets salmon
     *
     * @param \GroupDocs\Comparison\Model\Color $salmon salmon
     *
     * @return $this
     */
    public function setSalmon($salmon)
    {
        $this->container['salmon'] = $salmon;

        return $this;
    }

    /*
     * Gets sandyBrown
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSandyBrown()
    {
        return $this->container['sandyBrown'];
    }

    /*
     * Sets sandyBrown
     *
     * @param \GroupDocs\Comparison\Model\Color $sandyBrown sandyBrown
     *
     * @return $this
     */
    public function setSandyBrown($sandyBrown)
    {
        $this->container['sandyBrown'] = $sandyBrown;

        return $this;
    }

    /*
     * Gets seaGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSeaGreen()
    {
        return $this->container['seaGreen'];
    }

    /*
     * Sets seaGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $seaGreen seaGreen
     *
     * @return $this
     */
    public function setSeaGreen($seaGreen)
    {
        $this->container['seaGreen'] = $seaGreen;

        return $this;
    }

    /*
     * Gets seaShell
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSeaShell()
    {
        return $this->container['seaShell'];
    }

    /*
     * Sets seaShell
     *
     * @param \GroupDocs\Comparison\Model\Color $seaShell seaShell
     *
     * @return $this
     */
    public function setSeaShell($seaShell)
    {
        $this->container['seaShell'] = $seaShell;

        return $this;
    }

    /*
     * Gets sienna
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSienna()
    {
        return $this->container['sienna'];
    }

    /*
     * Sets sienna
     *
     * @param \GroupDocs\Comparison\Model\Color $sienna sienna
     *
     * @return $this
     */
    public function setSienna($sienna)
    {
        $this->container['sienna'] = $sienna;

        return $this;
    }

    /*
     * Gets silver
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSilver()
    {
        return $this->container['silver'];
    }

    /*
     * Sets silver
     *
     * @param \GroupDocs\Comparison\Model\Color $silver silver
     *
     * @return $this
     */
    public function setSilver($silver)
    {
        $this->container['silver'] = $silver;

        return $this;
    }

    /*
     * Gets skyBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSkyBlue()
    {
        return $this->container['skyBlue'];
    }

    /*
     * Sets skyBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $skyBlue skyBlue
     *
     * @return $this
     */
    public function setSkyBlue($skyBlue)
    {
        $this->container['skyBlue'] = $skyBlue;

        return $this;
    }

    /*
     * Gets slateBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSlateBlue()
    {
        return $this->container['slateBlue'];
    }

    /*
     * Sets slateBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $slateBlue slateBlue
     *
     * @return $this
     */
    public function setSlateBlue($slateBlue)
    {
        $this->container['slateBlue'] = $slateBlue;

        return $this;
    }

    /*
     * Gets slateGray
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSlateGray()
    {
        return $this->container['slateGray'];
    }

    /*
     * Sets slateGray
     *
     * @param \GroupDocs\Comparison\Model\Color $slateGray slateGray
     *
     * @return $this
     */
    public function setSlateGray($slateGray)
    {
        $this->container['slateGray'] = $slateGray;

        return $this;
    }

    /*
     * Gets snow
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSnow()
    {
        return $this->container['snow'];
    }

    /*
     * Sets snow
     *
     * @param \GroupDocs\Comparison\Model\Color $snow snow
     *
     * @return $this
     */
    public function setSnow($snow)
    {
        $this->container['snow'] = $snow;

        return $this;
    }

    /*
     * Gets springGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSpringGreen()
    {
        return $this->container['springGreen'];
    }

    /*
     * Sets springGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $springGreen springGreen
     *
     * @return $this
     */
    public function setSpringGreen($springGreen)
    {
        $this->container['springGreen'] = $springGreen;

        return $this;
    }

    /*
     * Gets steelBlue
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getSteelBlue()
    {
        return $this->container['steelBlue'];
    }

    /*
     * Sets steelBlue
     *
     * @param \GroupDocs\Comparison\Model\Color $steelBlue steelBlue
     *
     * @return $this
     */
    public function setSteelBlue($steelBlue)
    {
        $this->container['steelBlue'] = $steelBlue;

        return $this;
    }

    /*
     * Gets tan
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getTan()
    {
        return $this->container['tan'];
    }

    /*
     * Sets tan
     *
     * @param \GroupDocs\Comparison\Model\Color $tan tan
     *
     * @return $this
     */
    public function setTan($tan)
    {
        $this->container['tan'] = $tan;

        return $this;
    }

    /*
     * Gets teal
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getTeal()
    {
        return $this->container['teal'];
    }

    /*
     * Sets teal
     *
     * @param \GroupDocs\Comparison\Model\Color $teal teal
     *
     * @return $this
     */
    public function setTeal($teal)
    {
        $this->container['teal'] = $teal;

        return $this;
    }

    /*
     * Gets thistle
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getThistle()
    {
        return $this->container['thistle'];
    }

    /*
     * Sets thistle
     *
     * @param \GroupDocs\Comparison\Model\Color $thistle thistle
     *
     * @return $this
     */
    public function setThistle($thistle)
    {
        $this->container['thistle'] = $thistle;

        return $this;
    }

    /*
     * Gets tomato
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getTomato()
    {
        return $this->container['tomato'];
    }

    /*
     * Sets tomato
     *
     * @param \GroupDocs\Comparison\Model\Color $tomato tomato
     *
     * @return $this
     */
    public function setTomato($tomato)
    {
        $this->container['tomato'] = $tomato;

        return $this;
    }

    /*
     * Gets turquoise
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getTurquoise()
    {
        return $this->container['turquoise'];
    }

    /*
     * Sets turquoise
     *
     * @param \GroupDocs\Comparison\Model\Color $turquoise turquoise
     *
     * @return $this
     */
    public function setTurquoise($turquoise)
    {
        $this->container['turquoise'] = $turquoise;

        return $this;
    }

    /*
     * Gets violet
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getViolet()
    {
        return $this->container['violet'];
    }

    /*
     * Sets violet
     *
     * @param \GroupDocs\Comparison\Model\Color $violet violet
     *
     * @return $this
     */
    public function setViolet($violet)
    {
        $this->container['violet'] = $violet;

        return $this;
    }

    /*
     * Gets wheat
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getWheat()
    {
        return $this->container['wheat'];
    }

    /*
     * Sets wheat
     *
     * @param \GroupDocs\Comparison\Model\Color $wheat wheat
     *
     * @return $this
     */
    public function setWheat($wheat)
    {
        $this->container['wheat'] = $wheat;

        return $this;
    }

    /*
     * Gets white
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getWhite()
    {
        return $this->container['white'];
    }

    /*
     * Sets white
     *
     * @param \GroupDocs\Comparison\Model\Color $white white
     *
     * @return $this
     */
    public function setWhite($white)
    {
        $this->container['white'] = $white;

        return $this;
    }

    /*
     * Gets whiteSmoke
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getWhiteSmoke()
    {
        return $this->container['whiteSmoke'];
    }

    /*
     * Sets whiteSmoke
     *
     * @param \GroupDocs\Comparison\Model\Color $whiteSmoke whiteSmoke
     *
     * @return $this
     */
    public function setWhiteSmoke($whiteSmoke)
    {
        $this->container['whiteSmoke'] = $whiteSmoke;

        return $this;
    }

    /*
     * Gets yellow
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getYellow()
    {
        return $this->container['yellow'];
    }

    /*
     * Sets yellow
     *
     * @param \GroupDocs\Comparison\Model\Color $yellow yellow
     *
     * @return $this
     */
    public function setYellow($yellow)
    {
        $this->container['yellow'] = $yellow;

        return $this;
    }

    /*
     * Gets yellowGreen
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getYellowGreen()
    {
        return $this->container['yellowGreen'];
    }

    /*
     * Sets yellowGreen
     *
     * @param \GroupDocs\Comparison\Model\Color $yellowGreen yellowGreen
     *
     * @return $this
     */
    public function setYellowGreen($yellowGreen)
    {
        $this->container['yellowGreen'] = $yellowGreen;

        return $this;
    }

    /*
     * Gets r
     *
     * @return int
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /*
     * Sets r
     *
     * @param int $r r
     *
     * @return $this
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /*
     * Gets g
     *
     * @return int
     */
    public function getG()
    {
        return $this->container['g'];
    }

    /*
     * Sets g
     *
     * @param int $g g
     *
     * @return $this
     */
    public function setG($g)
    {
        $this->container['g'] = $g;

        return $this;
    }

    /*
     * Gets b
     *
     * @return int
     */
    public function getB()
    {
        return $this->container['b'];
    }

    /*
     * Sets b
     *
     * @param int $b b
     *
     * @return $this
     */
    public function setB($b)
    {
        $this->container['b'] = $b;

        return $this;
    }

    /*
     * Gets a
     *
     * @return int
     */
    public function getA()
    {
        return $this->container['a'];
    }

    /*
     * Sets a
     *
     * @param int $a a
     *
     * @return $this
     */
    public function setA($a)
    {
        $this->container['a'] = $a;

        return $this;
    }

    /*
     * Gets isKnownColor
     *
     * @return bool
     */
    public function getIsKnownColor()
    {
        return $this->container['isKnownColor'];
    }

    /*
     * Sets isKnownColor
     *
     * @param bool $isKnownColor isKnownColor
     *
     * @return $this
     */
    public function setIsKnownColor($isKnownColor)
    {
        $this->container['isKnownColor'] = $isKnownColor;

        return $this;
    }

    /*
     * Gets isEmpty
     *
     * @return bool
     */
    public function getIsEmpty()
    {
        return $this->container['isEmpty'];
    }

    /*
     * Sets isEmpty
     *
     * @param bool $isEmpty isEmpty
     *
     * @return $this
     */
    public function setIsEmpty($isEmpty)
    {
        $this->container['isEmpty'] = $isEmpty;

        return $this;
    }

    /*
     * Gets isNamedColor
     *
     * @return bool
     */
    public function getIsNamedColor()
    {
        return $this->container['isNamedColor'];
    }

    /*
     * Sets isNamedColor
     *
     * @param bool $isNamedColor isNamedColor
     *
     * @return $this
     */
    public function setIsNamedColor($isNamedColor)
    {
        $this->container['isNamedColor'] = $isNamedColor;

        return $this;
    }

    /*
     * Gets isSystemColor
     *
     * @return bool
     */
    public function getIsSystemColor()
    {
        return $this->container['isSystemColor'];
    }

    /*
     * Sets isSystemColor
     *
     * @param bool $isSystemColor isSystemColor
     *
     * @return $this
     */
    public function setIsSystemColor($isSystemColor)
    {
        $this->container['isSystemColor'] = $isSystemColor;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets empty
     *
     * @return \GroupDocs\Comparison\Model\Color
     */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /*
     * Sets empty
     *
     * @param \GroupDocs\Comparison\Model\Color $empty empty
     *
     * @return $this
     */
    public function setEmpty($empty)
    {
        $this->container['empty'] = $empty;

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


