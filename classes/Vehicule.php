<?php

class Vehicule
{
public $masse;
public $vitesse = 0;

public function calculerEnergieCinetique()
{
  return 0.5 * $this->masse * $this->vitesse ** 2;
}
public function afficherMessageDebile()
{
  echo "Je roule en caisse";
}
public function __destruct()
{
  echo "<h1>Je suis destroyed</h1>";
}
}
