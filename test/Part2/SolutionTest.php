<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Test\Part2;

use IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part2\Solution;
use PHPUnit\Framework\TestCase;
use PDO;
use function IconLanguageServices\SoftwareEngineerTechnicalSqlTest2021\Part2\build_database;

/**
 * @coversDefaultClass \IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part2\Solution
 */
class SolutionTest extends TestCase
{
    private PDO $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('sqlite::memory:');
        build_database($this->pdo);
    }

    /**
     * @test
     * @covers ::artistAndSongTitleSQL
     */
    public function it_retrieves_the_artist_name_and_song_title_for_each_song(): void
    {
        $solution = new Solution();
        $sql = $solution->artistAndSongTitleSQL();

        $statement = $this->pdo->query($sql);

        if ( ! $statement) {
            $errorInfo = $this->pdo->errorInfo();
            if ($errorInfo[0] == '00000') {
                self::fail('Please implement `artistAndSongTitleSQL`');
            }
            self::fail($this->pdo->errorInfo()[2]);
        }

        $results = $statement->fetchAll(PDO::FETCH_NUM);
        self::assertContains(['The Beatles', 'Come Together'], $results);
        self::assertContains(['The Beatles', 'Yellow Submarine'], $results);
        self::assertContains(['The Beatles', 'Eleanor Rigby'], $results);
        self::assertContains(['The Beach Boys', 'Wouldn\'t It Be Nice'], $results);
        self::assertContains(['The Beach Boys', 'Good Vibrations'], $results);
        self::assertContains(['The Beach Boys', 'Sloop John B.'], $results);
        self::assertContains(['Rick Astley', 'Never Gonna Give You Up'], $results);
        self::assertContains(['Rick Astley', 'Together Forever'], $results);
        self::assertContains(['Nirvana', 'Smells Like Teen Spirit'], $results);
        self::assertContains(['Nirvana', 'Come as You Are'], $results);

        self::assertCount(10, $results);
    }

    /**
     * @test
     * @covers ::artistsWithMultipleGenresSQL
     */
    public function it_retrieves_artists_with_multiple_genres_and_their_genre_count(): void
    {
        $solution = new Solution();
        $sql = $solution->artistsWithMultipleGenresSQL();

        $statement = $this->pdo->query($sql);

        if ( ! $statement) {
            $errorInfo = $this->pdo->errorInfo();
            if ($errorInfo[0] == '00000') {
                self::fail('Please implement `artistsWithMultipleGenresSQL`');
            }
            self::fail($errorInfo[2]);
        }

        $results = $statement->fetchAll(PDO::FETCH_NUM);
        
        self::assertContains(['The Beatles', '3'], $results, "The Beatles have 3 genres in the dataset");
        self::assertContains(['The Beach Boys', '2'], $results, "The Beach Boys have 2 genres in the dataset");
        self::assertContains(['Nirvana', '2'], $results, "Nirvana have 2 genres in the dataset");

        self::assertCount(3, $results);
    }
}
