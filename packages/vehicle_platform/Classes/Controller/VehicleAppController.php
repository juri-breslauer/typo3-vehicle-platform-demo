<?php
declare(strict_types=1);

namespace JuriBreslauer\VehiclePlatform\Controller;

use Symfony\Component\HttpFoundation\Response;

final class VehicleAppController
{
    public function list(): Response
    {
        return new Response(
            '<h1>Vehicles APP works ✅</h1><p>This page is rendered without TYPO3 CMS pages.</p>'
        );
    }
}
