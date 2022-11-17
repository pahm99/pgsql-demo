<?php

namespace App\Models;

use Database\Factories\ClientesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new ClientesFactory();
    }
}
