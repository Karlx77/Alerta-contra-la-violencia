<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyCircle extends Model
{
    protected $table = 'family_circles';

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'code_id',
    ];
}
