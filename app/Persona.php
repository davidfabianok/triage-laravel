<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    protected $table = 'personas';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $guarded = [];
    use SoftDeletes;

    public function nivelDeUrgencia()
    {
        return $this->belongsTo('App\NivelDeUrgencia', 'nivel_urgencia_id');

    }
}
