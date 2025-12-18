<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use JuriBreslauer\VehiclePlatform\Controller\VehicleController;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'VehiclePlatform',
    'VehicleList',
    [
        VehicleController::class => 'list',
    ],
    []
);
