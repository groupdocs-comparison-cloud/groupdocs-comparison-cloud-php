![](https://img.shields.io/badge/api-v2.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/groupdocscloud/groupdocs-comparison-cloud) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/groupdocscloud/groupdocs-comparison-cloud) [![GitHub license](https://img.shields.io/github/license/groupdocs-comparison-cloud/groupdocs-comparison-cloud-php)](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-php/blob/master/LICENSE)

# PHP SDK to Compare Documents in the Cloud

[GroupDocs.Comparison Cloud SDK for PHP](https://products.groupdocs.cloud/comparison/php) wraps GroupDocs.Comparison RESTful APIs so you may integrate **Document Comparison** features in your own apps with zero initial cost.

GroupDocs.Comparison Cloud API allows the developers to build corporate document comparison tools using REST API. Works as a comprehensive solution for all major file formats.

## Document Comparison REST API

- Compare documents.
- Get list of changes.
- Update changes (Accept or Reject changes).
- Get list of document revisions.
- Update document revisions (Accept or Reject revisions).
- Extract metadata & basic information about the source document.
- Obtain all supported comparison formats list.
- Integrated storage API.

Check out the [Developer's Guide](https://docs.groupdocs.cloud/comparison/developer-guide/) to know more about GroupDocs.Comparison REST API.

## Microsoft File Formats

**Microsoft Word:** DOC, DOCX, DOT, DOTX, DOCM, DOTM, RTF\
**Microsoft Excel:** XLS, XLSX, XLSM, XLSB, XLS2003\
**Microsoft PowerPoint:** PPT, PPTX, PPS, PPSX\
**Microsoft Project:** MPP, MPT\
**Microsoft Outlook:** EML, EMLX, MSG\

## Other Formats

**OpenDocument:** ODT, OTT, ODS, ODP, OTP\
**Web:** HTM, HTML, MHTML\
**Fixed Layout:** PDF\
**Image Files:** JPEG, BMP, PNG, GIF\
**Text:** TXT and other text formats with different extensions\
**Others:** DJVU, DICOM, PDF, CSV\
## New Features & Enhancements Version 20.12
- Added the Review API that enables you to work with revisions of the DOCX documents. Now it has the ability to Accept or Reject all changes in a single Word Document.
- Availability of Docker image of [GroupDocs.Comparison Cloud at the Dock Hub](https://hub.docker.com/r/groupdocs/comparison-cloud).


## Get Started with GroupDocs.Comparison Cloud SDK for PHP

First create an account at [GroupDocs for Cloud](https://dashboard.groupdocs.cloud/) and get your application information. Next, follow the installation steps as given below.

### Install via Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command.

```shell
composer require groupdocscloud/groupdocs-comparison-cloud
```

You can also install the package directly from this repository. Add the following to `composer.json`, then run `composer install`.

```javascript
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-comparison-cloud": "*"
  }
}
```

### Install Manually

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file.

```php
require_once('/path/to/groupdocs-comparison-cloud-php/vendor/autoload.php');
```

### Tests

Set your application information in [json.config](tests/GroupDocs/Comparison/config.json) and execute the following command to run the unit tests.

```shell
php composer.phar install ./vendor/bin/phpunit
```

## Get Supported File Formats for Comparison

```php
use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

//Get Client Id and Client Secret from https://dashboard.groupdocs.cloud
$myClientId = "";
$myClientSecret = "";

// Create instance of the API
$configuration = new GroupDocs\Comparison\Configuration();
$configuration->setAppSid($myClientId);
$configuration->setAppKey($myClientSecret);
$apiInstance = new GroupDocs\Comparison\InfoApi($configuration);

$response = $infoApi->getSupportedFileFormats();

foreach ($response->getFormats() as $key => $format) {
	echo $format->getFileFormat() . " - " .  $format->getExtension(), "\n";
}
```
## GroupDocs.Comparison Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js | Android |
|---|---|---|---|---|---|---|
| [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-dotnet) | [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-java) | [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-php) | [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-python) | [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-ruby)  | [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-node) | [GitHub](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-android) |
| [NuGet](https://www.nuget.org/packages/GroupDocs.Comparison-Cloud/) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-comparison-cloud) | [Composer](https://packagist.org/packages/groupdocscloud/groupdocs-comparison-cloud) | [PIP](https://pypi.org/project/groupdocs-comparison-cloud/) | [GEM](https://rubygems.org/gems/groupdocs_comparison_cloud)  | [NPM](https://www.npmjs.com/package/groupdocs-comparison-cloud) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-comparison-cloud) |

[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/comparison/php) | [Documentation](https://docs.groupdocs.cloud/comparison/) | [Live Demo](https://products.groupdocs.app/comparison/total) | [API Reference](https://apireference.groupdocs.cloud/comparison/) | [Code Samples](https://github.com/groupdocs-comparison-cloud/groupdocs-comparison-cloud-php-samples) | [Blog](https://blog.groupdocs.cloud/category/comparison/) | [Free Support](https://forum.groupdocs.cloud/c/comparison) | [Free Trial](https://dashboard.groupdocs.cloud)
