<?php

namespace KonstantinFilin\LaraSettings\Models;

/**
 * 
 */
class SettingSelectItem extends SettingItem {
    protected $availableItems = [];
    
    public function getAvailableItems() {
        return $this->availableItems;
    }

    public function addAvailableItem(string $key, string $value): void {
        $this->availableItems[$key] = $value;
    }
}
