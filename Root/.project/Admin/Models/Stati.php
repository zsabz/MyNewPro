<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stati extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','deleted_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    protected $dates =['deleted_at'];
    
  
}
