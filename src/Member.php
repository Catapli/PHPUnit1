<?php
namespace App;
abstract class Member{
    protected $name;
    protected $birthday;
    protected $country;
    protected $yellowCard;
    protected $redCard;

    /**
     * @param $name
     * @param $birthday
     * @param $country
     * @param $yellowCard
     * @param $redCard
     */
    public function __construct($name, $birthday=0, $country=0, $yellowCard=0, $redCard=0)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function AddCard($color){
        if ($color === 'roja'){
            $this->redCard = $this->redCard+1;
        }else if ($color === 'amarilla'){
            $this->yellowCard = $this->yellowCard+1;
        }

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
    public abstract function render();

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
     * @return int|mixed
     */
    public function getBirthday(): mixed
    {
        return $this->birthday;
    }

    /**
     * @param int|mixed $birthday
     */
    public function setBirthday(mixed $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int|mixed
     */
    public function getCountry(): mixed
    {
        return $this->country;
    }

    /**
     * @param int|mixed $country
     */
    public function setCountry(mixed $country): void
    {
        $this->country = $country;
    }

    /**
     * @return int|mixed
     */
    public function getYellowCard(): mixed
    {
        return $this->yellowCard;
    }

    /**
     * @param int|mixed $yellowCard
     */
    public function setYellowCard(mixed $yellowCard): void
    {
        $this->yellowCard = $yellowCard;
    }

    /**
     * @return int|mixed
     */
    public function getRedCard(): mixed
    {
        return $this->redCard;
    }

    /**
     * @param int|mixed $redCard
     */
    public function setRedCard(mixed $redCard): void
    {
        $this->redCard = $redCard;
    }




}
