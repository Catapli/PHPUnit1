<?php
namespace App;

class Trainer extends Member{

    private $charge;

    /**
     * @param $charge
     */
    public function __construct($charge,$name, $birthday, $country,$yellowCard, $redCard)
    {
        parent::__construct($name, $birthday, $country,$yellowCard, $redCard);
        $this->charge = $charge;
    }

    public function render()
    {
        $trainer = $this;
        loadView("trainer",compact("trainer"));

    }

    /**
     * @return mixed
     */
    public function getCharge()
    {
        return $this->charge;
    }



}