<?php

namespace App;

class GildedRose
{
    private Item $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function tick(): void
    {
        $updater = ItemUpdaterFactory::create($this->item);
        $updater->update($this->item);
    }

    public function getItem(): Item
    {
        return $this->item;
    }
}
