<?php

namespace App\Updaters;

use App\Item;
use App\ItemUpdater;

class DefaultUpdater implements ItemUpdater
{
    public function update(Item $item): void
    {
        $item->sellIn--;

        if ($item->quality > 0) {
            $item->quality--;
            if ($item->sellIn < 0 && $item->quality > 0) {
                $item->quality--;
            }
        }
    }
}
