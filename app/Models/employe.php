<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $table = 'employes'; // Nombre de la tabla

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'position', 'salary', 'hire_date', 'status'];


    
}

