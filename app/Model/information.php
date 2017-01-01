<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    protected $table='informations';
    protected $fillable=[
    'name',
    'address',
    'phone_no',
    'email'];
}
