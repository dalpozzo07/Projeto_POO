<?php
require_once 'Animal.php';

class Hamster extends Animal{

    public function Falar(){
        echo " Engraçado. Eles não falam, não atiram, 
        não fazem cálculos... mas ainda assim, gosto deles.
        Devem ter algum algoritmo emocional que eu não entendi ainda.\n";
    }

}