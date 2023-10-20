<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Type extends Model
{
    use HasFactory;

    public $table='Job_Type';

    public function types(){
        return $this->belongsTo(Job_Type::class);
    }

}
