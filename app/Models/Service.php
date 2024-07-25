<?php 
    namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   protected $table = 'service';
   protected $primaryKey = 'recid_service';
   public $timestamps = false;
   public $incrementing = false;
} 
