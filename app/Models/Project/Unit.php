<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'price',
        'size',
        'size_unit',
        'floor_id',
    ];

    public function floor()
    {
        return $this->belongsTo(Floor::class, 'floor_id');
    }
}
