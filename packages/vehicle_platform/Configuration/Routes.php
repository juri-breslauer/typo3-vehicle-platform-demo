<?php
declare(strict_types=1);

use JuriBreslauer\VehiclePlatform\Controller\VehicleAppController;
use TYPO3\CMS\Core\Routing\RouteCollection;

return static function (RouteCollection $routes): void {
    $routes->add(
        'vehicle_app_list',
        new \TYPO3\CMS\Core\Routing\Route(
            '/vehicles',
            [
                '_controller' => VehicleAppController::class . '::list',
            ]
        )
    );
};
