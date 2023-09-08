<?php

namespace KonstantinFilin\LaraSettings\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = "larasettings";
    public $timestamps = false;
    
    const TYPE_STR = 'str';
    const TYPE_LST = 'lst';
    
    protected $casts = [
        'data' => 'array'
    ];
    
    public function __construct() {
        $this->type = self::TYPE_STR;
    }
    
    public static function getTypeList() {
        return [
            self::TYPE_STR,
            self::TYPE_LST
        ];
    }
    
    public function getAbcAttribute() {
        $ret = [];
        
        /*if (!$this->data) {
            return [];
        }*/
        
        /*$dataJson = json_decode($this->data, true);
        
        if ($dataJson) {
            foreach ($dataJson as $k => $v) {
                $ret[$k] = $v;
            }
        }*/
        
        // dd($dataJson, $ret);
        
        return "aabc";
    }
    
    public function getIsTypeSelectAttribute() {
        return $this->type == self::TYPE_LST;
    }

}
