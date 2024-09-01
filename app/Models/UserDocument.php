<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;

    protected $table = 'user_document';

    protected $fillable = [
        'user_id',
        'document_type_id',
        'nro_documento'
    ];
}
