<?php

namespace App\Updaters;

use App\Item;
use App\ItemUpdater;

class BackstagePassesUpdater implements ItemUpdater
{
    public function update(Item $item): void
    {
        $item->sellIn--;

        if ($item->sellIn < 0) {
            $item->quality = 0;
            return;
        }

        if ($item->quality < 50) {
            $item->quality++;

            if ($item->sellIn < 10 && $item->quality < 50) {
                $item->quality++;
            }

            if ($item->sellIn < 5 && $item->quality < 50) {
                $item->quality++;
            }
        }
    }
}
