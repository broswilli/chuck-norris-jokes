<?php

namespace Broswilli\ChuckNorrisJokes\Tests;

use Broswilli\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{

    public function test_it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a Joke',
        ]);
        $joke = $jokes->getRandomJoke();
        $this->assertSame('This is a Joke', $joke);
    }

    public function test_it_returns_a_predefined_joke()
    {

        $chuckNorrisJokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
            'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
        $this->assertContains($joke, $chuckNorrisJokes);
    }
}