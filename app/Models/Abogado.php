<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    use HasFactory; 
    
    public function terceros(){
    return $this->belongsTo(Tercero::class,'tercero_id');
    }

}
