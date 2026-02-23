<?php

require_once 'Movie.php';

class Cinema
{

    private string $name;
    private string $city;
    private array $movies = [];

    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function addMovie(Movie $movie)
    {
        $this->movies[] = $movie;
    }

    public function getMovies()
    {
        return $this->movies;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getLongestMovie()
    {
        if (empty($this->movies)) {
            return null;
        }
        $longest = $this->movies[0];
        foreach ($this->movies as $movie) {
            if ($movie->getMinutes() > $longest->getMinutes()) {
                $longest = $movie;
            }
        }
        return $longest;
    }
}
