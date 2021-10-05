<?php
namespace App;
class Team{
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $ScoreGoals;
    private $ConcededGoals;

    public function __construct($name, $matches=0, $won=0, $lost=0, $tie=0, $ScoreGoals=0, $ConcededGoals=0)
    {
        $this->name = $name;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->ScoreGoals = $ScoreGoals;
        $this->ConcededGoals = $ConcededGoals;
    }
    public function render(){
        $lista = $this->players;
        require ("../vistas/equipo.view.php");

    }
    public function SignPlayer(Member $player){
        $this->players[] = $player;
    }




}