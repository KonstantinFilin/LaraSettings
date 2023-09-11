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
    const TYPE_BOOL = 'bool';
    
    protected $casts = [
        'data' => 'array'
    ];
    
    public function __construct() {
        $this->type = self::TYPE_STR;
    }
    
    public static function getTypeList() {
        return [
            self::TYPE_STR,
            self::TYPE_LST,
            self::TYPE_BOOL
        ];
    }
    
    public function getIsTypeSelectAttribute() {
        return $this->type == self::TYPE_LST;
    }
    
    public function getIsTypeBoolAttribute() {
        return $this->type == self::TYPE_BOOL;
    }

}
