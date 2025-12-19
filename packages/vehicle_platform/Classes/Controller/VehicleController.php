<?php
declare(strict_types=1);

namespace JuriBreslauer\VehiclePlatform\Controller;

use JuriBreslauer\VehiclePlatform\Domain\Repository\VehicleRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

final class VehicleController extends ActionController
{
    public function __construct(
        private readonly VehicleRepository $vehicleRepository
    ) {}

    public function listAction(): ResponseInterface
    {
        $this->view->assign(
            'vehicles',
            $this->vehicleRepository->findAll()
        );

        return $this->htmlResponse();
    }
}
