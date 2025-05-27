<?php

namespace App;

use App\Updaters\AgedBrieUpdater;
use App\Updaters\BackstagePassesUpdater;
use App\Updaters\SulfurasUpdater;
use App\Updaters\ConjuredUpdater;
use App\Updaters\DefaultUpdater;

class ItemUpdaterFactory
{
    public static function create(Item $item): ItemUpdater
    {
        return match ($item->name) {
            'Aged Brie' => new AgedBrieUpdater(),
            'Backstage passes to a TAFKAL80ETC concert' => new BackstagePassesUpdater(),
            'Sulfuras, Hand of Ragnaros' => new SulfurasUpdater(),
            'Conjured Mana Cake' => new ConjuredUpdater(),
            default => new DefaultUpdater(),
        };
    }
}
