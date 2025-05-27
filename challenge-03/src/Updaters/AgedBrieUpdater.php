<?php

namespace App\Updaters;

use App\Item;
use App\ItemUpdater;

class AgedBrieUpdater implements ItemUpdater
{
    public function update(Item $item): void
    {
        $item->sellIn--;

        if ($item->quality < 50) {
            $item->quality++;
            if ($item->sellIn < 0 && $item->quality < 50) {
                $item->quality++;
            }
        }
    }
}
