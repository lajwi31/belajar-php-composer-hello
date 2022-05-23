<?php

namespace BelajarComposerLibrary\Belajar;

class Customer {
    public function __construct(private string $name){

    }

    public function sayHello(string $name):string {
        return "Hello $name, my Name is $this->name";
    }
}