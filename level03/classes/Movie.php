<?php

class Movie
{

    private string $title;
    private int $minutes;
    private string $director;

    public function __construct(string $title, int $minutes, string $director)
    {
        $this->title = $title;
        $this->minutes = $minutes;
        $this->director = $director;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getMinutes(): int
    {
        return $this->minutes;
    }

    public function getDirector(): string
    {
        return $this->director;
    }
}
