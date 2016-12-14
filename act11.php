<?php

class act11
{
private $minNumDado=0;
private $maxNumDado=12;
public $tirarDado=0;


//Propiedades
//Getter
public function getMinNumDado(){

  return $this->minNumDado;

}

public function getMaxNumDado()
{
  return $this->maxNumDado;
}


//Setter

public function setMinNumDado($minNumDado)
{
  if ($minNumDado<0) {
    $this->$minNumDado=0;
  }
  else {
    $this->minNumDado=$minNumDado;
  }
}

public function setMaxNumDado($maxNumDado)
{
  if ($maxNumDado>12) {
    $this->maxNumDado=12;
  }
  else {
    $this->maxNumDado=$maxNumDado;
  }
}

//Tirar dado rand
public function tirarDado()
{
  return $this->tirarDado=rand($this->minNumDado,$this->maxNumDado);

}

}
 ?>
