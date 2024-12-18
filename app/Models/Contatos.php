<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $fillable = [
        'nome', 
        'numero', 
        'email'];
}
