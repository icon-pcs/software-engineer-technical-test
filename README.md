# Software Engineer Technical Test 2021

## The puzzle

A man is trying to visit his friend in a large apartment building, but he can't find the right floor - the directions
he got are a little confusing. He starts on the ground floor (floor 0) and then follows the instructions one character
at a time.

An opening parenthesis, `(`, means he should go up one floor, and a closing parenthesis, `)`, means he should go down
one floor. Any other characters in the instructions should be ignored.

The apartment building is very tall, and the basement is very deep; he will never find the top or bottom floors.

He needs you to help him work out which floor his friend lives on.

## The solution

We have created a PHP class `Solution` in `src/Solution.php`. This class takes an instruction set as a `string` in its
constructor, and has a single method `getAnswer()`. The method is not implemented.

Implement the `getAnswer()` method.

- The solution should work for any set of input instructions (i.e. any combination of `(` and `)` characters).
- We have provided a set of sample instruction sets in `input/`.
- You should not need to change the constructor, or the method signature.
- You may add new PHP classes or functions if you think it is helpful.
- The bundled test suite should not be changed (although you may add more tests if you want).
- The test suite must pass.

## Instructions

- Clone this repository (please do not fork, in order to not share your solution with other applicants).
- Implement your solution in `src/Solution.php`. Remember, you can add more PHP classes and functions if you want to.
  You can do this in the `src/` directory.
- Commit your solution.
- Create a public GitHub repository and push the cloned repository to it.
- Please email a link to the repository to the recruiter you have been in contact with.

## Running the tests

The tests will run automatically any time you push, using GitHub Actions. You can verify that the tests pass for your solution
by visiting your GitHub repository homepage, then clicking `Actions` at the top of the page.
 

### Running the tests locally (on your computer)

We have deliberately designed this puzzle so that you do not need to run the tests locally to demonstrate that you have solved it.
However, it is of course possible by following these steps:

- You will need an environment with PHP 7.4 or PHP 8.0, and Composer.
- Install dependencies with `composer install`.
- Run tests with `vendor/bin/phpunit`.
