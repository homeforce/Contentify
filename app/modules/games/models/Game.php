<?php namespace App\Modules\Games\Models;

use BaseModel;

class Game extends BaseModel {

    protected $softDelete = true;

    protected $fillable = ['title', 'short'];

    public static $fileHandling = ['icon' => ['type' => 'image']];

    public static $rules = [
        'title'     => 'required',
        'short'     => 'required',
    ];

}