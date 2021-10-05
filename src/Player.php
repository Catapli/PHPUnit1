<?php
namespace App;
use DateTime;
class Player {
    private $name;
    private $birthday;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCard;
    private $redCard;

    public function __construct($name, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function Age() {
        list($dia,$mes,$ano) = explode("/",$this->birthday);
        $anoDiferencia = date("Y") - $ano;
        $mesDiferencia = date("m") - $mes;
        $diaDiferencia = date("d") - $dia;
        if ($diaDiferencia < 0 || $mesDiferencia <0){
            $anoDiferencia--;
        }
        return $anoDiferencia;
    }

    public function Score()
    {
        $this->goals = $this->goals+1;
    }

    public function AddCard($color){
        if ($color === 'roja'){
            $this->redCard = $this->redCard+1;
        }else if ($color === 'amarilla'){
            $this->yellowCard = $this->yellowCard+1;
        }

    }
    public function PlayMinutes($min){
        $this->minutes = $this->minutes+$min;
    }
    public function render(){
        return "Jugador: ".$this->name." ".$this->birthday." ".$this->country." ".$this->dorsal
            ." ".$this->position." ".$this->goals." ".$this->matches." ".$this->minutes." ".$this->yellowCard
            ." ".$this->redCard;
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
    public function getBirthday()
    {
        return $this->birthday;
    }

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
    public function getCountry()
    {
        return $this->country;
    }

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

    /**
     * @return mixed
     */
    public function getYellowCard()
    {
        return $this->yellowCard;
    }

    /**
     * @param mixed $yellowCard
     */
    public function setYellowCard($yellowCard): void
    {
        $this->yellowCard = $yellowCard;
    }

    /**
     * @return mixed
     */
    public function getRedCard()
    {
        return $this->redCard;
    }

    /**
     * @param mixed $redCard
     */
    public function setRedCard($redCard): void
    {
        $this->redCard = $redCard;
    }





}