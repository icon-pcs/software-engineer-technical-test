<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part2;

class Solution
{
    /**
     * Return an SQL statement (SELECT ...) to retrieve
     * a row for each song with the artist's name and the song title
     *
     * e.g.
     *   The Beatles, Yellow Submarine
     *   Nirvana, Smells Like Teen Spirit
     *   Rick Astley, Never Gonna Give You Up
     *
     * @return string
     */
    public function artistAndSongTitleSQL(): string
    {
        return <<<SQL
            -- Put your SQL statement here
            SELECT name as artistname,title as songtitle 
            FROM `songs` 
            INNER JOIN artists 
            ON artists.id = songs.artist_id;
        SQL;
    }

    /**
     * Return an SQL statement (SELECT ...) to retrieve
     * each artist that works in MULTIPLE genres along
     * with the count of how many genres they work in
     *
     * e.g.
     *   The Beatles, 3
     *   The Beach Boys, 2
     *
     * @return string
     */
    public function artistsWithMultipleGenresSQL(): string
    {
        return <<<SQL
            -- Put your SQL statement here
            SELECT artists.name as artistname, COUNT(DISTINCT genres.name) as genre_count
            FROM songs
            INNER JOIN artists 
            ON artists.id = songs.artist_id
            INNER JOIN songs_genres
            ON songs_genres.song_id = songs.id
            INNER JOIN genres
            ON genres.id = songs_genres.genre_id
            GROUP BY artists.name
            ORDER BY genre_count DESC;
        SQL;
    }
}
