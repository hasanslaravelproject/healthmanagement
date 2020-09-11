<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
	protected $guarded = [];
    protected $fillable = ['name', 'type','branch_code','address','contact_number','email','status','profile_photo'];

    public function patientadmissions(){
        return $this->hasMany(Patientadmissions::class);
}
}