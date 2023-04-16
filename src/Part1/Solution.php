<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1;


class Solution
{
    /**
     * @var string A series of characters used to tell the man if he should go up or down a floor.
     *      Open parenthesis `(` indicates going UP a floor
     *      Closing parenthesis ')' indicates going DOWN a floor
     *      See the `input` folder for examples
     */
    private string $instructions;

    public function __construct(string $instructions)
    {
        $this->instructions = $instructions;
    }

    /**
     * @return int The floor number that the man will arrive at after starting at floor 0 and following all of the instructions
     */
    public function getAnswer(): int
    {
        // TODO implement the solution
        $floorDirectionService = new FloorDirectionsService();
        $floorMov = new FloorMovements($floorDirectionService);
        return $floorMov->evaluteFloor($this->instructions);
        
    }
}
