<?php
declare(strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addPlugin(
    [
        'Vehicle Platform – Vehicle List',
        'vehicleplatform_vehiclelist',
        'EXT:vehicle_platform/Resources/Public/Icons/Extension.svg',
    ],
    'list_type',
    'vehicle_platform'
);