[![Latest Version](https://img.shields.io/github/release/iamirnet/samantel.svg?style=flat-square)](https://github.com/iamirnet/samantel/releases)
[![GitHub last commit](https://img.shields.io/github/last-commit/iamirnet/samantel.svg?style=flat-square)](#)
[![Packagist Downloads](https://img.shields.io/packagist/dt/iamirnet/samantel.svg?style=flat-square)](https://packagist.org/packages/iamirnet/samantel)

# PHP SamanTel Webservice
This project is designed to help you make your own projects that interact with the SamanTel

#### Installation
```
composer require iamirnet/samantel
```
<details>
 <summary>Click for help with installation</summary>

## Install Composer
If the above step didn't work, install composer and try again.
#### Debian / Ubuntu
```
sudo apt-get install curl php-curl
curl -s http://getcomposer.org/installer | php
php composer.phar install
```
Composer not found? Use this command instead:
```
php composer.phar require "iamirnet/samantel"
```

#### Installing on Windows
Download and install composer:
1. https://getcomposer.org/download/
2. Create a folder on your drive like C:\iAmirNet\SamanTel
3. Run command prompt and type `cd C:\iAmirNet\SamanTel`
4. ```composer require iamirnet/samantel```
5. Once complete copy the vendor folder into your project.

</details>

#### Getting started
`composer require iamirnet/samantel`
```php
require 'vendor/autoload.php';
// config by specifying api key and secret
$api = new \iAmirNet\SamanTel\SamanTelSOAP("username","password");
```


=======
#### Get Balance
```php
//Call this before running any functions
print_r($api->balance());
```

=======
#### Send Message
```php
//Call this before running any functions
print_r($api->send(/*Sender Number*/"989999xxxx", /*Receive Number*/"989xxxxxxxxxx",/*Text Message*/ "متن پیامک", /* Flash */ 1));
```

=======
#### Send Multiple
```php
//Call this before running any functions
print_r($api->sendMultiple(/*Senders Number*/["989999xxxx"], /*Receives Number*/["989xxxxxxxxxx"],/*Text Messages*/ ["متن پیامک"], /* Flash */ [1], , /* Custom Ids */ [140210111]));
```

=======
#### DeliveryReport
```php
//Call this before running any functions
print_r($api->deliveryReport(/*Sender Number*/"989999xxxx", /*Message ID*/48222256, /*from ID Or Null*/'48222254', ));
```

=======
#### ViewReceive
```php
//Call this before running any functions
print_r($api->viewReceive(/*Number*/"989999xxxx", /*Message ID Or Null*/48222256));
```

=======
#### GetStatuses
```php
//Call this before running any functions
print_r($api->getStatuses(/* Custom Ids */ [140210111]));
```

=======
#### GetStatuses_OriginalID
```php
//Call this before running any functions
print_r($api->getStatuses_OriginalID(/* Custom Ids */ [140210111]));
```

=======
#### Acknowledge
```php
//Call this before running any functions
print_r($api->acknowledge(/* Custom Ids */ [140210111]));
```

## Contribution
- Give us a star :star:
- Fork and Clone! Awesome
- Select existing [issues](https://github.com/iamirnet/samantel/issues) or create a [new issue](https://github.com/iamirnet/samantel/issues/new) and give us a PR with your bugfix or improvement after. We love it ❤️

## Donate
- USDT Or TRX: TUE8GiY4vmz831N65McwzZVbA9XEDaLinn 😘❤
