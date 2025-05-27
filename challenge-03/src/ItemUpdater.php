<?php

namespace App;

interface ItemUpdater
{
    public function update(Item $item): void;
}
