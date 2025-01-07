<?php
// app/Models/admin/Admin.php

namespace App\Models\admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins'; // Ensure the correct table name is used

    protected $fillable = [
        'email',
        'password', // Add other fields as needed
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
