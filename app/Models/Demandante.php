<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandante extends Model
{
    use HasFactory;
    protected $table = "demandantes";

    public function terceros(){
        return $this->belongsTo(Tercero::class,'tercero_id');
        }
    
}
