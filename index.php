<?php

class Score {
    private int $hunger = 0;
    private int $fun = 0;

    public function implementFun(int $funPoints) {
        $this->fun += $funPoints;
    }

    public function getFun() 
    {
        return $this->fun;
    }
}

class Pet {
    public int $revidedTimes = 0;
    
    public function __construct(public string $name, public Score $score)
    {   
    }

    public function play()
    {
        $this->score->implementFun(5);

        return $this;
    }

    public function feed()
    {
        //
        return $this;
    }

    public function isAlive(): bool
    {
        if($this->score->getFun() > 20) {
            return false;
        }
        return true;
    }

    public function parseAction(string $action)
    {
        var_dump($action);
        if ($action == '1') {
            $this->play();
            return;
        }
        if ($action == '2') {
            $this->feed();
            return;
        }

        throw new \Exception('No entiendo esa opcion');

    }
}

$name = readline('Como se llama su mascota?');

$myPet = new Pet($name, new Score());

while($myPet->isAlive()) {
    $action = readline('Que deses hacer ahora? (opciones 1. Jugar, 2. Comer');
    $myPet->parseAction($action);
}
var_dump($myPet->play(), 'Game Over');