<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email', 'password', 'created_at']; // Fields that can be mass-assigned

    // You can define validation rules here or in the controller
    protected $validationRules = [
        'name' => 'required',
        'email' => 'required|valid_email',
        'password' => 'required',
    ];
}
