<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    use HasFactory;


public function abogados(){

    return $this->hasmany(Abogado::class.'id');
    
}

}

