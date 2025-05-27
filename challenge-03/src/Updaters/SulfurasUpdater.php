<?php

namespace App\Updaters;

use App\Item;
use App\ItemUpdater;

class SulfurasUpdater implements ItemUpdater
{
    public function update(Item $item): void
    {
        // Item never alters
    }
}
