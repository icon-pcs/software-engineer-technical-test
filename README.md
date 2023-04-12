# Software Engineer Technical Test

This technical test consists of two parts, one covering PHP, and the other covering SQL.

## Part 1: PHP

### The puzzle

A man is trying to visit his friend in a large apartment building, but he can't find the right floor - the directions
he got are a little confusing. He starts on the ground floor (floor 0) and then follows the instructions one character
at a time.

An opening parenthesis, `(`, means he should go up one floor, and a closing parenthesis, `)`, means he should go down
one floor. Any other characters in the instructions should be ignored.

The apartment building is very tall, and the basement is very deep; he will never find the top or bottom floors.

He needs you to help him work out which floor his friend lives on.

### The solution

We have created a PHP class `Solution` in `src/Part1/Solution.php`. This class takes an instruction set as a `string` in its
constructor, and has a single method `getAnswer()`. The method is not implemented.

Implement the `getAnswer()` method; it should return the floor number, as an `int`, that the instruction set will lead to.

We encourage you to use an object-oriented solution. Although we have included a `Solution` class in this repository,
you can add other classes and/or functions as necessary in order to come up with a solution.

The solution should work for any set of input instructions (i.e. any combination of `(` and `)` characters).

We have provided a set of sample instruction sets in `input/`, and a test that uses each of these sample instruction sets.

Do not remove or change `SolutionTest`. We encourage you to add unit tests for any other classes or functions that you create.


## Part 2: SQL

### The data

We have a collection of tables for a music library application. The tables are as follows:

```
|----------- ARTISTS -----------|
| id (INTEGER) | name (VARCHAR) |
|--------------|----------------|
| 1            | The Beatles    |
|--------------|----------------|
| 2            | Nirvana        |
|--------------|----------------|
| ...          | ...            |
|--------------|----------------|

|----------- SONGS --------------------------------------------|
| id (INTEGER) | title (VARCHAR)         | artist_id (INTEGER) |
|--------------|-------------------------|---------------------|
| 1            | Come Together           | 1                   |
|--------------|-------------------------|---------------------|
| 2            | Smells Like Teen Spirit | 2                   |
|--------------|-------------------------|---------------------|
| ...          | ...                     | ...                 |
|--------------|-------------------------|---------------------|

|----------- GENRES ------------|
| id (INTEGER) | name (VARCHAR) |
|--------------|----------------|
| 1            | Pop            |
|--------------|----------------|
| 2            | Rock           |
|--------------|----------------|
| ...          | ...            |
|--------------|----------------|

|------------- SONGS_GENRES -------------|
| song_id (INTEGER) | genre_id (INTEGER) |
|-------------------|--------------------|
| 1                 | 1                  |
|-------------------|--------------------|
| 1                 | 2                  |
|-------------------|--------------------|
| 2                 | 2                  |
|-------------------|--------------------|
| 2                 | 3                  |
|-------------------|--------------------|
| ...               | ...                |
|-------------------|--------------------|
```


### The solution

We have created a PHP class `Solution` in `src/Part2/Solution.php`. There are two methods in this class, `artistAndSongTitleSQL` and `artistsWithMultipleGenresSQL`.
These methods are not yet implemented.

1. Implement the `artistAndSongTitleSQL()` method; it should return the appropriate SQL to select the artist name and song title for every song in the dataset.
   Fill in the return statement provided with your SQL `SELECT` statement.

1. Implement the `artistsWithMultipleGenresSQL` method; it should return the appropriate SQL to select those artists who have MULTIPLE (>1) genres in the dataset along with the number of genres they have.

- The tests use an in-memory SQLite database filled with data. You can explore the data in `schema/data.sql`.
- You should not need to change anything in `Solution` except to add your SQL.
- The bundled test suite should not be changed (although you may add more tests if you want).
- The test suite must pass.


## Instructions

- Fork this repository and clone it.
- Implement your solution in `src/Part1/Solution.php` and `src/Part2/Solution.php`. Remember, you can add more PHP classes and functions if you want to.
  You can do this in the `src/` directory.
- Commit your solution and push to your fork.
- Submit a pull request to our repository ahead of your scheduled interview.

## Running the tests

The tests will run automatically any time you push, using GitHub Actions. You can verify that the tests pass for your solution
by visiting your GitHub repository homepage, then clicking `Actions` at the top of the page.
 

### Running the tests locally (on your computer)

We have deliberately designed this puzzle so that you do not need to run the tests locally to demonstrate that you have solved it.
However, it is of course possible by following these steps:

- You will need an environment with PHP 7.4 or PHP 8.0, and Composer.
- Install dependencies with `composer install`.
- Run tests with `vendor/bin/phpunit`.
