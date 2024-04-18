<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposicion extends Model
{
    use HasFactory;
    protected $table = 'exposiciones';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
