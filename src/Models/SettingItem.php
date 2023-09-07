<?php

namespace KonstantinFilin\LaraSettings\Models;

/**
 * 
 */
class SettingItem {
    protected $name;
    protected $label;
    protected $value;
    
    public function __construct(string $name, string $label, string $value) {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getValue() {
        return $this->value;
    }
}
