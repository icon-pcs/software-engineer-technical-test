<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Test\Part1;

use IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1\Solution;
use IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1\FloorMovements;
use IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1\FloorDirectionsService;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider inputFiles
     * @expectedException InvalidArgumentException
     */
    public function it_throws_an_exception_when_input_is_empty(string $inputFile): void
    {
    $instructions = trim(file_get_contents(__DIR__ . "/../../input/" . $inputFile));
    
    if ($instructions === '') {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Input cannot be empty');

        $solution = new Solution('');
        $solution->getAnswer();
    } else {
        $solution = new Solution($instructions);
        $this->assertNotNull($solution->getAnswer());
    }
    }

    public function it_provides_the_correct_answer_to_the_puzzle(string $inputFile, int $expectedAnswer): void
    {
        $instructions = trim(file_get_contents(__DIR__ . "/../../input/" . $inputFile));

        $solution = new Solution($instructions);

        $this->assertEquals($expectedAnswer, $solution->getAnswer());
    }

    public function inputFiles(): array
    {
        return [
            // first array entry is the input file, second array entry is the expected answer to the puzzle, i.e. the floor #
            ["1.txt", 0],
            ["2.txt", 3],
            ["3.txt", -3],
            ["4.txt", 3],
            ["5.txt", -1],
            ["6.txt", 138],
            
        ];
    }
    
    
}
