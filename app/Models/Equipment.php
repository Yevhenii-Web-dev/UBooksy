<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'equipment';
    protected $primaryKey = 'equipment_id';

    protected $fillable = [
        'equipment_id',
        'maker',
        'model',
        'type',
        'created_at',
        'updated_at'
    ];

}
