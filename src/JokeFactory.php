<?php

namespace Broswilli\ChuckNorrisJokes;

class JokeFactory
{

    protected $jokes = [
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        'When the Boogeyman goes to sleep at night he checks his closet for Chuck Norris.',
    ];

    public function __construct(array $jokes = null)
    {
        if($jokes){
            $this->jokes = $jokes;
        }

    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

}