<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObrasArte extends Model
{
    use HasFactory;
    protected $table = 'obrasdearte';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
