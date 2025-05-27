<?php

namespace App\Updaters;

use App\Item;
use App\ItemUpdater;

class ConjuredUpdater implements ItemUpdater
{
    public function update(Item $item): void
    {
        $item->sellIn--;

        $degradation = $item->sellIn < 0 ? 4 : 2;

        $item->quality = max(0, $item->quality - $degradation);
    }
}
