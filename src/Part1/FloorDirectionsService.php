<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1;
class FloorDirectionsService {

    private array $symbolMap;

    public function __construct() {
        $this->symbolMap = [
            '(' => new OneFloorUp(),
            ')' => new OneFloorDown(),
        ];
    }

    public function getFloorDirection(string $symbol): int {
       
        if (!isset($this->symbolMap[$symbol])) {
            throw new \InvalidArgumentException(sprintf('Invalid symbol provided "%s"', $symbol));
        }

        return $this->symbolMap[$symbol]->getFloorDirection();
    }
}