<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

        protected $guarded = [];
        protected $fillable = ['name','seat_no','address','contact_number','email','status','profile_photo'];

        public function patientadmission(){
            return $this->hasOne(Patientadmission::class);
        }
    }