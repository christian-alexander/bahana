<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditTanki extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
}
