<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'type','branch_code','address','contact_number','email','status'];
	protected $guarded = [];
}
