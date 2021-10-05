<?php
namespace App;
class Player extends Member {
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;

    public function __construct($name, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        parent::__construct($name, $birthday, $country,$yellowCard, $redCard);
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
    }


    public function Score()
    {
        $this->goals = $this->goals+1;
    }

    public function PlayMinutes($min){
        $this->minutes = $this->minutes+$min;
    }
    public function render(){
        $player= $this;
        loadView("jugadores",compact("player"));
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */


    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getDorsal()
    {
        return $this->dorsal;
    }

    /**
     * @param mixed $dorsal
     */
    public function setDorsal($dorsal): void
    {
        $this->dorsal = $dorsal;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param mixed $goals
     */
    public function setGoals($goals): void
    {
        $this->goals = $goals;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * @param mixed $matches
     */
    public function setMatches($matches): void
    {
        $this->matches = $matches;
    }

    /**
     * @return mixed
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * @param mixed $minutes
     */
    public function setMinutes($minutes): void
    {
        $this->minutes = $minutes;
    }





}