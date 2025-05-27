<?php

namespace App;

class Item
{
    public string $name;
    public int $quality;
    public int $sellIn;

    public function __construct(string $name, int $quality, int $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }
}
