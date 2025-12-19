<?php
declare(strict_types=1);

namespace JuriBreslauer\VehiclePlatform\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

final class Vehicle extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
