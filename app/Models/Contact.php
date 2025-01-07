<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    // Optionally, specify any attributes that should be hidden for arrays
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
