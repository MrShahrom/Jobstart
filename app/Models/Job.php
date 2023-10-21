<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Job_Type;
use App\Models\Company;

class Job extends Model
{
    use HasFactory;

    protected $fillable=['title','salary','company_id','type_id','location_id','description'];

    public $table='job';
    public function types(){
        return $this->hasMany(Job_Type::class, 'id', 'type_id');
    }

    public function companies(){
        return $this->hasMany(Company::class, 'id', 'company_id');
    }

    public function locations(){
        return $this->hasMany(Location::class, 'id', 'location_id');
    }
    
}
