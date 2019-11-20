<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelDeUrgencia extends Model
{
    protected $table = 'niveles_urgencia';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = [];
    use SoftDeletes;
}
