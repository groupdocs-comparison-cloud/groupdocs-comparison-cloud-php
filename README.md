# GroupDocs.Comparison Cloud SDK for PHP
This repository contains GroupDocs.Comparison Cloud SDK for PHP source code. This SDK allows you to work with GroupDocs.Annotaion Cloud REST APIs in your PHP applications.

## Dependencies
- PHP 5.5 or later

## Authorization
To use SDK you need AppSID and AppKey authorization keys. You can your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).  

## Installation & Usage
### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command:
```
composer require groupdocscloud/groupdocs-comparison-cloud
``` 

Or you can install SDK via [Composer](http://getcomposer.org/) directly from this repository, add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-php"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-comparison-cloud": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file:

```php
require_once('/path/to/groupdocs-comparison-cloud-php/vendor/autoload.php');
```

## Tests

To run the unit tests set your AppSID and AppKey in [json.config](tests/GroupDocs/Annotaion/config.json) and execute following commands:

```
composer install
./vendor/bin/phpunit
```

## Getting Started
Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$comparisonApi = new ComparisonApi($configuration);

try { 

        $targetArray = array();
        $targetNames = array('target.docx');
        foreach ($targetNames as $targetName){
            array_push($targetArray,new ComparisonFileInfo(
                [
                    'folder' => 'comparison',
                    'name' => $targetName,
                    'password' => ''
                ]
            ));
        }

        $request = new Requests\ComparisonRequest(new ComparisonRequest([
            'sourceFile'=>new ComparisonFileInfo(
                [
                    'folder' => '',
                    'name' => 'source.docx',
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
        ]),
            'result.docx'
        );

        $response = $comparisonApi->comparison($request);
        echo  $response;
  } catch (Exception $e) {
        echo  "Error message: ",  $e->getMessage(), "\n";
  PHP_EOL;
}


?>
```

## Licensing
GroupDocs.Comparison for Cloud SDK for PHP is licensed under [MIT License](LICENSE).

## Resources
+ [**Website**](https://www.groupdocs.cloud)
+ [**Product Home**](https://products.groupdocs.cloud/comparison/cloud)
+ [**Documentation**](https://docs.groupdocs.cloud/display/comparisoncloud/Home)
+ [**Free Support Forum**](https://forum.groupdocs.cloud/c/comparison)
+ [**Blog**](https://blog.groupdocs.cloud/category/groupdocs-comparison-cloud-product-family)

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.groupdocs.cloud/c/comparison).
