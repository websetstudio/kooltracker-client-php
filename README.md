# PHP Client for KoolTracker User API

PHP Client to interact with the KoolTracker API for user addition.

## Requirements ##

* [PHP 7.1 or higher](https://www.php.net/supported-versions.php)
* ext-curl for PHP
* ext-json for PHP

## Installation ##

```
composer require websetstudio/kooltracker-client-php
```

## Usage ##

```
// Include the autoload.php
require 'vendor/autoload.php';

use WebsetStudio\KoolTrackerClient\Client;
use WebsetStudio\KoolTrackerClient\Model\User;
use WebsetStudio\KoolTrackerClient\Utils\Generator;

$user = new User();
$user->setOptInDate(new DateTime($optInDate));
$user->setOptInUrl($optInUrl);
$user->setUid($userUid);

$client = new Client('https://agency.tracking.domain/coreg_(abc)/', new Generator());
/** @var \WebsetStudio\KoolTrackerClient\Model\Response $answer */
$answer = $client->send($user);

// Process the answer as you wish
// bool   $answer->isSuccessful();
// string $answer->getMessage();
```
