<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1;

class OneFloorUp implements FloorRoadmapInterface {
    public function getFloorDirection(): int {
        return 1;
    }
}