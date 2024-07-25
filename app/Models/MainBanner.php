<?php 
    namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainBanner extends Model
{
   protected $table = 'main_banner';
   protected $primaryKey = 'recid_main_banner';
   public $timestamps = false;
   public $incrementing = false;
} 
