<?php

class Animal {

public $name;
public $price;
public $picture;


public function setName($nameSet,$priceSet,$pictureUrl){

    $this->name = $nameSet;
    $this->setPrices ($priceSet);
    $this->setPicture ($pictureUrl);

}
    
protected function setPrices($priceSet){

    $this->price = $priceSet;
    

}

protected function setPicture($pictureUrl){

    $this->picture = $pictureUrl;

}
    
}

$lion = new Animal;
$elephant = new Animal;
$otter = new Animal;
$rhino = new Animal;
$tucan = new Animal;
$camel = new Animal;
$twoHumpCamel = new Animal;
$twoHumpCamel = new Animal;
$komodoDragon = new Animal;

$lion->setName("lion", "1,000,000","img/lions.jpg");
$elephant->setName("elephant", "500,000","img/elephant.jpg");
$otter->setName("otter", "20,000","img/otter.jpg");
$rhino->setName("rhino", "60,000","img/rhino.jpg");
$tucan->setName("tucan", "10,000","img/tucan.jpg");
$camel->setName("camel", "30,000","img/camel.jpg");
$twoHumpCamel->setName("Two Hump Camel", "40,000","img/twoHumpCamel.jpg");
$komodoDragon->setName("Komodo Dragon", "500","img/komodoDragon.jpg");

    
    
   
    
    
    ?>