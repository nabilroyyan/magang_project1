<?php 
    namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
   protected $table = 'setting';
   protected $primaryKey = 'recid_setting';
   public $timestamps = false;
   public $incrementing = false;
} 
