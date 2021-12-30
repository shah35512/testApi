<?php

namespace App\Models\Agency;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
