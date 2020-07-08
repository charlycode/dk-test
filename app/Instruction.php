<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'step_id',
        'ingredient_id',
        'position',
        'quantity',
        'unit',
        'comments',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'step_id' => 'integer',
        'ingredient_id' => 'integer',
        'quantity' => 'decimal',
    ];


    public function step()
    {
        return $this->belongsTo(\App\Step::class);
    }

    public function ingredient()
    {
        return $this->belongsTo(\App\Ingredient::class);
    }
}
