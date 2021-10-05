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
    public function Render(){
        return $this->name." ".$this->players." ".$this->matches." ".$this->won." "
            .$this->lost." ".$this->tie." ".$this->ScoreGoals." ".$this->ConcededGoals;
    }
    public function SignPlayer($player){
        $this->players[] = $player;
    }




}