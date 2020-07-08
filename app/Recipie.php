<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
        'softDeletes',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
    ];


    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }
}
