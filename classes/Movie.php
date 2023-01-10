<?php

class Movie {
    public $title;
    public $genres;
    public $plot;
    public $year;
    public $duration;

    public function __construct(string $title, array $genres, int $duration)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->duration = $duration;
    }

    public function getinfo()
    {
        return "Titolo: {$this->title} e durata: {$this->duration}";
    }
}