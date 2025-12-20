<?php
declare(strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
// use JuriBreslauer\VehiclePlatform\Controller\VehicleController;

ExtensionUtility::configurePlugin(
    'VehiclePlatform',
    'VehicleList',
    [
    ],
    [
    ]
);
