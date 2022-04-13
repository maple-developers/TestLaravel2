<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saby_config extends Model
{
    use HasFactory;
    protected $table = 'config';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'config', 'value'];
}
