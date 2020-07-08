<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipe_id',
        'name',
        'description',
        'position',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'recipe_id' => 'integer',
    ];


    public function recipe()
    {
        return $this->belongsTo(\App\Recipe::class);
    }
}
