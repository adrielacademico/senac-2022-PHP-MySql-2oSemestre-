<?php

class Main {
    public function __construct()
    {
        echo "começou....\n";
    }

    public function teste(string $nome) : void
    {
        echo "meu nome é $nome";
    }
}

(new Main())->teste("Adriel Sales");