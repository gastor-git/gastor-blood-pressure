<?php

declare(strict_types=1);

namespace App\Users\Infrastructure\Adapters;

use App\BloodPressureReadings\Infrastructure\API\API;

class BloodPressureReadingsAdapter
{
    public function __construct(private readonly API $bloodPressureReadingsApi)
    {
    }

    public function getReadings(): array
    {
        $readings = $this->bloodPressureReadingsApi->getReadings();
        // mapping
        $result = [];

        return $result;
    }
}
