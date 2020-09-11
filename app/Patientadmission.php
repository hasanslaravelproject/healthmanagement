<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientadmission extends Model
{
    protected $guarded = [];
    protected $fillable = [
                           'case_id',
                           'case_history',
                           'patient_id',
                           'hospital_id',
                           'reffered_by',
                           'doctor_id',
                           'seat_id',
                           'admitted_by',
                           'status',
                           ];

                           public function patients(){
                            return $this->belongsTo(Patient::class);
                        }
                           public function doctors(){
                            return $this->belongsTo(Doctor::class);
                        }
                           public function hospital(){
                            return $this->belongsTo(Hospital::class);
                        }

}

