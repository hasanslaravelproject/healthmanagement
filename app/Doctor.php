<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guarded = [];
    protected $fillable = ['name', 'hospital_name','department','email','status','profile_photo'];
    public function patientadmission(){
        return $this->hasMany(Patientadmission::class);
    }
}
