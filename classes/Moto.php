<?php

class Moto extends Vehicule
{

public $nbrRoues = 2;

function calculerEnergieCentrifuge($r)
{
  return 0.5 * $this->masse * $this->$vitesse ** 2) / $r;
}
}
