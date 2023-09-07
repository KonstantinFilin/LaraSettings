<?php

namespace KonstantinFilin\LaraSettings\Models;

/**
 * 
 */
class SettingList {
    protected $items = [];
    
    public function add(SettingItem $item) {
        $this->items[] = $item;
    }
    
    public function getItems() {
        return $this->items;
    }
}
