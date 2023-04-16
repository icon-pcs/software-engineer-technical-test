<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1;

class FloorMovements{
    
    private int $floorno;
    private FloorDirectionsService $directionService;
    
    public function __construct(FloorDirectionsService $directionService)
    {
        $this->floorno = 0;
        $this->directionService = $directionService;
    }

    public function evaluteFloor(string $instructions): int {
        $floorinstructions = str_split(trim($instructions));

        foreach ($floorinstructions as $value) {
            $this->floorno += $this->directionService->getFloorDirection($value);
        }

        return $this->floorno;
    }

    
}