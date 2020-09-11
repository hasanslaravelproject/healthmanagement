<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $guarded = [];
    protected $fillable = ['patient_name', 'patient_id','seat_no','status'];

    public function seat(){
        return $this->belongsTo(Patient::class);
    }
}
