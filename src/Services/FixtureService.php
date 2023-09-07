<?php

namespace KonstantinFilin\LaraSettings\Services;

class FixtureService {
    public function run(\KonstantinFilin\LaraSettings\Models\SettingList $settingList) {
        foreach ($settingList->getItems() as $setting) {
            $model = new \KonstantinFilin\LaraSettings\Models\Setting();
            $model->key = $setting->getName();
            $model->label = $setting->getLabel();
            $model->value = $setting->getValue();
            $model->save();
            echo "Saving: " . $model->key . " = " . $model->value . "\n";
        }
    }
}
