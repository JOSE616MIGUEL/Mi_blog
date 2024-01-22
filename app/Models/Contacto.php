<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $table = 'contactos';  

    protected $fillable = [
        'asunto',
        'mensaje',
        'users_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id','id');
    }
}
