<?php

namespace BelajarComposerLibrary\Belajar;

class Customer {
    public function __construct(private string $name){

    }

    public function sayHello(string $name="Guest"):string {
        return "Hello $name, my Name is $this->name";
    }
}