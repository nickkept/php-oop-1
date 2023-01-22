<?php
class Movie {
    private $title;
    private $director;
    private $maincast;
    private $year;
    private $genre;

    function __construct($_title, $_director, $_maincast, $_year, $_genre) {
        $this->setTitle($_title);
        $this->setDirector($_director);
        $this->setMaincast($_maincast);
        $this->setYear($_year);
        $this->setGenre($_genre);
    }


    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($_title)
    {
        $this->title = $_title;

        return $this;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     * @return  self
     */ 
    public function setDirector($_director)
    {
        $this->director = $_director;

        return $this;
    }

    /**
     * Get the value of maincast
     */ 
    public function getMaincast()
    {
        return $this->maincast;
    }

    /**
     * Set the value of maincast
     *
     * @return  self
     */ 
    public function setMaincast($_maincast)
    {
        $this->maincast = $_maincast;

        return $this;
    }

    /**
     * Get the value of anno_uscita
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of anno_uscita
     *
     * @return  self
     */ 
    public function setYear($_year)
    {
        $this->year = $_year;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($_genre)
    {
        $this->genre = $_genre;

        return $this;
    }

    public function getTitleandDirector() {
        return $this->title . " " . $this->director;
    }
}
?>